@extends("layouts.foot")

@section("title","新規投稿")

@section("content")
  <h1>新規投稿ページ</h1>

  <form action="/store_chara" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">画像を投稿する</label>
      <input type="file" name="chara" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <button type="submit" class="btn btn-primary">投稿する</button>

  </form>

  <a class="btn btn-primary" href="/index" role="button">戻る</a>

@endsection