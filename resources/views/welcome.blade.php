
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Rakuten Prime</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    
    <!--Chat機能 Firebase接続-->
    <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    
    <!--<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    
    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!--ロード画面 -->
    
    
    
    <!--JQuery-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    
    <!--最初の画面-->
    <link rel="stylesheet" href="css/index.css">
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    
    @include('layouts.navbar')
   
</head>

<body>

<div id="loader"><img src="images/loading/panda.gif" alt="Loading..." /><br><center>Now Loading...<br><div id="progress">%</div></center></div>

<div id="fade"></div>
 
<div id="container" style="display:none">
  

  
  
  <header>
    <br><br><br><br>
    <div><img class="logo" src="/images/logo.jpg"></div>
    <h1>新卒に嬉しい、楽天プライム。</h1>

  <h3 class="wakuwaku">― 楽天を使い倒せ！ ―</h3>
  
  <h4 >毎日のお勤めにワクワクをプラスする情報や、社員同士の交流の場をお届けします。
  <br><a class="rakupura" href="/rpoint">らくプラポイント</a>を貯めて、楽天マスターになろう！</h4><br>
  <h2><a href="#ribbon2-top" class="hhh">楽天プライムの詳細を今すぐCHECK！</a></h2>
</header>
<br>

<div class = 'prime_button'>
  
@auth
<?php
$prime = \Auth::user()->prime;
        if($prime == 0){
?>
      	  {!! Form::open(['route' => ['welcomePrime']]) !!}
             <input type="hidden" value="1" name="prime" />
              {!! Form::submit('楽天プライム会員（入会費１０円）になる', ['class' => 'btn btn-danger  btn-lg btn-block', 'onclick'=>'alertPrime()']) !!}
          {!! Form::close() !!}
<?php
        }
        elseif($prime == 1){
          ?>
          <div class="jjj">
            <?php
          print 'あなたは楽天プライム会員です！';
          ?>
          </div>
          <?php
        }
      ?>
    
@endauth
                          
</div>
<br>
  

@auth
 <div class="cont s--inactive">
@else
 <div class="cont s--inactive" onmousedown="WhichButton(event)">
