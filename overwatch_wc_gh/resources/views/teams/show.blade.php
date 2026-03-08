{{-- show.blade.php --}}
@extends('layout')

@section('content')
<h2> {{$team->name}} Team</h2>
<p>
<b>Id</b>: {{$team->id}}<br>
<b>Name</b>: {{$team->name}}<br>
<b>Games won</b>: {{$team->games_won}}<br>
<b>Games lost</b>: {{$team->games_lost}}<br>
<b>Titles win</b>: {{$team->titles_won}}<br>
<b>Sector/Group</b>: {{$team->sector}}<br>
<b>Eliminated</b>: {{$team->eliminated}}<br>
</p>

@if($team->players->count())
    <b>Full Roster</b><br>
    @foreach($team->players->sortBy('name') as $player)
        <ul>
            <li><a href="/players/{{$player->id}}">{{$player->id}}</a>: {{$player->name}} | {{$player->role}}</li><br>
        </ul>
    @endforeach
@endif

<br>
<form action="/teams/{{$team->id}}/edit" method="get">
    <input type="submit" name="submit" value="edit/delete team"><br>
</form>
@endsection
