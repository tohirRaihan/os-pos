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
        Customer::create($request->merge(['user_id' => $user->id])->all());
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
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        // $customers = User::with('profile')->where('role', 3)->get();
        // dd($customer);
        // dd($customer->user_id);

        // $user = User::with('profile')->where('id', $customer->user_id)->first();
        $user = User::with('profile')->find($customer->id);
        // dd($user->toArray());

        // $customer = User::find($customer->user_id)->profile()->get();
        // $customer = $customer->merge($user);
        // Users::find($CurrentUSerID)->userAdmin()->get();
        // dd($user);


        // dd($customer);

        $profile = $user->profile;
        $customer = $user->toArray() + $profile->toArray();
        // $newCustomer[0] = $user;
        // $newCustomer[1] = $profile;
        // dd($newCustomer);

        // // dd($profile);
        // $customer = array_merge($customer->toArray(), $user->toArray(), $profile->toArray());
        // dd($customer);
        return view('customers.edit', compact('user', 'profile', 'customer'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
