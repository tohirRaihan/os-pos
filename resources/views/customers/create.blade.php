@extends('layouts.dashboard')

@section('content-title')
    New Customer
@endsection

@section('content')




    <!-- form start -->
    <form>
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Customer Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-signature"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="name" placeholder="Enter customer full name">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="email" placeholder="Enter email address">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-key"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" id="password" placeholder="Account password">
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="input-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="gender-m" name="gender" type="radio" value="m">
                            <label class="form-check-label" for="gender-m">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="gender-f" name="gender" type="radio" value="f">
                            <label class="form-check-label" for="gender-f">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="gender-o" name="gender" type="radio" value="o">
                            <label class="form-check-label" for="gender-o">Other</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="address_1">Address 1</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="far fa-address-card"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="address_1" placeholder="Enter address here">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="address_2">Address 2</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="far fa-address-card"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="address_2" placeholder="Enter address here">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" placeholder="State">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="Zip">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="country">Country</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="far fa-flag"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="country" placeholder="Country">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="discount" placeholder="Discount">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-percent"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="taxable" id="taxable" type="checkbox" value="1">
                        <label class="form-check-label" for="taxable">Taxable</label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="points">Points</label>
                    <input type="text" class="form-control" id="points" placeholder="Points">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="customer_image">Customer Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customer_image">
                            <label class="custom-file-label" for="customer_image">Choose an image</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <!-- textarea -->
                <div class="form-group">
                    <label>Note</label>
                    <textarea class="form-control" rows="5" placeholder="Enter note ..."></textarea>
                </div>
            </div>
        </div>
        {{-- /.row --}}

        <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Submit</button>
    </form>

@endsection
