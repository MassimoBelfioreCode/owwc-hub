{{-- create.blade.php --}}

@extends('layout')
@section('content')
<h2> CREATE OVERWATCH PLAYER </h2>
Fill the form fields below to create a player
<br>
<form action="/players" method="post">
    @csrf
    <label for="nname">Name</label>
    <input type="text" id="nname" name="name"><br>
    <label for="rname">Role</label>
    <input type="text" id="rname" name="role"><br>
    <label for="sname">Status</label>
    <input type="text" id="sname" name="status"><br>
    <label for="aname">Age</label>
    <input type="text" id="aname" name="age"><br>
    <label for="tname">Team_id</label>
    <select id="tname" name="team_id">
        @foreach ($teams as $team)
            <option value="{{$team->id}}"> {{$team->name}}</option><br>
        @endforeach
    </select><br><br>
    <input type="submit" name="submit" value="create new player"><br>
</form> 
@endsection