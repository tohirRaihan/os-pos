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
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter customer full name']) !!}
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
                {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email address']) !!}
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
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Account password']) !!}
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="gender">Gender</label>
            <div class="input-group">
                <div class="form-check form-check-inline">
                    {!! Form::radio('gender', 'm', false, ['id' => 'gender-m', 'class' => 'form-check-input']) !!}
                    <label class="form-check-label" for="gender-m">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    {!! Form::radio('gender', 'f', false, ['id' => 'gender-f', 'class' => 'form-check-input']) !!}
                    <label class="form-check-label" for="gender-f">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    {!! Form::radio('gender', 'o', false, ['id' => 'gender-o', 'class' => 'form-check-input']) !!}
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
                {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Enter phone number']) !!}
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
                {!! Form::text('address_1', null, ['id' => 'address_1', 'class' => 'form-control', 'placeholder' => 'Enter address here']) !!}
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
                {!! Form::text('address_2', null, ['id' => 'address_2', 'class' => 'form-control', 'placeholder' => 'Enter address here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="city">City</label>
            {!! Form::text('city', null, ['id' => 'city', 'class' => 'form-control', 'placeholder' => 'City']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="state">State</label>
            {!! Form::text('state', null, ['id' => 'state', 'class' => 'form-control', 'placeholder' => 'State']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="zip">Zip</label>
            {!! Form::text('zip', null, ['id' => 'zip', 'class' => 'form-control', 'placeholder' => 'Zip']) !!}
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
                {!! Form::text('country', null, ['id' => 'country', 'class' => 'form-control', 'placeholder' => 'Country']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="discount">Discount</label>
            <div class="input-group">
                {!! Form::text('discount_percent', null, ['id' => 'discount', 'class' => 'form-control', 'placeholder' => 'Discount']) !!}
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
                {!! Form::checkbox('taxable', '1', true, ['class' => 'form-check-input']) !!}
                <label class="form-check-label" for="taxable">Taxable</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="points">Points</label>
            {!! Form::text('points', null, ['id' => 'points', 'class' => 'form-control', 'placeholder' => 'Points']) !!}

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="customer_image">Customer Image</label>
            <div class="input-group">
                <div class="custom-file">
                    {!! Form::file('image', ['class' => 'custom-file-input', 'id' => 'customer_image']) !!}
                    <label class="custom-file-label" for="customer_image">Choose an image</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <!-- textarea -->
        <div class="form-group">
            <label>Note</label>
            {!! Form::textarea('note', null, ['class' => 'form-control', 'placeholder' => 'Enter note ...', 'rows' => '5']) !!}
        </div>
    </div>
</div>
