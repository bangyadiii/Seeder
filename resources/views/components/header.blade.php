<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 {{ Request::is("/") ? "link-primary": "link-dark" }}">Timeline</a></li>
          <li><a href="profile/{{{ auth()->user()->username }}}" class="nav-link px-2 {{ Request::is("/profile") ? "link-primary": "link-dark" }}">Dashboard</a></li>
        </ul>


        <div class="text-end px-2 ">
            <span class="lead">Hello <a href="#" class=" text-decoration-none text-reset"><strong>{{ auth()->user()->name }}!</strong></a></span>
        </div>
        <div class="dropdown text-end px-2">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                @if(auth()->user()->avatar)
                    <img src="{{ asset("storage/" . auth()->user()->avatar ) }}" alt="mdo" width="40" height="40" class="rounded-circle">
                @else
                    <img src="https://ui-avatars.com/api/?background=random&name={{ auth()->user()->username }}" alt="mdo" width="50" height="50" class="rounded-circle">
                @endif
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Sign Out</button>
                </form>
            </li>
          </ul>
        </div>

      </div>
    </div>
</header>
