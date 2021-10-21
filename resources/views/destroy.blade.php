@extends("layouts.app")

@section("title","削除確認")

@section("content")
    <h1>本当に削除しちゃっていいの？</h1>

    <a class="btn btn-primary" href="/destroy/{{ $id }} " role="button">はい</a>

    <a class="btn btn-primary" href="/main" role="button">いいえ</a>
@endsection