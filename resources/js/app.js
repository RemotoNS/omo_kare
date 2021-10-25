/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/**
 * welcome.phpのために追加（38-120行目まで）
 */

$("#particle").particleText({
    text: "コウヘイに想いと届けたい", // 表示させたいテキスト。改行の場合は<br>追加
    colors:["#fff","#ccc", "#ddd"], // パーティクルの色を複数指定可能
    speed: "high",  // slow, middle, high の3つから粒子が集まる速さを選択
  });




/**
 * full_app.phpのために追加(紙吹雪)
 */

particlesJS("particles-js",{
    "particles":{
      "number":{
        "value":125,//この数値を変更すると紙吹雪の数が増減できる
        "density":{
          "enable":false,
          "value_area":400
        }
      },
      "color": {
          "value": ["#EA5532", "#F6AD3C", "#FFF33F", "#00A95F", "#00ADA9", "#00AFEC","#4D4398", "#E85298"]//紙吹雪の色の数を増やすことが出来る
      },
      "shape":{
        "type":"polygon",//形状はpolygonを指定
        "stroke":{
          "width":0,
        },
        "polygon":{
          "nb_sides":5//多角形の角の数
        }
        },
        "opacity":{
          "value":1,
          "random":false,
          "anim":{
            "enable":true,
            "speed":20,
            "opacity_min":0,
            "sync":false
          }
        },
        "size":{
          "value":5.305992965476349,
          "random":true,//サイズをランダムに
          "anim":{
            "enable":true,
            "speed":1.345709068776642,
            "size_min":0.8,
            "sync":false
          }
        },
        "line_linked":{
          "enable":false,
        },
        "move":{
          "enable":true,
        "speed":10,//この数値を小さくするとゆっくりな動きになる
        "direction":"bottom",//下に向かって落ちる
        "random":false,//動きはランダムにならないように
        "straight":false,//動きをとどめない
        "out_mode":"out",//画面の外に出るように描写
        "bounce":false,//跳ね返りなし
          "attract":{
            "enable":false,
            "rotateX":600,
            "rotateY":1200
          }
        }
      },
      "interactivity":{
        "detect_on":"canvas",
        "events":{
          "onhover":{
            "enable":false,
          },
          "onclick":{
            "enable":false,
          },
          "resize":true
        },
      },
      "retina_detect":true
    });

    /**
 * full_app.phpのために追加
 */