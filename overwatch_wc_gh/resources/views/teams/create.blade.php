{{-- create.blade.php --}}

@extends('layout')
@section('content')
<h2> CREATE OVERWATCH TEAM</h2>
Fill the form fields below to create a team
<br>
<form action="/teams" method="post">
    @csrf
    <label for="nname">Name</label>
    <input type="text" id="nname" name="name"><br>
    <label for="gwname">Games won</label>
    <input type="text" id="gwname" name="games_won"><br>
    <label for="glname">Games lost</label>
    <input type="text" id="glname" name="games_lost"><br>
    <label for="twname">Titles won</label>
    <input type="text" id="twname" name="titles_won"><br>
    <label for="sname">Sector</label>
    <input type="text" id="sname" name="sector"><br>
    <label for="ename">Eliminated</label>
    <input type="text" id="ename" name="eliminated"><br>
    <input type="submit" name="submit" value="create new team"><br>
</form> 
@endsection