@extends("layouts.app")

@section("content")
    @include("admin.posts.includes.form", [$actionRoute = route("posts.store"), $method = "POST", $submitMessage = "Create Post"])
@endsection