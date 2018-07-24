<head>
    <meta charset="UTF-8">
    <title>R point</title>
    <link rel="stylesheet" type="text/css" href="css/rpoint.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
@include('layouts.navbar')
</head>
    
<body>
   <div id="container-example">
              <div class='strip colour-4'>
                <a class="" href="/">戻る</a>
              </div>
            </div>

<div class="slider">
  <input class="slider__nav" type="radio" name="slider" title="slide1" checked="checked"/>
  <input class="slider__nav" type="radio" name="slider" title="slide2"/>
  <input class="slider__nav" type="radio" name="slider" title="slide3"/>
  
  <div class="slider__inner">
    <div class="slider__contents"><i><img src="images/rakuten_circle.jpg" alt="rakuten circle" /></i>
      <h2 class="slider__caption">らくプラポイントへようこそ！</h2>
      <p class="slider__txt">配属後どこに行っても<br>困らないように<br>楽天理解度を深めておいて<br>損はない！<br><br>楽天プライムポイントで<br>楽天理解度を図りましょう！<br></p>
    </div>
    <div class="slider__contents"><i><img src="images/quality.png" alt="rakuten circle" /></i>
      <h2 class="slider__caption">らくプラポイントの魅力</h2>
      <p class="slider__txt">ポイントを貯めると、<br>あなたのランクが上がります。<br>たくさんポイントを貯めて<br>ゴールド会員を目指そう！<br><br>ステータスはマイページで<br>随時チェック！
      <div class="link">{!! link_to_route('users.show', '今すぐポイント、ステータスを確認する！') !!}</div></p>
    </div>
    <div class="slider__contents"><i><img src="images/games.png" alt="rakuten circle" /></i>
      <h2 class="slider__caption">ポイントの貯め方</h2>
      <p class="slider__txt">ポイントの貯め方はとっても簡単！楽天プライムのコンテンツを購読したり、ゲームやクイズで遊ぶだけ！<br><br>他にもいろいろな方法でどんどん貯められます。
      <div class="link">{!! link_to_route('shooting', '今すぐプレイしてポイントを貯める！') !!}</div></p>
    </div>
    
  </div>
</div>

</body>