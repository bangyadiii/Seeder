<div class="card bg-secondary shadow p-0">
    <div class="card-header container-fluids bg-white">
        <div class="row">
            <div class="col-auto ">
                <a href="#" class="d-block " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(auth()->user()->avatar)
                        <img src="{{ asset("storage/" . auth()->user()->avatar ) }}" alt="mdo" width="45" height="45" class="rounded-circle">
                    @else
                        <img src="https://ui-avatars.com/api/?background=random&name={{ auth()->user()->username }}" alt="mdo" width="45" height="45" class="rounded-circle">
                    @endif
                </a>
            </div>
            <div class="col-9 d-flex align-items-center">
                <h3 class="h3">{{ auth()->user()->name }} </h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('create-post') }}" method="POST">
            @csrf
            <div class="pl-lg-4">
                <div class="form">

                    <div class="form-group focused">
                        <textarea rows="4" class="form-control form-control-alternative"
                            placeholder="A few words about you ..." name="content"></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-md mt-3 ">
                            <i class="bi bi-send-plus mr-1"></i> Post
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
