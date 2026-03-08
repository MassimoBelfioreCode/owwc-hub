
@extends('layout')

@section('content')
<h3> Teen Players</h3><br>
@foreach($players as $player)
    <?php echo "<a href='/players/$player->id'>$player->id</a> | $player->name |<br>";?>
@endforeach
<br><br>
@endsection