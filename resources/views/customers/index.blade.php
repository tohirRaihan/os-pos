@extends('layouts.dashboard')

@section('content-title')
    All Customers
@endsection

@section('content')
    <div class="d-flex justify-content-end">
        <a id="new-item" href="{{ url('customers/create') }}" class="btn btn-flat bg-gradient-success mb-3">
            <i class="fas fa-user-plus mr-2"></i>New Customer
        </a>
    </div>

    {{-- success message --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <table id="customers-table" class="table table-bordered table-striped table-sm">
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
            @foreach ($customers as $index => $customer)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->profile->phone ?? '' }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center font-weight-bold">
                            <a href="{{ Route('customers.edit', ['customer' => $customer->id]) }}"
                                class="btn btn-xs bg-gradient-primary mr-2">
                                <i class="far fa-edit"></i>
                            </a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['customers.destroy', $customer->id], 'onsubmit' => "return confirm('Do you really want to Delete?')"]) !!}

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
        $('#customers-table').DataTable({
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
