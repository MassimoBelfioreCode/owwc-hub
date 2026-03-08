{{-- index.blade.php --}}

@extends('layout')
@section('content')
<h1> Overwatch Teams</h1>
<table>
    <tr>
        <th> Id </th>
        <th> Name </th>
        <th> Sector(Group) </th>
        <th> State</th>
    </tr>
    @foreach ($teams as $team)
    <tr>
        <td> <a href="/teams/{{$team->id}}"> {{$team->id}} </a></td>
        <td> {{$team->name}} </td>
        <td> {{$team->sector}} </td>
        <td>
            @if ($team->eliminated == 1)
                <?= "OUT"; ?>
            @endif
        </td>
    </tr>
    @endforeach
</table>
<br>
@endsection

<!-- statistiche giocatore-->