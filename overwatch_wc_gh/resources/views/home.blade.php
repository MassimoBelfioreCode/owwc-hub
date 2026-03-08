{{-- home.blade.php --}}

@extends('layout')
@section('title', 'Homepage')

@section('content')
<style> form {display:inline-table;}</style>


<h2> Teams Operations</h2>

<form action="/teams" method="GET">
    <input type="submit" name="submit" value="show all teams"><br>
</form>

<form action="teams/create" method="GET">
    <input type="submit" name="submit" value="create team"><br>
</form>

<form action="/teams" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" name="submit" value="delete all Teams"><br>
</form>

<form action="/teams/reset" method="POST">
    @csrf 
    <input type="submit" name="submit" value="reset wins/losts"><br><br>
</form>


<h2> Players Operations</h2>

<form action="/players" method="GET">
    <input type="submit" name="submit" value="show all players"><br>
</form>

<form action="players/create" method="GET">
    <input type="submit" name="submit" value="create player"><br>
</form>

<form action="/players/showAgeLessThan" method="POST">
    @csrf
    <input type="submit" name="submit" value="age under 18"><br><br>
</form>


<h2> Coaches Operations</h2>

<form action="/coaches" method="GET">
    <input type="submit" name="submit" value="show all coaches"><br>
</form>

<form action="/coaches/create" method="GET">
    <input type="submit" name="submit" value="create coach"><br>
</form>

<form action="/coaches" method="POST">
    @csrf 
    @method('DELETE')
    <input type="submit" name="submit" value="delete all coaches"><br><br>
</form>


<h2> Matches Operations</h2>

<form action="/matches/create" method="GET">
    <input type="submit" name="submit" value="create new match"><br><br><br>
</form>

@endsection