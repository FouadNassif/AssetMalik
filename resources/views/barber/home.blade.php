<!-- resources/views/home.blade.php -->

@extends('components.layout')

@section('title', 'Asset Malik')

@section('content')
    @include('partials._Message')
    @include('partials._hero')
    @include('partials._BApp')
    @include('partials._Branches')
    @include('partials._Gallery')
    @include('partials._NewsLetter')
@endsection
