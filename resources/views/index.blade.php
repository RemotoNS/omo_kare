@extends("layouts.full_app")

@section("title","メッセージ集")

@section("content")

    <h1>コウヘイへのメッセージ</h1>

    <div class="table-responsive">

      @foreach ($gifts as $gift)
      <>
          <h2>
          <a href="/show_sub/{{  $gift->id }}">{{ $gift->name }}からの<br>メッセージ</a>
          </h2>
      @endforeach

    </div>

    <a class="btn btn-primary" href="/new" role="button">彼に想いを届けたい</a>

    <a class="btn btn-primary" href="/main" role="button">VIPルーム</a>

@endsection
