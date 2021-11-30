<div class="card bg-secondary p-1 ">
    <div class="card-header container-fluids bg-white py-2">
        <div class="row justify-content-between">
            <div class="col-9">
                <div class="row">
                    <div class="col-auto">
                        <a href="{{ route("profile", $comments->user->username ) }}" class="d-block " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            @if($comments->user->username)
                                <img src="{{ asset("storage/" . $comments->user->username ) }}" alt="mdo" width="45" height="45" class="rounded-circle">
                            @else
                                <img src="https://ui-avatars.com/api/?background=random&name={{ $post->user->username }}" alt="mdo" width="45" height="45" class="rounded-circle">
                            @endif
                        </a>
                    </div>
                    <div class="col-auto d-inline-block my-auto">
                        <a href="{{ route("profile", $comments->user->username ) }}" > <strong class="h3 ">{{ $comments->user->username }} </strong></a>
                    </div>
                </div>
            </div>
            @if (auth()->id() == $comments->user->username)

            <div class="col-auto ml-auto">

                <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a href="/post/{{ $comments->id }}/edit"class="dropdown-item">
                           <button type="submit" class="bg-transparent d-flex" style="border:none;">Update</button>
                        </a>

                      </li>
                      <li>
                        <form action="/post/{{ $comments->id }}" method="post" class="dropdown-item">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-transparent d-flex" style="border:none;">Delete</button>
                        </form>

                      </li>
                    </ul>
                </div>
            </div>

            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="pl-lg-4">
            <p>{{ $comments->comments }}</p>
        </div>

    </div>
    <div class="card-footer m-0 pb-0  bg-info">
        <x-comments :post='$post'/>
        {{-- <small class="fw-bold m-0 mt-2 p-0 " style="font-size:12px">{{ $post->created_at->diffForHumans() }}</small> --}}
    </div>
</div>
