@extends('layout.main-layout')
@section('container')
@include('components.header')
<div class="container-fluid mx-5 my-3">
    <div class="row  container-fluid">
        <div class="col-xl-8">
            <x-posting/>

            <section class="timeline">
                @foreach ($posts as $post )
                    <div class="my-2">
                        <x-post :post='$post'/>
                    </div>


                @endforeach

            </section>
        </div>
        <div class="col-xl-4" style="height:450px">

            @foreach ( auth()->user()->following()->latest()->limit(5)->get() as $follow )
                <x-recent :follow='$follow'/>

            @endforeach

        </div>
    </div>


</div>

@endsection
