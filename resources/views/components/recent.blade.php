<div class="card card-profile shadow">
    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
        <h3 class="mb-0 text-start">Recently follows</h3>
    </div>
    <div class="card-body pt-2 bg-secondary">
        @if ($follows->count() != null)
            @foreach ($follows as $follow)
            <div class="posts row container my-1 py-1">
                <div class="col-auto">
                    <a href="#">
                    @if($follow->avatar)
                        <img src="{{ asset("storage/" . $follow->avatar ) }}" alt="mdo" width="45" height="45" class="rounded-circle">
                    @else
                        <img src="https://ui-avatars.com/api/?background=random&name={{ $follow->username }}" alt="mdo" width="45" height="45" class="rounded-circle">
                    @endif
                    </a>
                </div>
                <div class="col-9">
                    <h4 class="h4">{{ $follow->username }}</h4>
                    <span class="h5 font-weight-300">{{ $follow->pivot->created_at->diffForHumans() }}</span>
                </div>

            </div>
            @endforeach
        @else
            <div class="row">
                <h4 class="h4 text-muted text-center">Tidak ada yang difollow</h4>
            </div>
        @endif



    </div>
</div>
