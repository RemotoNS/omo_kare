<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>5-4 幾何学模様</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link href="{{ asset('css/app_destroy.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-4/css/reset.css">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-4/css/5-4.css">
    </head>
    <body>
        <div id="particles-js"></div>
        <div class="container-fluid">
            <div id="wrapper">
                <div class="row">
                    <div class="col-xs-12 col-lg-12 mt-5">
                        <h1 class="indexTital glowAnime text-center">本当に削除しちゃっていいの🥺？</h1>
                    </div>
                    <div class="col-xs-12 col-lg-12 mt-5">
                        <h3 class = "text-center">
                            <a href="/destroy/{{ $id }} " class="gradient2">はい</a>
                        </h3>
                    </div>
                    <div class="col-xs-12 col-lg-12 mt-5">
                        <h3 class = "text-center">
                            <a href="/main" class="gradient3">いいえ</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('/js/destroy.js') }}"></script>      
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-4/js/5-4.js"></script>
    </body>
</html>

