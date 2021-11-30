<div class="modal fade "  id="statisticDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content" style="height:600px">
        <div class="modal-header py-0 pt-2 ">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" id='FollowerDetail' style="cursor: pointer;" onclick="loadFollower('{{route('user.followers', $user->id)}}')" aria-current="page" id="following-button"  data-url-follow="{{route('user.followers', $user->id)}}" >Follower</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id='FollowingDetail' style="cursor: pointer;"  onclick="loadFollowing('{{route('user.following', $user->id)}}')" id="follower-button" data-url-follow="{{route('user.following', $user->id)}}">Following</a>
                </li>

              </ul>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul class="list-group FollowingDetail text-start" >

            </ul>

                {{-- <x-listgroup :/> --}}
        </div>
        {{-- <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary mr-4" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-default">Understood</button>
        </div> --}}
    </div>
    </div>
</div>
