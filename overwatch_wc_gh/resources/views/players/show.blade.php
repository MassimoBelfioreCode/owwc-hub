{{-- show.blade.php --}}
@extends('layout')

@section('content')
<h2> PLAYER INFO</h2>
<p>
<b>Id</b>: {{$player->id}}<br>
<b>Name</b>: {{$player->name}}<br>
<b>Role</b>: {{$player->role}}<br>
<b>Status</b>: {{$player->status}}<br>
<b>Age</b>: {{$player->age}}<br>
<b>Team id</b>: {{$player->team_id}}<br>
</p>

<form action="/players/{{$player->id}}/edit" method="get">
    <input type="submit" name="submit" value="edit/delete player"><br>
</form>
@endsection
