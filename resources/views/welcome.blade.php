<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-17/css/reset.css">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-17/css/5-17.css">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-9/css/reset.css">
        <link rel="stylesheet" type="text/css" href="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-9/css/5-9.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Welcome</title>
    </head>
    <body>
        <div id="particles-js"></div>
        <div id="wrapper">
            <canvas id="particle"></canvas>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto" >
                    <p class="text-white">本Webアプリは、彼に大勢の人々の想いを届けるために作成された、
                    </p>    
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto" >
                    <p class="text-white">ささやかなプレゼントである。<br></p>    
                </div>
            </div>
            <div class="row justify-content-md-center m-2">
                <div class="col-md-auto" >
                    <h4><br><a href="/index" class="gradient2">入場</a></h4>
                </div>
            </div>
            <div class="row justify-content-md-center m-2">
                <div class="col-md-auto" >
                    <h4>______________________________</h4>
                </div>
            </div>
        </div>
            

        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-9/js/5-9.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
        <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-17/js/particleText.js"></script>
        <script>
            $("#particle").particleText({
                text: "コウヘイに<br>想いを<br>届けたい<br>↓", // 表示させたいテキスト。改行の場合は<br>追加
                colors:["#fff","#ccc", "#ddd"], // パーティクルの色を複数指定可能
                speed: "high",  // slow, middle, high の3つから粒子が集まる速さを選択
            });
        </script>
    </body>
</html>

