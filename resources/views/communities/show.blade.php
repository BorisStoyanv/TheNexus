@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">{{ $community->name }}</h1>
    <p class="my-4 text-white">{{ $community->description }}</p>
    <div class="flex justify-center space-x-2 my-4">
        <a href="{{ route('communities.edit', $community) }}" class="my-button">Edit</a>
        <form method="POST" action="{{ route('communities.destroy', $community) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="my-button">Delete Community</button>
        </form>
    </div>
    <a href="{{ route('communities.posts.create', $community) }}" class="my-button">Add Post</a>

    @foreach($community->posts as $post)
    <div class="my-content">
        <h5>
            <a href="{{ route('communities.posts.show', [$community, $post]) }}" class="my-link text-gray-800">{{ $post->title }}</a>
        </h5>
        <p class="text-white">{{ $post->content }}</p>
    </div>
    @endforeach
</div>
@endsection
