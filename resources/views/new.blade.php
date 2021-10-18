<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

<h1>新規投稿ページ</h1>

<form action="/store" method="POST">
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

<a class="btn btn-primary" href="#" role="button">戻る</a>

</body>


<footer>
    <p>本アプリは、個人情報に配慮し、開示情報を制限しております。
        <br>詳細な内容を閲覧されたい方は、コウヘイ・あるいは彼のご家族にご依頼をお願いします。
        <br>また、動画投稿を希望される方は、本アプリ製作者へ直接ご連絡ください。
    </p>
</footer>