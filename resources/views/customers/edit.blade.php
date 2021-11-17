@extends('layouts.dashboard')

@section('content-title')
    Update Customer
@endsection

@section('content')

    {{-- Showing all errors on form validation --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="button" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </button>

    <!-- form start -->
    {{-- {!! Form::open(['route' => 'customers.update', 'method' => 'put', 'files' => true]) !!} --}}
    {!! Form::model($customer, ['method' => 'PATCH', 'route' => ['customers.update', 3]]) !!}
    @include('customers.form')

    <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Update</button>
    {!! Form::close() !!}
@endsection
