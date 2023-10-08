@extends('layouts.app')

@section('content')
<div class="my-container">
    <h2 class="my-title">Leave a comment on this post</h2>

    <form action="{{ route('communities.posts.comments.store', [$community, $post]) }}" method="post" class="my-form">
        @csrf

        <div class="my-form-group">
            <label for="content" class="my-label">Your comment</label>
            <textarea class="my-textarea" name="content" id="content" rows="3"></textarea>
        </div>

        <button type="submit" class="my-button">Submit</button>
    </form>
</div>
@endsection
