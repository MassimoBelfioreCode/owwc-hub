{{-- index.blade.php --}}

@extends('layout')
@section('content')
<h1> Overwatch Players</h1>
@foreach ($players as $player)
    <a href="/players/{{$player->id}}"> {{$player->id}} </a>| {{$player->name}} | {{$player->role}} | {{$player->team->name}} <br>
@endforeach
<br>
@endsection