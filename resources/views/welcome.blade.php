<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sasorich KAI</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    
    <!--Chat機能 Firebase接続-->
    <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

     
              <!--JQuery-->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--最初の画面-->
    <link rel="stylesheet" href="css/index.css">
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    
    
   @include('layouts.navbar')
</head>

<body>
  <header>
    <br>
    <div><img class="logo" src="/images/logo.jpg"></div>
    <h1>みんなに嬉しい、楽天プライム。</h1>
  <h3 class="wakuwaku">― 楽天を使い倒せ！ ―</h3>
  
  <h4 >毎日のお勤めにワクワクをプラスする情報をお届けします。
  <br>社員同士で交流できるサービスもご用意しています。</h4>
  </header>
  
  


  <div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <!--<div class="el">-->
    <!--  <div class="el__overflow">-->
    <!--    <div class="el__inner">-->
    <!--      <div class="el__bg"></div>-->
    <!--      <div class="el__preview-cont">-->
            
    <!--        <h3 class="el__heading">ハッピー<br>手当<br></h3>-->
    <!--      </div>-->
    <!--      <div class="el__content">-->
    <!--        <div class="el__text">-->
    <!--          <div class="el__title"></div>-->

              
             
                   
    <!--<ol class="suuji">-->
                   
    <!--                  <li class="el__coupon"> <a href="rakuten"></a></li>-->
    <!--                  <li class="coupon"> <a href="cafe" >Cafe & Restaurant around office</a></li>-->
    <!--                  <li class="coupon"> <a href="movie">Movie & Karaoke</a></li>-->
    <!--                  <li class="coupon"> <a href="amusement">Amusement park & pool</a></li>-->
    <!--                  <li class="coupon"> <a href="shopping">Shopping</a></li>-->
    <!--                 </ol>-->
    <!--                 </div>-->
                   
                   
                   
                   
                   
                   

    <!--        <div class="el__close-btn"></div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="el__index">-->
    <!--    <div class="el__index-back"><img src="/images/rakuten_gallery/panda6.png"></div>-->
    <!--    <div class="el__index-front">-->
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    
    <!-- el end -->
    
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
          <h3 class="el__heading">ハッピー<br>手当<br></h3>
          </div>
          <div class="el__content">
            <div class="el__text">
            <h3>大きな出来事があると休みがもらえる可能性あり！<br>どんな時に休暇をとれるのかな？詳細をCheck！！</h3>
            
            {!! link_to_route('workinfo', '→ GO TO THE GALLERY') !!}
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"><img src="/images/rakuten_gallery/panda6.png"></div>
        <div class="el__index-front">
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
        </div>
      </div>
    </div>
    
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">ラッキー<br>社割</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
<div class="el__title"></div>

              
             
                   
    <ol class="suuji">
                   
                      <li class="el__coupon"> <a href="rakuten">社内で使えるサービス</a></li>
                      <li class="coupon"> <a href="cafe" >飲食店</a></li>
                      <li class="coupon"> <a href="movie">映画 ＆ カラオケ</a></li>
                      <li class="coupon"> <a href="amusement">アミューズ</a></li>
                      <li class="coupon"> <a href="shopping">ショッピング</a></li>
                     </ol>
                     
              </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"><img src="/images/rakuten_gallery/panda3.png"></div>
        <div class="el__index-front">
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">ウキウキ<br>支社</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
              <p><h3>意外に知られていない地方支社。楽天クリムゾンハウス以外のオフィスをのぞいてみよう。<br>地方に行くのが楽しみなるかも！</h3></p>
            
              {!! link_to_route('contents.branch', '→ SEARCH THE BRANCHES') !!}
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"><img src="/images/rakuten_gallery/panda4.png"></div>
        <div class="el__index-front">
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">ほっこり<br>ブレイク</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
                 {!! link_to_route('answer', 'RAKUTEN QUIZ') !!}
                 {!! link_to_route('banana', 'banana') !!}
                 {!! link_to_route('match', '自分に合った支社を見つけよう') !!}
                 {!! link_to_route('shooting', 'Red Oceanを勝ち抜け！') !!}
                 <!--@include('chat')-->
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"><img src="/images/rakuten_gallery/panda.png"></div>
        <div class="el__index-front">
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">キラキラ<br>ギャラリー</h2>
          </div>
          <div class="el__content">
            <div class="el__text">


            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"><img src="/images/rakuten_gallery/panda5.png"></div>
        <div class="el__index-front">
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
        </div>
      </div>
    </div>
    <!-- el end -->
        <!-- el start -->
    <!--<div class="el">-->
    <!--  <div class="el__overflow">-->
    <!--    <div class="el__inner">-->
    <!--      <div class="el__bg"></div>-->
    <!--      <div class="el__preview-cont">-->
    <!--        <h2 class="el__heading">RAKUTEN<br>GAME</h2>-->
    <!--      </div>-->
    <!--      <div class="el__content">-->
    <!--        <div class="el__text">-->
    <!--             {!! link_to_route('banana', 'banana') !!}<br>-->
    <!--             {!! link_to_route('match', '自分に合った支社を見つけよう') !!}<br>-->
    <!--             {!! link_to_route('shooting', 'Red Oceanを勝ち抜け！') !!}-->
                 
                
    <!--        </div>-->
    <!--        <div class="el__close-btn"></div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="el__index">-->
    <!--    <div class="el__index-back">E</div>-->
    <!--    <div class="el__index-front">-->
    <!--      <div class="el__index-overlay" data-index="E">E</div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- el end -->
    
            <!-- el start -->
    <!--<div class="el">-->
    <!--  <div class="el__overflow">-->
    <!--    <div class="el__inner">-->
    <!--      <div class="el__bg"></div>-->
    <!--      <div class="el__preview-cont">-->
    <!--        <h2 class="el__heading">COFFEE<br>BREAK</h2>-->
    <!--      </div>-->
    <!--      <div class="el__content">-->
    <!--        <div class="el__text">Let's have a cofee break!-->
    <!--        @include('chat')-->
            
    <!--        </div>-->
            
    <!--        <div class="el__close-btn"></div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="el__index">-->
    <!--    <div class="el__index-back">N</div>-->
    <!--    <div class="el__index-front">-->
    <!--      <div class="el__index-overlay" data-index="N">N</div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- el end -->
    
  </div>
  <!-- cont inner end -->
</div>

  
  
<!--ロードが完了してから読み込むJavascript-->
    <script  src="js/index.js"></script>
    <script src="js/chat.js"></script>



</body>

</html>