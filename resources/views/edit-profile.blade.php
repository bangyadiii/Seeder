<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>Edit Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Edit Profile</h1>
    <hr>
    <div class="row">
        <form class="form-horizontal" method="POST" action="{{ route("edit.profile", $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            @error('avatar')
               {{  $message }}
            @enderror
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <input type="hidden" name="oldName"value="{{ asset("storage/" . $user->avatar) }}">
                    @if($user->avatar )
                        <img src="{{ asset("storage/" . $user->avatar ) }}" id="" class="avatar img-circle img-thumbnail photoProfileWraper" alt="avatar">
                    @else
                        <img src="https://ui-avatars.com/api/?background=random&name={{ $user->username }}" id="" class="avatar img-circle img-thumbnail photoProfileWraper" alt="avatar">
                    @endif
                    <h6>Upload a photo...</h6>

                    <input id="photoProfil" type="file" name="avatar" class="form-control @error('avatar') has-error @enderror" onchange="previewImage()">
                    @error("avatar")
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>Edit Profile
                </div>

                <div class="form">
                    {{-- <div class="form-group @error("username") has-error @enderror">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-8">
                        <input class="form-control has-error" disabled value="{{ old("username", $user->username) }}" type="text" name="username" placeholder="Username">
                        @error("username")
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                        </div>
                    </div> --}}
                    {{-- <div class="form-group @error("password") has-error @enderror">
                        <label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="password" value="{{ old("password", $user->password) }}"name="password" placeholder="Password">
                        @error("password")
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                        </div>
                    </div> --}}
                    <div class="form-group @error("name") has-error @enderror">
                        <label class="col-lg-3 control-label">Name</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="text" value="{{ old("name", $user->name) }}" name="name" placeholder="Your Name">
                        @error("name")
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group @error("email") has-error @enderror">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="email" name="email" value="{{ old("email", $user->email) }}" placeholder="example@mail.com">
                        @error("email")
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group @error("birth_date") has-error @enderror">
                        <label class="col-lg-3 control-label">Birth Date</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="date" name="birth_date" value="{{ old("birth_date", $user->birth_date) }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <button class="btn btn-primary" type="submit">Edit Profile</button>
                            <a href="/"><button class="btn btn-primary">Back</button></a>

                       </div>
                    </div>
                </div>
            </div>
        </form>
        <form class="form-horizontal" action="{{route('edit.delete', auth()->user()->id)}}" method="post">
            @csrf
            @method('delete')
            <div class="col-md-10"></div>
            <div class="col-md-2 offset-md-2">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete Account</button>
            </div>
        </form>
    </div>
    <hr>
  </div>

  <style type="text/css">
    body {
      margin-top: 20px;
    }

    .avatar {
      width: 200px;
      height: 200px;
    }
  </style>
    {{-- <script src="{{ asset('js/app.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</body>

</html>
