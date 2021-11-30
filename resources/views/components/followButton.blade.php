@if(Auth::user()->isNot($user))
    <form action="{{ route("follow.store", $user->id ) }}" class="p-0 m-0"  method="post">
        @csrf
        @if(auth()->user()->following()->where('following_user_id', $user->id)->exists())
            <button type="submit" class="btn btn-sm btn-outline-info d-inline active">Unfollow</button>
        @else
            <button type="submit" class="btn btn-sm btn-outline-info d-inline">Follow</button>
            {{-- <a href="{{route('edit.profile', auth()->user()->id)}}" class="btn btn-sm btn-default">Setting</a> --}}
        @endif
    </form>
    @else

@endif
