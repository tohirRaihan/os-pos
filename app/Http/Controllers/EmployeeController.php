<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = User::with('profile', 'employee')->where('role', 2)->get();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\EmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        // Create a user data in user table as employee
        $user = User::create($request->all() + ['role' => 2]);

        /*
        |------------------------------------------------------------------
        | Upload profile image inside upload folder
        | Set image name to save it in database for later usage
        |------------------------------------------------------------------
        */
        $image_name = NULL;
        if ($image = $request->image) {
            $image_name = $user->id . "_" . time() . "_" . rand(100, 500) . "." . $image->getClientOriginalExtension();
            $image->move(public_path('upload/images/profile_images/'), $image_name);
        }

        // Save data in profiles and employees table
        $user->profile()->create(array_merge($request->all(), ['image' => $image_name]));
        $user->employee()->create($request->all());

        return redirect('employees')->with('success', 'Employee created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(User $employee)
    {
        // Getting values from User, Profile and Customer Model
        $user = User::find($employee->id);
        $profile = $user->profile;
        $employee_table = $user->employee;

        // Convert the values to array and merge them together
        $user_array = $user ? $user->toArray() : [];
        $profile_array = $profile ? $profile->toArray() : [];
        $employee_table_array = $employee_table ? $employee_table->toArray() : [];
        $employee = $user_array + $profile_array + $employee_table_array;

        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
