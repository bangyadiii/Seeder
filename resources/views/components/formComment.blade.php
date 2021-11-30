@php
    $user = Auth::user();
@endphp
<div class="list border-0 bg-secondary p-0 w-100 m-0">
    <div class="card-header container-fluids  py-2">
        <div class="row">
            <div class="col-auto ">
                <a href="#" class="d-block " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if($user->avatar)
                        <img src="{{ asset("storage/" . $user->avatar ) }}" alt="mdo" width="30" height="30" class="rounded-circle">
                    @else
                        <a href="{{ route('profile', $user->username ) }}"></a><img src="https://ui-avatars.com/api/?background=random&name={{ $user->username }}" alt="mdo" width="30" height="30" class="rounded-circle">
                    @endif
                </a>
            </div>
            <div class="col-9 d-flex align-items-center">
                <a href="{{ route('profile', $user->username) }}">
                    <h3 class="h3">{{ $user->name }} </h3>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body pb-1">
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf

            <div class="pl-lg-4">
                <div class="form">

                    <div class="form-group focused">
                        <textarea rows="4" class="form-control form-control-alternative"
                            placeholder="Comments here ..." name="comments" required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-info btn-sm">Comment</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
