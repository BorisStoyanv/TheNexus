@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Create a Community</h1>
    <div class="w-full sm:w-1/2">
        <form class="space-y-6" method="POST" action="{{ route('communities.store') }}">
            @csrf
            <div class="space-y-5">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="name" class="mb-2 sm:mb-0 my-label">Name:</label>
                    <input type="text" id="name" name="name" class="my-input" required>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="description" class="mb-2 sm:mb-0 my-label">Description:</label>
                    <textarea id="description" name="description" class="my-input my-textarea" required></textarea>
                </div>
            </div>
            <button type="submit" class="my-button">Create</button>
        </form>
    </div>
</div>
@endsection
