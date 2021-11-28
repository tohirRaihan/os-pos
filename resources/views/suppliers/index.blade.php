@extends('layouts.dashboard')

@section('content-title')
    All Suppliers
@endsection

@section('content')
    <div class="d-flex justify-content-end">
        <a id="new-item" href="{{ url('suppliers/create') }}" class="btn btn-flat bg-gradient-success mb-3">
            <i class="fas fa-user-plus mr-2"></i>New Supplier
        </a>
    </div>

    {{-- success message --}}
    @include('shared.successAlert')
    <table id="suppliers-table" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $index => $supplier)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->profile->phone ?? '' }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center font-weight-bold">
                            <a href="{{ Route('suppliers.edit', ['supplier' => $supplier->id]) }}"
                                class="btn btn-xs bg-gradient-primary mr-2">
                                <i class="far fa-edit"></i>
                            </a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['suppliers.destroy', $supplier->id], 'onsubmit' => "return confirm('Do you really want to Delete?')"]) !!}

                            <button type="submit" class="btn btn-xs bg-gradient-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
    <script>
        $('#suppliers-table').DataTable({
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