@endauth
 
  <!-- cont inner start -->
  <div class="cont__inner">
   
    
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
          <h2 class="el__heading">手当<br><br>
           
            </h2>
          </div>
          <div class="el__content">
            <div class="el__text">
            <h1 class="el__text_title">手当</h1>
            <h3><br>ワークアズライフを充実させよう。<br><br>楽天で快適なワークスタイルを送るために必ず知っておくべき<br>「休暇」「転勤時手当」などの社内情報について紹介。</h3>
            
            <br>
            <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('workinfo', ' 手当一覧を見る') !!}</span></h2>
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">
            <div class="mokuzi">
              ・有給の交付日
              <br>・特別休暇
              <br>・出産手当
          </div>
            <img src="/images/rakuten_gallery/panda6.png"></div>
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
          <h2 class="el__heading">社割<br><br></h2>
          </div>
          <div class="el__content">
            <div class="el__text">
            <h1 class="el__text_title">社割</h1>
            <h3><br>生産性アップのカギはメリハリ！たまには仕事を離れて、レジャーを楽しもう！</h3>
                  <div class="coupon_index">

                      <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('cafePrime', '  飲食店') !!} </span></h2>
                      <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('moviePrime', '  映画　＆　カラオケ') !!}</span></h2>
                      <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('amusePrime', '  アミューズ') !!}</span></h2>
                      <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('shoppingPrime', '  ショッピング') !!}</span></h2>
                      <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('rakutenPrime', '  社内で使えるサービス') !!}</span></h2>

                  </div>
         　
              </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">
            <div class="mokuzi">
              ・社内サービス
              <br>・映画＆カラオケ
              <br>・飲食店
          </div>
          <img src="/images/rakuten_gallery/panda3.png"></div>
        <div class="el__index-front">
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
          <h2 class="el__heading">支社<br><br>
            </h2>
          </div>
          <div class="el__content">
            <div class="el__text">
              <h1 class="el__text_title">支社</h1>
              <h3><br>意外に知られていない地方支社。楽天クリムゾンハウス以外のオフィスをのぞいてみよう。<br>地方に行くのが楽しみになるかも！</h3>
            
              <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('contents.branch', ' 支社情報を見る') !!}</span></h2>
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">
            <div class="mokuzi">
              ・全国の支社分布
              <br>・周辺情報
              <br>・社食情報
          </div>
          <img src="/images/rakuten_gallery/panda4.png"></div>
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
          <h2 class="el__heading">ゲーム<br><br>
            <!--  <ul><--></-->
            <!--  <li>・楽天クイズ</li>-->
            <!--  <li>・マジカルバナナ</li>-->
            <!--  <li>・シューティング<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ゲーム</li>-->
            <!--  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;etc</li>-->
            <!--</ul>-->
            </h2>
          </div>
          <div class="el__content">
            <div class="el__text">

              <h1 class="el__text_title">
                <img src="images/buttons/alone.png" onclick="image1()" id="i1">     
                <img src="images/buttons/solobutton4.png" onclick="image2()" id="i2">
              
                     
                <img src="images/buttons/shooting.png" onclick="image4()" id="i4">
                <img src="images/buttons/solobutton2.png" onclick="image3()" id="i3">
                <!--<a  href="soloanswer">-->
                  <!--<a href="soloanswer"><img src="images/buttons/solobutton.png" id="i1" border="0"></a></h1>-->
                                   <!--<a href="answer"><img src="images/buttons/solobutton2.png" id="i2" border="0"><a/>-->
                 <!--<a href="banana"><img src="images/buttons/solobutton3.png" id="i3"><a/>-->
                 <!--<a href="match"><img src="images/buttons/solobutton4.png" id="i4"><a/>-->
                  <!--<a/>-->
                  <br>
                Rakuten Family Day 2018への出展が決まった渾身のゲームたち！</h1>
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
        <div class="el__index-back">
          <div class="mokuzi">
              仕事の合間に、<br>ゲームでリフレッシュ！<br>同期と対戦しよう！
          </div>
          <img src="/images/rakuten_gallery/panda.png"></div>
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
          <h2 class="el__heading">ギャラリー<br><br>
            <!--<ul>-->
            <!--  <li>&nbsp;&nbsp;&nbsp;&nbsp;・楽天カフェ</li>-->
            <!--  <li>&nbsp;&nbsp;&nbsp;&nbsp;・ジム</li>-->
            <!--  <li>&nbsp;&nbsp;&nbsp;&nbsp;・楽天パンダ</li>-->
            <!--  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;etc</li>-->
            <!--</ul>-->
            </h2>
          </div>
          <div class="el__content">
            <div class="el__text">
              <h1 class="el__text_title">楽天ギャラリー</h1>
              <p><h3>楽天のおしゃれな写真をラインナップ！<br><br>スライドや資料、広報など使い道はたくさん。あなたにぴったりな写真が見つかるかも。<br><br>楽天プライム会員（入会費10円）ならダウンロードし放題！</p>
  </h3></p>
            
              <br>
              <h2><span class="glyphicon glyphicon-arrow-right">{!! link_to_route('member', ' 楽天ギャラリーを見る') !!}</span></h2>
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">

        <div class="el__index-back">
          <div class="mokuzi">
              &nbsp;&nbsp;きれいな
              <br>&nbsp;&nbsp;&nbsp;写真が満載！
          </div>
 <img src="/images/rakuten_gallery/panda5.png" id="loadpanda"></div>

        <div class="el__index-front">
          <!--<div class="el__index-overlay" data-index="R"><img src="/images/rakuten_gallery/panda.png"></div>-->
        </div>
      </div>
    </div>
  
    
  </div>
  <!-- cont inner end -->
</div>
<div id="chat" style="display:none">
  
@include('chat')
<button><img src="images/buttons/close.png" id="close"></button> 
</div>

<br><br>
<div id = "ribbon2-top">
  <h3>&nbsp;&nbsp;「楽天プライム」とは？&nbsp;&nbsp;</h3>
</div>
  <br><br>
  <div class = "prime_explanation">
  <h3>楽天プライムは、<a class="ddd" >新卒専用の「社内ポータルサイト」</a>です。<br>
  社員をサポートする社内制度や、仕事に役立つチップスなど、楽天にまつわる情報を 楽しく 簡単に 調べることができます。
  <br><br>あなたの<a class="ddd" >ワークライフにワクワクをプラスするコンテンツ</a>が盛りだくさん！
