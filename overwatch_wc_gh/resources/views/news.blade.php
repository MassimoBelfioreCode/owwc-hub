{{-- news.blade.php --}}

@extends('layout')
@section('title', 'News')

@section('content')
<style>
div.mycontainer {
  width:100%;
  overflow:auto;
}
div.mycontainer div {
  width:33%;  
  float:left;
}
</style>

<h1>--- 2024 News ---</h1>
<h2 style="color: orangered;"> Saudi Arabia is the Overwatch 2023 World Cup Winner </h2>
<p> All hail the champions.<p><br>


<h3> Celebrating 15 years of esports </h3>
<p>
    <b>October 22</b> is the esports day. This year the celebration takes place in <b>London.</b>
</p><br>


<h3> AFreecar dominates all recent games, Attune Unstoppable!</h3>
<div class="mycontainer">

    <div>
        <img src="{{ asset('imag/Afreecar_logo.png') }}" alt="Afreecar Logo">
    </div>

    <div>
        <img src="{{ asset('imag/AfreecaFreecs.jpeg') }}" alt="Afreecar Team">
    </div>
</div>
<p>
    <b>Afreecar</b> path is legendary. The team won every game since the start of the year and it is
    currently undefeated. <b>Utter</b> does the magic saving the last game against <b>Gen.G</b>.
    After an hard training the team shows powerful game dynamics and a good teamwork... <a href="/afreecar"> read more</a>.
</p>

<br><h3> <b>Brazil</b> defetead in Quarter Finals. No mercy for it...</h3>
<img src="{{asset('imag/OWWC_BRAZIL.jpg') }}" alt="Brazil Team"><br>
<p>The brazilian team has been defeated by China. Liko words: "We are very sad for this result but we will back stronger" seems like a<br>
hope message for his teammates. And more: "Was not only misfortune... Hard training days will come, but is necessary."<br></p><br>
@endsection