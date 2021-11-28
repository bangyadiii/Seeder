@extends('layout.main-layout')
@section('container')
    <div class="main-content py-5" style="height:100%; overflow: hidden">

        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="">Heyoo!!</h1>
                    <p class="text-lead">This is great apps, right?</p>
                </div>
            </div>
        </div>

      <!-- Page content -->
      <div class="container my-5 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Sign in with credentials</small>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="{{ $errors->has("username") ? "is-invalid" : "" }} form-control" placeholder="Username" type="text" name="username">
                        @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <small>{{ $errors->first('username') }}</small>
                            </span>
                        @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="{{ $errors->has("password") ? "is-invalid" : "" }} input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password" name="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <small>{{ $errors->first('password') }}</small>
                            </span>
                        @endif
                    </div>
                  </div>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister">
                          <span class="text-muted">remember me</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary mt-4">Login</button>
                    <a href="{{ route('register') }}" class="btn btn-secondary mt-4">Register</a>
                  </div>
                </form>
              </div>
              {{-- <div class="card-header bg-transparent pb-5">
                <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
                <div class="text-center">
                  <a href="#" class="btn btn-neutral btn-icon mr-4">
                    <span class="btn-inner--icon"><img src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/icons/common/github.svg"></span>
                    <span class="btn-inner--text">Github</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/icons/common/google.svg"></span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <footer class="py-5">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                &copy; 2018 <a href="https://www.creative-tim.com/product/argon-dashboard" class="font-weight-bold ml-1" target="_blank">Argon Dashboard</a>
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" clcass="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Footer -->
@endsection