　<br>さぁ、楽天を使い倒せ！
　<br>
　</h3>
  </div>
<br><br><br><br><br><br>
  <div class = "ribbon2">
    <h3>&nbsp;&nbsp;何ができるの？&nbsp;&nbsp;</h3>
  </div>
    <br><br><br><br>
  <div class = "subtitle">
      <h1>社内手当一覧</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>休暇や転勤など、<a class="ddd" >会社の手当</a>はとても気になる！けれど、どこで調べたら良いのか分からない・・・。
      <br>そんな悩みを解決する手当一覧ページ！
    </h3>
  </div>

  <img src="/images/gallery/welfare.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>社員優遇クーポン一覧</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>楽天社員なら知らないと損！<br>飲食店やショッピングモール、アミューズメントで使える<a class="ddd" >社員優遇制度</a>を、分かりやすく紹介。
    <br><br><a class="ddd" >楽天プライム（入会費10円）</a>に登録すると、<br>“社員にとくに使われている” 人気順にクーポンを検索することができます。

    </h3>
  </div>
  <img src="/images/gallery/coupons.JPG">
  <br><br><br><br><br><br><br><br>
  <div class = "subtitle">
      <h1>楽天支社情報</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>意外と知らない<a class="ddd" >支社情報</a>・・・。<br>様々な地域から人が集まった新卒コミュニティは情報の宝庫！
    <br><br><a class="ddd" >楽天プライム（入会費10円）</a>に登録すると、各支社に関する口コミの投稿や閲覧ができます。
    </h3>
  </div>
  <img src="/images/gallery/osakabranch.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>楽天ゲーム</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>ゲームをしながら、楽天に関する知識を積み上げよう！

        <br>楽天で活躍する先輩社員へのインタビューから生まれた<a class="ddd" >「仕事に役立つ楽天クイズ」</a>や、<br>同期同士で気軽に交流しながら遊べる<a class="ddd" >対戦ゲーム</a>をラインナップ！
        <br><br>自分の会社のことをどれくらい知っていますか？<br>自信がない人は今すぐゲームで遊んでみよう！
    </h3>
    <br>
  </div>
  <img src="/images/gallery/rakutengames.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>楽天ギャラリー</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>
        <br>資料やスライド、個人の発信・・・何かとほしくなる<a class="ddd" >楽天のおしゃれな写真</a>をラインナップ！
        <br><br><a class="ddd" >楽天プライム会員（入会費10円）</a>でダウンロードし放題！

    </h3>
    <br>
  </div>
  <img src="/images/gallery/galleryphotos.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>マイページ</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>楽天プライムのコンテンツを利用していくと、<a class="ddd" >「らくプラポイント」</a>が貯まっていきます。
    </h3>
    <br>
  </div>
  <img src="/images/gallery/mypage.JPG">
  <div class = "prime_explanation">
    <br><br>
    <h3>
        <a class="ddd" >「らくプラポイント」</a>をたくさん貯めて
        <br>ブロンズ会員→シルバー会員→ゴールド会員へとランクアップしていこう！
    </h3>
    <br>
  </div>
  <img src="/images/gallery/medals.JPG">
  <br><br><br><br>
  
  <div class = "prime_explanation">
    
    <h3>
        <a class="ddd" >「らくプラポイント」</a>の獲得数は、<a class="ddd" >楽天理解度</a>の高さを証明！
        <br>ポイントをたくさん貯めて、楽天理解度王者へのランクインを目指そう！
    </h3>
    <br>
  </div>
  <img src="/images/gallery/ranking.JPG">
 
 <br><br>
 <div class = 'prime_button'>
  @auth
    <?php
    $prime = \Auth::user()->prime;
            if($prime == 0){
    ?>
    
    
          	  {!! Form::open(['route' => ['welcomePrime']]) !!}
                 <input type="hidden" value="1" name="prime" />
                  {!! Form::submit('楽天プライム会員（入会費１０円）になる', ['class' => 'btn btn-danger  btn-lg btn-block']) !!}
              {!! Form::close() !!}
    <?php
            }
            elseif($prime == 1){
              print '';
                
            }
    ?>
@endauth
<br><br><br><br>
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