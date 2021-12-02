@extends('layouts.dashboard')

@section('content-title')
    New Supplier
@endsection

@section('content')

    {{-- Showing all errors on form validation --}}
    @include('shared.formError')

    <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </a>

    <!-- form start -->
    {!! Form::open(['route' => 'suppliers.store']) !!}
    @include('suppliers.form')

    <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Submit</button>
    {!! Form::close() !!}
@endsection
