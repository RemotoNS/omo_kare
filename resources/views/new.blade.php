@extends("layouts.foot")

@section("title","新規投稿")

@section("content")
  <h1>新規投稿ページ</h1>

  <form action="/store" method="POST" enctype="multipart/form-data">
  @csrf

    <div class="form-group">
      <label for="exampleFormControlInput1">名前</label>
      <input type="name" name="name" class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">メッセージを投稿する</label>
      <textarea class="form-control" type="text" name="text" rows="3" placeholder="心温まるメッセージの投稿をお願いします"></textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlFile1">画像を投稿する</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <button type="submit" class="btn btn-primary">投稿する</button>

  </form>

  <a class="btn btn-primary" href="/index" role="button">戻る</a>

@endsection
