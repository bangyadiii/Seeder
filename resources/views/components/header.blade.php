<header class="p-3 border-bottom shadow ">
    <div class="container-fluid">
      <div class="d-flex flex-wrap align-items-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <h3 class="mr-3" style="font-family: 'Fredoka One', cursive; font-size: 2.5rem">Seeder</h3>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 {{ Request::is("/") ? "link-primary": "link-dark" }}">Timeline</a></li>
          <li><a href="{{ route('profile', auth()->user()->username) }}" class="nav-link px-2 {{ Request::is("/profile") ? "link-primary": "link-dark" }}">Dashboard</a></li>
        </ul>

        <form class="d-flex my-2" action="{{ route('search') }}" method="get">
          <input class="form-control me-2" type="search" placeholder="Search" name="search" id="search" required>
          <button class="btn btn-link border text-nonwrap bg-transparent text-reset " type="submit"><i class="bi bi-search "></i></button>
        </form>

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
            <li><a class="dropdown-item" href="{{route('edit.profile', auth()->user()->id)}}">Edit Profile</a></li>
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
