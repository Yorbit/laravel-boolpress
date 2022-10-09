@extends("layouts.app")

@section("content")
    @include("post", $post)
    <div class="d-flex container justify-content-center w-100 post-footer">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-lg btn-primary m-3">MODIFICA</a>
        <form action="{{ route('posts.destroy', $post->id) }}" class="m-3" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-lg btn-danger">ELIMINA</button>
        </form>
    </div>
@endsection