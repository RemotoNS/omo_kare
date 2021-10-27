@extends("layouts.full_app")

@section("title","メッセージ内容")

<style type="text/css">
    img.example1 {
    width: 300px;
    height: 300px;
    margin:auto;
    }
</style>

@section("content")

    <div class="col-xs-12 col-lg-12 mt-5">
        <p class="indexTital glowAnime text-center">名前；<?= $name ?></p>
    </div>
    <img src=" {{ asset('storage/'.$img) }}" class="example1" >
    <div class="col-xs-12 col-lg-12 mt-5">
        <p class="indexTital glowAnime text-center"><?= $text ?></p>
    </div>

    <div class="col-xs-12 col-lg-12 mt-5">
        <h3 class = "text-center">
            <a href="/index" class="gradient2">メッセージ集へ戻る</a>
        </h3>
    </div>





    
@endsection

