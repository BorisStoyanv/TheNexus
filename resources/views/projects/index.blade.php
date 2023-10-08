@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">Projects</h1>
    <div>
        <a href="/projects/create" class="my-button">Create New Project</a>
    </div><br>

    <div class="my-list">
        <div class="project-box-container">
            @foreach ($projects as $project)
                <div class="project-box">
                    <div class="project-info">
                        <h2>{{ $project->name }}</h2>
                        <p>Minimum Skill: {{ $project->min_skill_points }}</p>
                        <p>{{ $project->description }}</p>
                        
                        @if (auth()->user() && auth()->user()->elo >= $project->min_skill_points)
                                    <details>
                                    <summary class="button">Join</summary>
                                    <div>
                                        <br><br><br>
                                         <p>{{ $project->contact }}</p>
                                         <p>If you are interested in this project start comunicating with the owner </p>
                                    </div>
                                    </details>
                            
                        @else
                            <p>You don't meet the skill requirement to join this project.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
