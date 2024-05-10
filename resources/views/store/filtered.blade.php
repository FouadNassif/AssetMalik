@extends('components.layout')

@section('title', 'Store')

@section('content')
    @foreach ($filteredItems as $item)
        <x-item-card :item="$item" />
    @endforeach
@endsection
