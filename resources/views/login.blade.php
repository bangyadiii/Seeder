<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Seeder</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/app.css">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <main class="form-signin">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating has-validation">
                <input type="text" class="form-control  {{ $errors->has("username") ? "is-invalid" : "" }}" id="username" placeholder="username" name="username">
                <label for="username">Username</label>
                @if ($errors->has('username'))
                    <span class="invalid-feedback">
                        <small>{{ $errors->first('username') }}</small>
                    </span>
                @endif
            </div>
            <div class="form-floating">
                <input type="password" class="form-control {{ $errors->has('password') ? "is-invalid" : "" }}" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <small>{{ $errors->first('password') }}</small>
                    </span>
                @endif
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>


            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="mt-1">Not registered yet ? <a href="{{ route('register') }}">Register</a></small>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>

    </main>


    <script src="js/app.js" type="text/javascript"></script>
  </body>
</html>
