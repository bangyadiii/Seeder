<ul class="list-group text-start">
    <li class="list-group-item rounded-2">
        <div class="posts row container my-1 py-1">
            <div class="col-auto">
                <a href="#">
                {{-- @if($follow->avatar) --}}
                    {{-- <img src="{{ asset("storage/" . $follow->avatar ) }}" alt="mdo" width="45" height="45" class="rounded-circle"> --}}
                {{-- @else --}}
                    <img src="https://ui-avatars.com/api/?background=random&name=aa" alt="mdo" width="45" height="45" class="rounded-circle">
                {{-- @endif --}}
                </a>
            </div>
            <div class="col-9">
                <h4 class="h4">HELLO</h4>
                {{-- <span class="h5 font-weight-300">{{ $follow->pivot->created_at->diffForHumans() }}</span> --}}
            </div>

        </div>
    </li>

</ul>
