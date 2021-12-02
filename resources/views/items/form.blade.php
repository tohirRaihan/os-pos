<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Item Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-tag"></i>
                    </div>
                </div>
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter item name']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="supplier_id">Supplier <span class="text-danger">*</span></label>
            {!! Form::select('supplier_id', $suppliers, null, ['placeholder' => 'Select supplier', 'class' => 'custom-select', 'id' => 'supplier_id']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="sku">SKU <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-barcode"></i>
                    </span>
                </div>
                {!! Form::text('sku', null, ['id' => 'sku', 'class' => 'form-control', 'placeholder' => 'Enter stock-keeping unit here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="cost_price">Cost Price <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                </div>
                {!! Form::text('cost_price', null, ['id' => 'cost_price', 'class' => 'form-control', 'placeholder' => 'Enter cost price here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                </div>
                {!! Form::text('unit_price', null, ['id' => 'unit_price', 'class' => 'form-control', 'placeholder' => 'Enter unit price here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="reorder_level">Reorder Level <span class="text-danger">*</span></label>
            <div class="input-group">
                {!! Form::text('reorder_level', null, ['id' => 'reorder_level', 'class' => 'form-control', 'placeholder' => 'Enter reorder level here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="quantity">Quantity Stock <span class="text-danger">*</span></label>
            <div class="input-group">
                {!! Form::text('quantity', null, ['id' => 'quantity', 'class' => 'form-control', 'placeholder' => 'Enter quantity here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="unit">Unit <span class="text-danger">*</span></label>
            <div class="input-group">
                {!! Form::text('unit', null, ['id' => 'unit', 'class' => 'form-control', 'placeholder' => 'Enter Item\'s unit here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="tax">Tax</label>
            <div class="input-group">
                {!! Form::text('tax', null, ['id' => 'tax', 'class' => 'form-control', 'placeholder' => 'Enter tax here']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="location">Location</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-thumbtack"></i>
                    </div>
                </div>
                {!! Form::text('location', null, ['id' => 'location', 'class' => 'form-control', 'placeholder' => 'Enter item location']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Item Image</label>
            <div class="input-group">
                <div class="custom-file">
                    {!! Form::file('image', ['class' => 'custom-file-input', 'id' => 'image']) !!}
                    <label class="custom-file-label" for="image">Choose an image</label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <!-- textarea -->
        <div class="form-group">
            <label>Description</label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter description here ...', 'rows' => '5']) !!}
        </div>
    </div>
</div>
