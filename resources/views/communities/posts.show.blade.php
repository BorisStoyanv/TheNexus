@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Comments</h1>
    @foreach($post->comments as $comment)
    <div class="my-content">
        <p>{{ $comment->content }}</p>
    </div>
    @endforeach

    <h1 class="my-title">Add Comment</h1>
    <form class="space-y-6" method="POST" action="{{ route('communities.posts.comments.store', [$community, $post]) }}">
        @csrf
        <div class="space-y-5">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="comment-content" class="mb-2 sm:mb-0 my-label">Content:</label>
                <textarea class="my-input my-textarea" id="comment-content" name="content" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="my-button">Submit</button>
    </form>
</div>
@endsection
