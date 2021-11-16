@extends('layouts.dashboard')

@section('content-title')
    All Customers
@endsection

@section('content')
    Index Blade
    @forelse ($customers as $customer)
        <li>
            {{ $customer->name }}
            <ul>
                <li>{{ $customer->profile }}</li>
            </ul>
        </li>
    @empty
        <li>No customer available</li>
    @endforelse
@endsection
