@extends('layout.main-layout')
@section('container')
@include('components.header')
<div class="container">
    <h5>Hello {{ auth()->user()->name }}</h5>
</div>
@endsection
