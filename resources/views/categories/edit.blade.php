@extends('layouts.dashboard')

@section('content-title')
    Update Category
@endsection

@section('content')

    {{-- Showing all errors on form validation --}}
    @include('shared.formError')

    <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </a>

    <!-- form start -->
    {!! Form::model($category, ['method' => 'PUT', 'route' => ['categories.update', $category['id']]]) !!}
    @include('categories.form')

    <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Update</button>
    {!! Form::close() !!}
@endsection
