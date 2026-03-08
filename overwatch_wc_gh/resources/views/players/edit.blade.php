{{-- edit.blade.php --}}

@extends('layout')
@section('content')
<h1> EDIT/DELETE PLAYER</h1>
Fill the form fields below to modify the selected player<br>

<form action="/players/{{$player->id}}" method="post">
    @csrf
    @method('PATCH')
    <label for="nname">Name</label>
    <input type="text" id="nname" name="name" placeholder="{{$player->name}}"><br>
    <label for="rname">Role</label>
    <input type="text" id="rname" name="role" placeholder="{{$player->role}}"><br>
    <label for="sname">Status</label>
    <input type="text" id="sname" name="status" placeholder="{{$player->status}}"><br>
    <label for="aname">Age</label>
    <input type="text" id="aname" name="age" placeholder="{{$player->age}}"><br>
    <label for="tname">Team_id</label>
    <!--<input type="text" id="tname" name="team_id"><br>-->
    <select id="tname" name="team_id">
        @foreach($teams as $team)
            <option value="{{$team->id}}"> {{$team->name}} </option><br>
        @endforeach
    </select><br><br>
    <input type="submit" name="submit" value="modify/save player"><br><br>
</form>

<form action="/players/{{$player->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" name="submit" value="delete player"><br><br>
</form>
@endsection
