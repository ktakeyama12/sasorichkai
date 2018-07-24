<!DOCTYPE html>
<html lang="ja">
    
<title>W3.CSS</title>
<head>
<meta charset="utf-8" /> 
<meta name="viewport"　content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.background{
      position: absolute;
      z-index: -1;   
      width: 100%;
      height: 100%;
      background-image: url('back.jpg');
      background-size: cover;
      opacity: 0.9;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
}

.text{
    color: #00ff00;
}
.explanation{
    color: #00ff00;
    line-height: 120%;
    font-weight: bold;
}

.exSub1{
  display: inline-block;
  width: 400px;
  height: 100px;
  margin: 1em;
  color: #00ff00;
  font-weight: bold;
  line-height: 200%;
}
    
.exSub2{
   color: #00ff00;
    line-height: 50%;
    display: inline-block;
}

.shooting{
    width: 500px;
    height: 300px;
}

/*.howToPlay{*/
/*    width: 1400px;*/
/*    border: 10px solid red;*/
/*    float: center;*/
/*}*/


</style>


</head>
<body>
<div class="background"></div>

<div class="w3-container w3-center w3-animate-bottom">
　<div class="text">
  <h1>シューティングゲームへようこそ！</h1>
  <p>敵を撃ってポイントを稼ごう。</p>
  <img class="shooting" src="images/shooting.gif">
  </div>
  
  <div class="howToPlay">
  <div class="explanation">
      <h2>使うボタン</h2>
      <h2>・右下にある矢印ボタン</h2>
      <h2>・スペースキー</h2>
      
  </div>
  
  <div class="exSub1">
      <h2>←　→で左右に移動</h2>
  </div>
  
  
  <div class="exSub1">
      <h2>↑　↓で上下に移動</h2>
  </div>
  
  <div class="exSub1">
      <h2>スペースキーでレーザー発射</h2>
  </div>
  
  </div>
  
  
  
  <div class='start'>
      <button onclick="newGame()">ゲームを始める</button>
  </div>
  
  
</div>

</body>
<script>
function newGame(){
    window.location.href = "shootingGame";
}
    
    
</script>

</html>