{{-- edit.blade.php --}}

@extends('layout')
@section('content')
<h1> EDIT/DELETE COACH {{$coach->id}}</h1>:

<form action="/coaches/{{$coach->id}}" method="POST">
    @csrf 
    @method('PATCH')
    <label for="nname"> Name</label>
    <input type="text" id="nname" name="name"><br>
    <label for = "fname"> From</label>
    <input type="date" id="fname" name="from"><br>
    <label for="tname"> Team Id</label>
    <select id="tname" name="team_id">
        @foreach ($teams as $team)
            <option value="{{$team->id}}"> {{$team->name}}</option><br>
        @endforeach
    </select><br>
    <input type="submit" name="submit" value="modify coach"><br><br>
</form>

<form action="/coaches/{{$coach->id}}" method="POST">
    @csrf 
    @method('DELETE')
    <input type="submit" name="submit" value="delete coach"><br><br>
</form>
@endsection