@extends('layout.main-layout')
@section('container')
@include('components.header')
<div class="container-fluid mx-5 my-3">
    <div class="row  container-fluid">
        <div class="col-xl-8">
            <div class="mb-5">
                @php
                    $user = auth()->user()
                @endphp
                <x-posting :user='$user'/>
            </div>
            <div class="card shadow container-fluids bg-white">
                <div class="card-header ">
                    <h3 class="mb-0 text-start">Postingan</h3>
                </div>
                <div class="card-body bg-light">
                    <section class="timeline">
                        @foreach ($posts as $post )
                            <div class="my-2">
                                <x-post :post='$post'/>
                            </div>


                        @endforeach

                    </section>
                </div>
            </div>
        </div>
        <div class="col-xl-4" style="height:450px">
            @php
               $follows = auth()->user()->following()->latest()->limit(5)->get()
            @endphp

            <x-recent :follows='$follows'/>


        </div>
    </div>


</div>

@endsection
