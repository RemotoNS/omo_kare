@extends('layouts.app')

@section('content')

<p>見えますか？</p>

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

<h1>コウヘイへのメッセージ</h1>

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>作成日時</th>
        <th>メッセージ</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gifts as $gift)
        <tr>
          <td>
            <a href="/show/{{  $gift->id }}">{{ $gift->id }}
            </a>
          </td>
          <td>{{ $gift->name }}</td>
          <td>{{ $gift->created_at->format('Y.m.d') }}</td>
          <td>{{ $gift->text }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
