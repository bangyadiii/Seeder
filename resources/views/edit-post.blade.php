@extends('layout.main-layout')
@include('components.header')
@section('container')
    <div class="container">
        <div class="row">

                <x-formedit :post='$post' :user='$user'/>
            {{-- <div class="col-lg-auto">
                <x-recent>

            </div> --}}



        </div>
    </div>


@endsection
