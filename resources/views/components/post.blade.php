<div class="card bg-secondary shadow p-0">
    <div class="card-header container-fluids bg-white py-2">
        <div class="row">
            <div class="col-auto ">
                <a href="#" class="d-block " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if($post->user->avatar)
                        <img src="{{ asset("storage/" . $post->user->avatar ) }}" alt="mdo" width="45" height="45" class="rounded-circle">
                    @else
                        <img src="https://ui-avatars.com/api/?background=random&name={{ $post->user->username }}" alt="mdo" width="45" height="45" class="rounded-circle">
                    @endif
                </a>
            </div>
            <div class="col-9 d-flex align-items-center">
                <strong class="h3">{{ $post->user->username }} </strong>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="pl-lg-4">
            <p>{{ $post->content  }}</p>
        </div>
        <small class=" text-muted fw-bolder">{{ $post->created_at->diffForHumans() }}</small>
    </div>
</div>
