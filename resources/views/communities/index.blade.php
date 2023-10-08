    @extends('layouts.app')

    @section('content')
    <div class="my-container">
        <h1 class="my-title">Communities</h1>
        <div>
            <a href="{{ route('communities.create') }}" class="my-button">Create New Community</a>
        </div><br>

        <div class="my-list">
            <div>
                <ul>
                    @foreach($communities as $community)
                    <li>
                        <a href="{{ route('communities.show', $community) }}" class="my-link">
                            {{ $community->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endsection
