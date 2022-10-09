@extends("layouts.app")

@section("content")
        <h2 class="text-center h1">
            {{ $tag->name }}
        </h2>
    <h4 class="text-center my-5">
        POST CON QUESTO TAG
    </h4>
    @foreach ($tag->posts as $post)
        @include("post", $post)
        <div class="d-flex container justify-content-center w-100 post-footer">
            <a href='{{ route("tags.edit", $post->id) }}' class="btn btn-lg btn-primary m-3">DETTAGLI</a>
            <form action='{{ route("admin.clear", $post->id) }}' class="m-3" method="post">
                @csrf
                @method("PATCH")
                <button type="submit" class="btn btn-lg btn-warning">RIMUOVI POST DAI TAG</button>
            </form>
        </div>
    @endforeach
@endsection