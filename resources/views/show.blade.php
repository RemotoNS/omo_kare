@extends("layouts.app")

@section("title","メッセージ内容")

<style type="text/css">
    img.example1 {
    width: 200px;
    height: 200px;
    }

    img.example2 {
    width: 50%;
    height: 500px;
    }
</style>

@section("content")

    <a class="btn btn-primary" href="/main" role="button">VIPルームに戻る</a>
    <a class="btn btn-primary" href="/destroy_ok/{{ $id }}" role="button">削除</a>

    <p><?= $name ?></p>
    <p><?= $text ?></p>
    <div class="container">
        <img src=" {{ asset('storage/'.$img) }}" class="example1">
    </div>

    <div class="container">
        <img src=" {{ asset('storage/'.$img) }}" class="example2">
    </div>

@endsection