<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Category Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter category name']) !!}
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="parent_category">Parent Category</label>
            {!! Form::select('parent_id', $categories, null, ['placeholder' => 'None', 'class' => 'custom-select', 'id' => 'parent_category']) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <!-- textarea -->
        <div class="form-group">
            <label>Description</label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter some description . . .', 'rows' => '5']) !!}
        </div>
    </div>
</div>
