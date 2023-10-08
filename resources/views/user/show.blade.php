@extends('layouts.app')

@section('content')
<div class="my-container">
    <h1 class="my-title">{{ $user->name }}'s Profile</h1>
    <p class="my-paragraph">ELO: {{ $elo }}</p>

    @php
        if ($elo < 610) {
            $rank = "Copper Cadet";
        } elseif ($elo >= 610 && $elo < 670) {
            $rank = "Silver Strategist";
        } elseif ($elo >= 670 && $elo < 720) {
            $rank = "Gold Guardian";
        } elseif ($elo >= 720 && $elo < 800) {
            $rank = "Platinum Prodigy";
        } elseif ($elo >= 800 && $elo < 900) {
            $rank = "Diamond Dealer";
        } else {
            $rank = "Obsidian Overlord";
        }
    @endphp

    <p class="my-paragraph">Current Rank: {{ $rank }}</p>

    <h2 class="my-subtitle">Badges:</h2>
    @foreach ($badges as $badge)
        <div class="my-badge">
            <h3 class="my-badge-title">{{ $badge->name }}</h3>
            <p class="my-badge-description">{{ $badge->description }}</p>
            <p class="my-badge-image">{{ $badge->displayBadge() }}</p>
        </div>
    @endforeach
</div>
@endsection
