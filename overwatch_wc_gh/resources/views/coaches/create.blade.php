{{-- create.blade.php --}}

@extends('layout')
@section('content')
<h1> CREATE COACH</h1>
Fill the form fields below to insert a new Coach<br>
<form action = "/coaches" method="POST">
    @csrf 
    <label for="nname"> Name</label>
    <input type="text" id="nname" name="name"><br>
    <label for = "fname"> From</label>
    <input type="date" id="fname" name="from"><br>
    <label for="tname"> Team Id</label>
    <select id="tname" name="team_id" multiple size="2">
        @foreach ($teams as $team)
            <option value="{{$team->id}}"> {{$team->name}}</option><br>
        @endforeach
    </select><br>
    <input type="submit" name="submit" value="create new coach"><br><br>
</form>

@endsection