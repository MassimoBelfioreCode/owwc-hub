{{-- create.blade.php --}}

@extends('layout')

@section('content')
<h1> CREATE MATCH</h1>
Fill the form fields below to create a new match<br>
<form action="/matches", method="POST">
    @csrf
    <label for="dname"> Date</label>
    <input type="date" id="dname" name="date"><br>
    <label for="tname"> Start</label>
    <input type="time" id="tname" name="start"><br>
    <label for="rname"> Referee</label>
    <input type="string" id="rname" name="referee"><br>
    <label for="tiname"> Team_id</label>
    <select id="tiname" name="team_id">
        @foreach ($teams as $team)        
            <option value="{{$team->id}}">{{$team->name}}</option><br>
        @endforeach
    </select><br>
    <input type="submit" name="submit" value="create new match"><br>
</form>

@endsection