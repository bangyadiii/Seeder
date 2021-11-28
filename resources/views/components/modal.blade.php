<div class="modal fade " id="statisticDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header py-0 pt-2 ">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Follower</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Following</a>
                </li>

              </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        </div>
        {{-- <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary mr-4" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-default">Understood</button>
        </div> --}}
    </div>
    </div>
</div>
