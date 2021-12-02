@extends('layouts.dashboard')

@section('content-title')
    New Category
@endsection

@section('content')

    {{-- Showing all errors on form validation --}}
    @include('shared.formError')

    <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </a>

    <!-- form start -->
    {!! Form::open(['route' => 'categories.store']) !!}
    @include('categories.form')

    <button type="submit" class="btn btn-flat btn-success d-block ml-auto px-5">Submit</button>
    {!! Form::close() !!}
@endsection

@section('script')
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
