<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\CustomerRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::with('profile')->where('role', 3)->get();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Customer\CustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        // Create a user data in user table as customer
        $user = User::create($request->all());

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

        // Save data in profiles and customers table
        $user->profile()->create(array_merge($request->all(), ['image' => $image_name]));
        $user->customer()->create($request->all());

        return redirect('customers')-with('success', 'Customer created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {
        // Getting values from User, Profile and Customer Model
        $user = User::find($customer->id);
        $profile = $user->profile;
        $customer_table = $user->customer;

        // Convert the values to array and merge them together
        $user_array = $user ? $user->toArray() : [];
        $profile_array = $profile ? $profile->toArray() : [];
        $customer_table_array = $customer_table ? $customer_table->toArray() : [];
        $customer = $user_array + $profile_array + $customer_table_array;

        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CustomerRequest  $request
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, User $customer)
    {
        // Create a user data in user table as customer
        $user = User::with('profile')->find($customer->id);
        $user->update($request->all());

        /*
        |------------------------------------------------------------------
        | Upload profile image inside upload folder
        | Set image name to save it in database for later usage
        |------------------------------------------------------------------
        */
        $image_name = $request->image ?? NULL;
        if ($image = $request->image) {
            $image_name = $user->id . "_" . time() . "_" . rand(100, 500) . "." . $image->getClientOriginalExtension();
            $image->move(public_path('upload/images/profile_images/'), $image_name);
        }

        // Save data in profiles and customers table
        $user->profile()->update($request->only('user_id', 'gender', 'phone', 'address_1', 'address_2', 'city', 'state', 'zip', 'country', 'image'));

        $user->customer()->update($request->only('user_id', 'discount_percent', 'taxable', 'points', 'note'));

        return redirect('/customers')->with('success', 'Customer info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        echo 'destroy called';
        $customer->delete();
        return redirect('customers')-with('success', 'Customer deleted successfully!');
    }
}
