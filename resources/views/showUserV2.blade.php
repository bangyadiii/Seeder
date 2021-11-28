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

                                @if($user->avatar)
                                    <img src="{{ asset("storage/" . $user->avatar ) }}" alt="mdo"  width="200" height="200" class="rounded-circle">
                                @else
                                    <img src="https://ui-avatars.com/api/?background=random&name={{ $user->username }}" alt="mdo" width="130" height="130" class="rounded-circle">
                                @endif

                                <a href="{{route('edit.profile', $user->id)}}" class="btn btn-outline-dark btn-sm btn-block btn-default mt-3">Edit profile</a>
                            </div>
                            <div class="media-body mb-5 text-white">
                                <h2 class="mt-0 mb-0">{{ $user->name  }}</h2>
                                <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>{{ "@". $user->username }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light p-4">
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-sm btn-info mr-4">Follow</a>
                            <a href="#" class="btn btn-sm btn-default">Setting</a>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="d-flex flex-column justify-content-center text-center mt-3">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <h3 class="font-weight-bold mb-0 d-block">{{ $user->posts->count() }}</h3>
                                        <small class="text-muted"> <i class="fas fa-image mr-1"></i>Status</small>
                                    </li>
                                    <li class="list-inline-item">
                                        <h3 class="font-weight-bold mb-0 d-block">{{ $user->followers->count() }}</h3>
                                        <small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                                    </li>
                                    <li class="list-inline-item">
                                        <h3 class="font-weight-bold mb-0 d-block">{{ $user->following->count() }}</h3>
                                        <small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                                    </li>
                                </ul>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm bg-transparent" data-bs-toggle="modal" data-bs-target="#statisticDetail">
                                    Details
                                </button>

                                <!-- Modal -->
                                <x-modal/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div class="container-fluid mt-3" >
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    @php
                    $follows = $user->following()->latest()->limit(5)->get()
                    @endphp
                 <x-recent :follows='$follows'/>
                </div>
                <div class="col-xl-8 ">
                    <div class="order-xl-1">
                        @if (auth()->user()->is($user))
                            <x-posting :user='$user'/>
                        @endif
                    </div>
                    <div class="order-xl-3">
                        <div class="card shadow container-fluids bg-white">
                            <div class="card-header ">
                                <h3 class="mb-0 text-start">Riwayat Posting</h3>
                            </div>
                            <div class="card-body bg-light">
                                <section class="timeline">
                                    @foreach ($user->posts as $post)
                                        <div class="my-2">
                                            <x-post :post='$post'/>
                                        </div>


                                    @endforeach

                                </section>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>





@endsection
