@extends('components.layout')

@section('title', 'Store')

@section('content')
@foreach ($item as $items)
    <h1>{{$items->name}}</h1>
@endforeach
@endsection