@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">{{ $post->title }}</h1>

    <p class="my-paragraph">{{ $post->content }}</p>

    <p class="my-paragraph">Posted by {{ $post->user->name }}
        @foreach($post->user->badges as $badge)
            {{ decodeUnicode($badge->unicode) }}
        @endforeach
    </p>

    @if(auth()->user()->id === $post->user_id)
        <form method="POST" action="{{ route('communities.posts.destroy', ['community' => $post->community, 'post' => $post]) }}">
            @csrf
            @method('DELETE')
            <button class="my-button" type="submit">Delete</button>
        </form>
    @endif

    <p class="my-paragraph mt-6"><a href="{{ route('communities.posts.comments.create', [$community, $post]) }}" class="my-link">Add a Comment</a></p>

    @foreach($post->comments->reverse() as $comment)
        <div class="my-content mt-4">
            <p class="my-paragraph">{{ $comment->content }}</p>
            <small class="my-paragraph">Comment by {{ $comment->user->name }}
                @foreach($post->user->badges as $badge)
                    {{ decodeUnicode($badge->unicode) }}
                @endforeach
            </small>
            @if(auth()->user()->id === $comment->user_id || auth()->user()->id === $post->user_id)
                <form method="POST" action="{{ route('communities.posts.comments.destroy', ['community' => $comment->post->community, 'post' => $comment->post, 'comment' => $comment]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="my-button mt-2" type="submit">Delete</button>
                </form>
            @endif
        </div>
    @endforeach
</div>
@endsection
