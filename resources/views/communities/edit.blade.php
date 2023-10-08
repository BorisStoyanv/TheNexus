@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Edit Community</h1>
    <form class="space-y-6" method="POST" action="{{ route('communities.update', $community) }}">
        @csrf
        @method('PUT')
        <div class="space-y-5">
            <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="name" class="mb-2 sm:mb-0 my-label">Name:</label>
                <input type="text" id="name" name="name" value="{{ $community->name }}" class="my-input" required>
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center">
                <label for="description" class="mb-2 sm:mb-0 my-label">Description:</label>
                <textarea id="description" name="description" class="my-input my-textarea" required>{{ $community->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="my-button">Update</button>
    </form>
</div>
@endsection
