@extends("layouts.full_app")

@section("title","メッセージ集")

@section("content")

    <h1>コウヘイへのメッセージ</h1>
    <h3>ここは{ $aicon -> name }です。 </h3>
    <h2>一つ一つの星に触れてみてください。心温まるメッセージを観ることができます</h2>
 
      @foreach ($gifts as $gift)
        <a href="/show_sub/{{ $gift->id }}"><img src=" {{ asset('storage/'.$star) }}">
        </a><br>
      @endforeach
    
    <a class="btn btn-primary" href="/new" role="button">彼に想いを届けたい</a>

    <a class="btn btn-primary" href="/main" role="button">VIPルーム</a>

@endsection
