
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

    <!--ロード画面 -->
    
    
    
              <!--JQuery-->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--最初の画面-->
    <link rel="stylesheet" href="css/index.css">
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    
    
   
</head>

<body>

<div id="loader"><img src="images/loading/panda.gif" alt="Loading..." /><br><center>Now Loading...<br><div id="progress">%</div></center></div>

<div id="fade"></div>
 
<div id="container" style="display:none">
  

  @include('layouts.navbar')
  <header>
    <br>
    <div><img class="logo" src="/images/logo.jpg"></div>
    <h1>新卒に嬉しい、楽天プライム。</h1>

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
          <h3 class="el__heading">ハッピー<br>&nbsp;&nbsp;&nbsp;手当&nbsp;<br></h3>
          </div>
          <div class="el__content">
            <div class="el__text">
            <h1 class="el__text_title">ハッピー手当</h1>
            <h3><br>ワークアズライフを充実させよう。<br><br>楽天で快適なワークスタイルを送るために必ず知っておくべき「休暇」「転勤時手当」などの社内情報について紹介。</h3>
            
            <br>
            <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('workinfo', ' ハッピー手当一覧を見る') !!}</span></h2>
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
            <h2 class="el__heading">ラッキー<br>&nbsp;&nbsp;&nbsp;社割&nbsp;</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
            <h1 class="el__text_title">ラッキー社割</h1>
            <h3><br>生産性アップのカギはメリハリ！たまには仕事を離れて、レジャーを楽しもう！</h3>
                  <div class="coupon_index">
                      <br><a href="rakuten">1.社内で使えるサービス</a>
                      <br><a href="cafe" >2.飲食店</a>
                      <br><a href="movie">3.映画 ＆ カラオケ</a>
                      <br><a href="amusement">4.アミューズ</a>
                      <br><a href="shopping">5.ショッピング</a>
                  </div>
         　
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
            <h2 class="el__heading">ウキウキ<br>&nbsp;&nbsp;&nbsp;支社</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
              <h1 class="el__text_title">ウキウキ支社</h1>
              <h3><br>意外に知られていない地方支社。楽天クリムゾンハウス以外のオフィスをのぞいてみよう。<br>地方に行くのが楽しみになるかも！</h3>
            
              <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('contents.branch', ' 支社情報を見る') !!}</span></h2>
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
              <h1 class="el__text_title">
                <img src="images/buttons/solobutton3.png" onclick="image1()" id="i1">     
                <img src="images/buttons/solobutton4.png" onclick="image2()" id="i2">
                <br>
                <img src="images/buttons/solobutton2.png" onclick="image3()" id="i3">     
                <img src="images/buttons/solobutton.png" onclick="image4()" id="i4">
                <!--<a  href="soloanswer">-->
                  <!--<a href="soloanswer"><img src="images/buttons/solobutton.png" id="i1" border="0"></a></h1>-->
                                   <!--<a href="answer"><img src="images/buttons/solobutton2.png" id="i2" border="0"><a/>-->
                 <!--<a href="banana"><img src="images/buttons/solobutton3.png" id="i3"><a/>-->
                 <!--<a href="match"><img src="images/buttons/solobutton4.png" id="i4"><a/>-->
                  <!--<a/>-->
                  <br>
                ↑CLICK</h1>
              <h3>
                <!--<br>ゲームでショートブレイクをしませんか？<br>ゲームをしながら楽天について知識を深めることができます。-->
                
                 <div id="press">
                 <!--<a href="soloanswer"><img src="images/buttons/solobutton.png" id="i1"><a/>-->
                 <!--<a href="answer"><img src="images/buttons/solobutton2.png" id="i2"><a/>-->
                 <!--<a href="banana"><img src="images/buttons/solobutton3.png" id="i3"><a/>-->
                 <!--<a href="match"><img src="images/buttons/solobutton4.png" id="i4"><a/>-->
                 </div>
                 </h3>
                 <!--{!! link_to_route('answer', '1.RAKUTEN QUIZ') !!}-->
                 <!--<br>{!! link_to_route('banana', '2.magical banana') !!}-->
                 <!--<br>{!! link_to_route('match', '3.自分に合った支社を見つけよう') !!}-->
                 <!--<br>{!! link_to_route('shooting', '4.Red Oceanを勝ち抜け！') !!}-->
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
              <p><h3>楽天のおしゃれな写真をラインナップ！<br>あなたのスライドや資料にぴったりな写真が見つかるかも！</h3></p>
            
              <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('member', '楽天ギャラリーを見る') !!}</span></h2>
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back"><img src="/images/rakuten_gallery/panda5.png" id="loadpanda"></div>
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

<div id="chat" style="display:none">
  
@include('chat')
<button><img src="images/buttons/close.png" id="close"></button> 
</div>  

<!--ロード時間計測-->
<img src="images/rakuten_gallery/top_white/Slide7.JPG" id="loadtime1" style="display:none">
<img src="images/rakuten_gallery/top_white/Slide5.JPG" id="loadtime2" style="display:none">
<img src="images/rakuten_gallery/top_white/Slide2.JPG" id="loadtime3" style="display:none">
<img src="images/rakuten_gallery/top_white/Slide1.jpg" id="loadtime4" style="display:none">
<img src="images/rakuten_gallery/top_white/Slide4.JPG" id="loadtime5" style="display:none">
  
<!--ロードが完了してから読み込むJavascript-->
    <script  src="js/index.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/loader.js"></script>


</body>



</html>