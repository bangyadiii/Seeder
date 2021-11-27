@extends('layout.main-layout')
@section('container')
@include('components.header')
<div class="container">
    <div class="d-flex justify-content-between">
        <div class="col-7 ">
            <section class="form-post ">
                <div class="row justify-content-center border p-3 rounded">
                    <div class="col-auto">

                        <a href="#" class="d-block mt-2 " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(auth()->user()->avatar)
                                <img src="{{ asset("storage/" . auth()->user()->avatar ) }}" alt="mdo" width="50" height="50" class="rounded-circle">
                            @else
                                <img src="https://ui-avatars.com/api/?background=random&name={{ auth()->user()->username }}" alt="mdo" width="50" height="50" class="rounded-circle">
                            @endif
                        </a>
                    </div>
                    <div class="col-10">
                        <strong class="d-block">{{ Auth::user()->username }}</strong>
                        <form action="post/create" method="POST">
                            @csrf
                            <div class="form-floating mt-3">
                                <textarea class="form-control p-1 bg-transparent" id="upload-post" name="content" style="height: 100px" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3 text-end">Post</button>
                        </form>

                    </div>

                </div>
            </section>
            <section class="timeline">
                @foreach ($posts as $post )
                    <div class="row my-2 justify-content-center border p-3 rounded">
                        <div class="col-auto">
                            <a href="#" class="d-block mt-2 " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            @if($post->user->avatar)
                                <img src="{{ asset("storage/" . $post->user->avatar ) }}" alt="mdo" width="50" height="50" class="rounded-circle">
                            @else
                                <img src="https://ui-avatars.com/api/?background=random&name={{ $post->user->username }}" alt="mdo" width="50" height="50" class="rounded-circle">
                            @endif
                            </a>
                        </div>
                        <div class="col-10">
                            <strong class="d-block">{{ $post->user->username }}</strong>
                            <p class="card-text">
                                {{ $post->content }}
                            </p>

                            <small class="text-muted fw-bolder">{{ $post->created_at->diffForHumans() }}</small>
                        </div>

                    </div>

                @endforeach

            </section>
        </div>
        <div class="col-4 p-3 border rounded" style="height:450px">
            <section class="Friends">
                <h5 class="h5 px-4 my-2">Recently following</h5>
                @foreach ( auth()->user()->following()->latest()->limit(5)->get() as $follow )
                    <div class="row my-2 p-2 justify-content-center">
                        <div class="col-auto">
                            <a href="#">
                            @if($follow->avatar)
                                <img src="{{ asset("storage/" . $follow->avatar ) }}" alt="mdo" width="50" height="50" class="rounded-circle">
                            @else
                                <img src="https://ui-avatars.com/api/?background=random&name={{ $follow->username }}" alt="mdo" width="50" height="50" class="rounded-circle">
                            @endif
                            </a>
                        </div>
                        <div class="col-9">
                            <strong class="d-block">{{ $follow->username }}</strong>
                            <div>
                                <small class="fw-bolder text-secondary">{{ $follow->pivot->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>

                @endforeach
            </section>
        </div>
    </div>


</div>

@endsection
