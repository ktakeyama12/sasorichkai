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
    <link rel="stylesheet" href="css/index3.css">
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    
    @include('layouts.navbar')
   
</head>


<div class="whole">
 
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
  <div class = "subtitle" >
      <h1>社内手当一覧</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>休暇や転勤など、<a class="ddd" href="workinfo">会社の手当</a>はとても気になる！けれど、どこで調べたら良いのか分からない・・・。
      <br>そんな悩みを解決する手当一覧ページ！
    </h3>
  </div>

  <img src="/images/gallery/welfare.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>社員優遇クーポン一覧</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>楽天社員なら知らないと損！<br>飲食店やショッピングモール、アミューズメントで使える<a class="ddd" href="cafe">社員優遇制度</a>を、分かりやすく紹介。
    <br><br><a class="ddd" href="/">楽天プライム（入会費10円）</a>に登録すると、<br>“社員にとくに使われている” 人気順にクーポンを検索することができます。

    </h3>
  </div>
  <img src="/images/gallery/coupons.JPG">
  <br><br><br><br><br><br><br><br>
  <div class = "subtitle">
      <h1>楽天支社情報</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>意外と知らない<a class="ddd" href="contents.branch">支社情報</a>・・・。<br>様々な地域から人が集まった新卒コミュニティは情報の宝庫！
    <br><br><a class="ddd" href="/" >楽天プライム（入会費10円）</a>に登録すると、各支社に関する口コミの投稿や閲覧ができます。
    </h3>
  </div>
  <img src="/images/gallery/osakabranch.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>楽天ゲーム</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>ゲームをしながら、楽天に関する知識を積み上げよう！

        <br>楽天で活躍する先輩社員へのインタビューから生まれた<a class="ddd" href="game">「仕事に役立つ楽天クイズ」</a>や、<br>同期同士で気軽に交流しながら遊べる<a class="ddd" href="answer">対戦ゲーム</a>をラインナップ！
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
        <br>資料やスライド、個人の発信・・・何かとほしくなる<a class="ddd" href="member">楽天のおしゃれな写真</a>をラインナップ！
        <br><br><a class="ddd" href="/">楽天プライム会員（入会費10円）</a>でダウンロードし放題！

    </h3>
    <br>
  </div>
  <img src="/images/gallery/galleryphotos.JPG">
  <br><br><br><br><br><br><br><br>
  
  <div class = "subtitle">
      <h1>マイページ</h1>
  </div>
  <div class = "prime_explanation">
    
    <h3>楽天プライムのコンテンツを利用していくと、<a class="ddd" href="/rpoint">「らくプラポイント」</a>が貯まっていきます。
    </h3>
    <br>
  </div>
  <img src="/images/gallery/mypage.JPG">
  <div class = "prime_explanation">
    <br><br>
    <h3>
        <a class="ddd" href="/rpoint">「らくプラポイント」</a>をたくさん貯めて
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

</div>