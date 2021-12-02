@extends('layouts.dashboard')

@section('content-title')
    New Item
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

    <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark btn-flat mb-3">
        <i class="fas fa-chevron-left"></i>
        Back
    </a>

    <!-- form start -->
    {!! Form::open(['route' => 'items.store', 'files' => true]) !!}
    @include('items.form')

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
