{{-- edit.blade.php --}}

@extends('layout')
@section('content')
<h1> EDIT/DELETE TEAM</h1>
Fill the form fields below to modify the selected team<br>

<form action="/teams/{{$team->id}}" method="post">
    @csrf
    @method('PATCH')
    <label for="gwname">Games won</label>
    <input type="text" id="gwname" name="games_won" placeholder="{{$team->games_won}}"><br>
    <label for="glname">Games lost</label>
    <input type="text" id="glname" name="games_lost" placeholder="{{$team->games_lost}}"><br>
    <label for="twname">Titles won</label>
    <input type="text" id="twname" name="titles_won" placeholder="{{$team->titles_won}}"><br>
    <label for="ename">Eliminated</label>
    <input type="text" id="ename" name="eliminated"><br>
    <input type="submit" name="submit" value="modify/save team"><br><br>
</form>

<form action="/teams/{{$team->id}}" method="post">
    @csrf
    @method('DELETE')
    @if($team->eliminated == 1)
        <input type="submit" name="submit" value="delete team"><br><br>
    @endif
</form>
@endsection
