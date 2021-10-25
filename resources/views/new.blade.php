@extends("layouts.full_app")

@section("title","新規投稿")

@section("content")
  <h1>新規投稿ページ</h1>

  <form action="/store" method="POST" enctype="multipart/form-data">
  @csrf

    <div class="form-group">
      <label>名前</label>
      <input type="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label>メッセージを投稿する</label>
      <textarea class="form-control" type="text" name="text" rows="3" 
        placeholder="心温まるメッセージの投稿をお願いします" required>
      </textarea>
    </div>

    <div class="form-group">
      <label>画像を投稿する</label>
      <input type="file" name="img" class="form-control-file">
    </div>

    <button type="submit" class="btn btn-primary">投稿する</button>

  </form>

  <a class="btn btn-primary" href="/index" role="button">メッセージ集に戻る</a>

@endsection
