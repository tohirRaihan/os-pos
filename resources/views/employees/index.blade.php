@extends('layouts.dashboard')

@section('content-title')
    All Employees
@endsection

@section('content')
    <div class="d-flex justify-content-end">
        <a id="new-item" href="{{ url('employees/create') }}" class="btn btn-flat bg-gradient-success mb-3">
            <i class="fas fa-user-plus mr-2"></i>New Employee
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

    <table id="employees-table" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Employee ID</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $index => $employee)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->profile->phone ?? '' }}</td>
                    <td>{{ $employee->employee->employee_id ?? '' }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center font-weight-bold">
                            <a href="{{ Route('employees.edit', ['employee' => $employee->id]) }}"
                                class="btn btn-xs bg-gradient-primary mr-2">
                                <i class="far fa-edit"></i>
                            </a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['employees.destroy', $employee->id], 'onsubmit' => "return confirm('Do you really want to Delete?')"]) !!}

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
        $('#employees-table').DataTable({
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
