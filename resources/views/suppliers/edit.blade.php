@extends('layouts.dashboard')

@section('content-title')
    Update Customer
@endsection

@section('content')

    {{-- Showing all errors on form validation --}}
    @include('shared.formError')

    <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </a>

    <!-- form start -->
    {!! Form::model($supplier, ['method' => 'PUT', 'route' => ['suppliers.update', $supplier['id']]]) !!}
    @include('suppliers.form')

    <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Update</button>
    {!! Form::close() !!}
@endsection
