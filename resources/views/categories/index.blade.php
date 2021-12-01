@extends('layouts.dashboard')

@section('content-title')
    All Categories
@endsection

@section('content')
    <div class="d-flex justify-content-end">
        <a id="new-item" href="{{ url('categories/create') }}" class="btn btn-flat bg-gradient-success mb-3">
            <i class="fas fa-user-plus mr-2"></i>New Category
        </a>
    </div>

    {{-- success message --}}
    @include('shared.successAlert')
    <table id="categories-table" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Parent Category</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $index => $category)
                {{-- @foreach ($category->subcategory as $subcategory) --}}

                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent_id ? $category->parent->name : '' }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center font-weight-bold">
                            <a href="{{ Route('categories.edit', ['category' => $category->id]) }}"
                                class="btn btn-xs bg-gradient-primary mr-2">
                                <i class="far fa-edit"></i>
                            </a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category->id], 'onsubmit' => "return confirm('Do you really want to Delete?')"]) !!}

                            <button type="submit" class="btn btn-xs bg-gradient-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                {{-- @endforeach --}}

            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
    <script>
        $('#categories-table').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ Data/page'
            }
        });
    </script>
@endsection
