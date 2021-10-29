@extends("layouts.full_app")

@section("title","新規投稿")

@section("content")

<div class="col-xs-12 col-lg-12 mt-5">
  <p class="indexTital glowAnime text-center">新規投稿ページ</p>
</div>

  <div class="contact-form">
    <form action="/store" method="POST" enctype="multipart/form-data">
    @csrf
      <table>
        <tr><th>お名前</th><td><input name="name" type="text" required></td></tr>
        <tr><th>画像を投稿する（任意）</th><td><input type="file" name="img" class="form-control-file"></td></tr>

        <tr><th>メッセージを投稿する</th><td><textarea name="text" placeholder="心温まるメッセージの投稿をお願いします!" required></textarea></td></tr>

      </table>
      <input class="submit-btn" type="submit" value="投稿する">
    </form>
  </div>

  <div class="col-xs-12 col-lg-12 mt-5">
    <h3 class = "text-center">
        <a href="/index" class="gradient2">メッセージ集へ戻る</a>
    </h3>
  </div>
    
@endsection
