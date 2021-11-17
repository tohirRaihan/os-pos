@extends('layouts.dashboard')

@section('content-title')
    All Customers
@endsection

@section('content')
    <div class="d-flex justify-content-end">
        <a id="new-item" href="{{ url('customers/create') }}" class="btn btn-sm bg-success mb-3">
            Add New <i class="fa fa-plus-circle ml-2"></i>
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

    <table id="customers-table" class="table table-bordered table-striped">
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
                        <div class="btn-group" role="group">
                            {{-- <button class="btn btn-xs bg-gradient-warning">
                                Edit
                            </button> --}}
                            <a href="{{ Route('customers.edit', ['customer' => $customer->id]) }}"
                                class="btn btn-xs bg-gradient-warning">
                                Edit
                            </a>



                            <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs bg-gradient-danger">
                                    Delete
                                </button>
                            </form>


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
