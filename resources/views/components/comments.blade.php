<div>
    <p>
        <a class="btn btn-sm py-1 px-2 text-white" onclick="getComments('{{ route('comments.index', $post->id) }}', {{ $post->id }} )" data-bs-toggle="collapse" href="#postComment{{ $post->id }}" role="button" aria-expanded="false" aria-controls="postComment{{ $post->id }}"><i class="bi bi-chat-left-dots-fill"></i> Comment</a>
    </p>
    <div class="row">
        <div class="collapse multi-collapse" id="postComment{{ $post->id }}">
            <div class="card card-body p-0 bg-secondary">
                <div id="list-comments{{ $post->id }}" ></div>
                <x-formComment :post='$post'/>
            </div>
        </div>

    </div>



</div>
