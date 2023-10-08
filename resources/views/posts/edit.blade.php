@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Edit Post</h1>
    <form class="space-y-6 max-w-md mx-auto" method="POST" action="{{ route('communities.posts.update', [$community, $post]) }}">
        @csrf
        @method('PUT')
        <div class="space-y-5">
            <input type="text" name="title" value="{{ $post->title }}" class="my-input" required>
            <textarea name="content" class="my-textarea" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="my-button">Update Post</button>
    </form>
</div>
@endsection
