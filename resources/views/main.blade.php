@extends('layouts.app')

@section("title","VIPルーム")


@section('content')

  <h1>VIPルーム</h1>

  <div style="position: relative; padding-bottom: 10%;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Pj0b9f_3nvM" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div style="position: relative; padding-bottom: 10%;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/OUSEtrXXvbY" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div style="position: relative; padding-bottom: 10%;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/aJVRrigDJbw" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <h2>コウヘイへのメッセージ</h2>

  @foreach ($gifts as $gift)
    <h2>
      <a href="/show/{{  $gift->id }}">{{ $gift->name }}からのメッセージ</a>
    </h2>
  @endforeach

@endsection
