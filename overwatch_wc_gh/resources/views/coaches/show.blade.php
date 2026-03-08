{{-- show.blade.php --}}
@extends('layout')

@section('content')
<h2> COACH INFO</h2>
<p>
<b>Id</b>: {{$coach->id}}<br>
<b>Name</b>: {{$coach->name}}<br>
<b>From</b>: {{$coach->from}}<br>
<b>Team id</b>: {{$coach->team_id}}<br>
</p>

<br>
<form action = "/coaches/{{$coach->id}}/edit" method = "GET">
    <input type = "submit" name = "submit" value = "edit/delete coach"><br><br>
</form>
@endsection