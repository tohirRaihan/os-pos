@extends('layouts.dashboard')

@section('content-title')
    All Customers
@endsection

@section('content')
    <table id="items-table" class="table table-bordered table-striped">
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
                            <button class="btn btn-xs bg-gradient-warning">
                                Edit
                            </button>
                            <button class="btn btn-xs bg-gradient-danger">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
