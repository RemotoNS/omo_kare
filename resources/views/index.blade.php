@extends("layouts.full_app")

@section("title","メッセージ集")

@section("content")
  <div class="col-xs-12 col-lg-12 mt-5">
    <h1 class="indexTital glowAnime text-center">コウヘイへのメッセージ</h1>
  </div>
  @foreach ($gifts as $gift)
  <div class="col-xs-12 col-lg-4 mt-5">
    <p class = "text-center">
      <a href="/show_sub/{{ $gift->id }}" class="gradient4">
        {{ $gift -> name }}'s<br>Message♡
      </a>  
    </p>
  </div>
  @endforeach
  <div class="col-xs-12 col-lg-12 mt-5">
    <h3 class = "text-center"><a href="/new" class="btntransform">彼に想いを届けたい</a></h3>
  </div>
  <div class="col-xs-12 col-lg-12 mt-5">
    <h2 class = "text-center"><a href="/main" class="gradient1">VIPルーム</a></h2>
  </div>

@endsection
