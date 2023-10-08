@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Create Post</h1>
    <form class="space-y-6 max-w-md mx-auto" method="POST" action="{{ route('communities.posts.store', $community) }}">
        @csrf
        <div class="space-y-5">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="title" class="mb-2 sm:mb-0 my-label">Post Title:</label>
                <input type="text" name="title" id="title" placeholder="Enter post title" class="my-input" required>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="content" class="mb-2 sm:mb-0 my-label">Post Content:</label>
                <textarea name="content" id="content" placeholder="Enter post content" class="my-textarea" required></textarea>
            </div>
        </div>
        <button type="submit" class="my-button">Create Post</button>
    </form>
</div>
@endsection
