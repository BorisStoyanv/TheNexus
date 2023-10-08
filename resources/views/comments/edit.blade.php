@extends('layouts.app')

@section('content')
<div class="my-container">
    <h2 class="my-title">Edit Comment</h2>

    <form action="{{ route('communities.posts.comments.update', [$community, $post, $comment]) }}" method="post" class="my-form">
        @csrf
        @method('PUT')

        <div class="my-form-group">
            <label for="content" class="my-label">Your comment</label>
            <textarea class="my-textarea" name="content" id="content" rows="3">{{ $comment->content }}</textarea>
        </div>

        <button type="submit" class="my-button">Update Comment</button>
    </form>
</div>
@endsection
