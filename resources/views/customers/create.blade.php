@extends('layouts.dashboard')

@section('content-title')
    New Customer
@endsection

@section('content')

    <button type="button" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </button>

    <!-- form start -->
    {!! Form::open(['url' => 'customers', 'files' => true]) !!}
    @include('customers.form')

    <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Submit</button>
    {!! Form::close() !!}
@endsection
