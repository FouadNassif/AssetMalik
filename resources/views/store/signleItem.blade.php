@extends('components.layout')

@section('title', 'Store')

@section('content')
        <x-signle-item :itemReviews="$itemReviews" :item="$item"/>
@endsection
