{{-- index.blade.php --}}

@extends('layout')

@section('content')
<h1> Coaches </h1>
@foreach($coaches as $coach)
    <ul>
        <li><a href="/coaches/{{$coach->id}}"> {{$coach->id}}</a>| {{$coach->name}} | {{$coach->team->name}}|</li>
    </ul>
@endforeach
@endsection