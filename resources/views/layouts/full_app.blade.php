<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BootstrapのCSSを読み込み -->
        <link href="css/bootstrap/bootstrap.css" rel="stylesheet">

        <!-- BootstrapのJSを読み込み -->
        <!-- ※必ず先にJQueryを読み込む -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- ※その後にBootstrapのJSを読み込む -->

        <!-- CSRF Token -->

        
        <title>@yield("title")</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="particles-js"></div>
        <div class="container-fluid">
            <div class="wrapper">
                <div class="row">
                    @yield('content')
                    <div class="col-xs-12 col-lg-12 mt-5">
                        <h5 class = "text-break text-center">
                            <br>本アプリは、個人情報に配慮し、開示情報を制限しております。
                            <br>詳細な内容を閲覧されたい方は、コウヘイ・あるいは彼のご家族にご依頼をお願いします。
                            <br>また、動画投稿を希望される方は、本アプリ製作者へ直接ご連絡ください。
                        </h5>
                    </div>
                </div>
            </div>
        <div>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-8/js/5-8.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/8-17/js/8-17.js"></script>
    </body>
</html>