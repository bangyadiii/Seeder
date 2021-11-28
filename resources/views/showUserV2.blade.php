@extends('layout.main-layout')
@include('components.header')
@section('container')


    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="bg-white shadow rounded overflow-hidden">
                    <div class="px-4 pt-0 pb-4 cover">
                        <div class="media align-items-end profile-head border-2 border-dark">
                            <div class="d-flex flex-column mr-3">
                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                                <a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a>
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h2 class="mt-0 mb-0">Mark Williams</h2>
                                <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm btn-info mr-4">Follow</a>
                            <a href="#" class="btn btn-sm btn-default">Setting</a>
                        </div>
                        <div class="d-flex justify-content-end text-center mt-3">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <h3 class="font-weight-bold mb-0 d-block">215</h3><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                                </li>
                                <li class="list-inline-item">
                                    <h3 class="font-weight-bold mb-0 d-block">745</h3><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                                </li>
                                <li class="list-inline-item">
                                    <h3 class="font-weight-bold mb-0 d-block">340</h3><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div class="container-fluid mt-3" >
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <x-recent/>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <x-posting/>

                </div>
            </div>
        </div>
    </div>





@endsection
