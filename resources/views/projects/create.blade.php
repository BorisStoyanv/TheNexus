@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Create a project</h1>
    <div class="w-full sm:w-1/2">
        <form method="POST" action="{{ route('projects.store') }}">
            @csrf
            <div class="space-y-5">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="name">Project's Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="description">Information(s):</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>

                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="contact">Contact (phone):</label>
                    <input type="text" id="contact" name="contact">
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="min">Minimum Skill p:</label>
                    <input type="number" id="min" name="min_skill_points" min="0">
                </div>
                <button type="submit" class="my-button">Create Project</button>
            </div>
        </form>
    </div>
</div>
@endsection
