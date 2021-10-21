@extends("layouts.full_app")

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

    <a class="btn btn-primary" href="/index" role="button">メッセージ集へ戻る</a>

    <p><?= $name ?></p>
    <p><?= $text ?></p>
    <div class="container">
        <img src=" {{ asset('storage/'.$img) }}" class="example1">
    </div>
    
@endsection

