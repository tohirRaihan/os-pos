<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Supplier Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter supplier full name']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="company_name">Company Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                {!! Form::text('company_name', null, ['id' => 'company_name', 'class' => 'form-control', 'placeholder' => 'Enter supplier company name']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="agency_name">Agency Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                {!! Form::text('agency_name', null, ['id' => 'agency_name', 'class' => 'form-control', 'placeholder' => 'Enter supplier agency name']) !!}
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
            <label for="account_number">Account Number <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                {!! Form::text('account_number', null, ['id' => 'account_number', 'class' => 'form-control', 'placeholder' => 'Enter account number']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email Address <span class="text-danger">*</span></label>
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
            <label for="phone">Phone Number <span class="text-danger">*</span></label>
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

    <div class="col-sm-6">
        <!-- textarea -->
        <div class="form-group">
            <label>Note</label>
            {!! Form::textarea('note', null, ['class' => 'form-control', 'placeholder' => 'Enter note ...', 'rows' => '5']) !!}
        </div>
    </div>

</div>
