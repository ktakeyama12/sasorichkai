<!DOCTYPE html>
<!--
!質問の回答をもとに三つのブランチでどこがあっているかを診断するゲーム

$userに質問することができる。
$userが回答することができる。
$ユーザーの回答を可視化できる
$質問を一覧で表示することができる。
$質問に答えることができる
$答えた質問のスコアをストアすることができる。
$質問を切り替えることができる。
$質問の回答をもとに大阪、東京、福岡のスコアが加算される。
$その加算されたスコアが可視化される。
ユーザーが面白いと思う質問ゲームのコンテンツを探しに行ってください。
回答をストアすることができる
ストアされている回答をもとにどのカテゴリーに入るのか判断できる。
判断結果を表示できる。
-->

<html>
<head>
<meta charset="utf-8">
<style>
#score{
        color: black;
        font-size: 18px;
        position: absolute;
}


.hero-unit__background-image {
  position: absolute;
  z-index: -1;   
  width: 100%;
  height: 100%;
  background-image: url('back.jpg');
  background-size: cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
    
body{
    text-align: center;
}
</style>
    
    
</head>

<body>

<button onclick="showQs()">Answer the questions!</button>    

<div id='Qs'></div>
<form id="target">
    <input type="radio" name="choice" value="yes"> YES!
    <input type="radio" name="choice" value="no"> No.
</form>
<button onclick="submitAnswer()">Submit Answer</button> 

<div id='osaka'></div>
<button onclick="osakaShokan()">Try it</button>
<div id="IMG"></div>
<div id='tokyo'></div>
<div id='fukuoka'></div>


<div id = 'score'></div>
<br>
<button onclick="reload()">next question</button> 
<br>

<div class="hero-unit">
  <div class="hero-unit__background-image">
  </div>
</div>

</body>

<script>
var qs = ['あなたは赤い部屋が好きですか？','食にこだわる?','田舎好き?','スポーツ好き?','自分が明るい性格だと思う?','可愛い子好き？'];
var tokyo=0;
var osaka=0;
var fukuoka=0;
var i=0;

var score =0;
 
 
    
document.getElementById('Qs').innerHTML = qs[i];
var osakaElement = document.getElementById('osaka');
osakaElement.innerHTML = '大阪でやんす'　+ osaka;
var tokyoElement = document.getElementById('tokyo');
tokyoElement.innerHTML = 'こちらは東京です'　+ tokyo;
var fukuokaElement = document.getElementById('fukuoka');
fukuokaElement.innerHTML = '福岡いくばい'　+ fukuoka;

document.getElementById('test').innerHTML = tests[Math.floor(Math.random() * tests.length)];

function submitAnswer() {
    i++;
    if(i==6){
        alert('you have answered all of the questions! thank you');
    }
    console.log(i);
    var element = document.getElementsByName("choice");
    if( element[0].checked){
      score+=100;
      osaka+=100;
      tokyo-=100;
      fukuoka+=3*4;
      var scoreElement = document.getElementById('score');
    　scoreElement.innerHTML = 'SCORE: ' + score;
    　var osakaElement = document.getElementById('osaka');
    osakaElement.innerHTML = '大阪でやんす'　+ osaka;
    var tokyoElement = document.getElementById('tokyo');
    tokyoElement.innerHTML = 'こちらは東京です'　+ tokyo;
    var fukuokaElement = document.getElementById('fukuoka');
    fukuokaElement.innerHTML = '福岡いくばい'　+ fukuoka;
    　console.log(score);
    }
    document.getElementById('Qs').innerHTML = qs[i];

  
  console.log(score+"this is outside of if");
  //location.reload();
}

function showQs(){
    var qs = ['あなたは赤い部屋が好きですか？','食にこだわる?','田舎好き?','スポーツ好き?','自分が明るい性格だと思う?','可愛い子好き？'];
    qs.toString();
    document.getElementById("Qs").innerHTML = qs;
}

function reload(){
    location.reload();
}

function test(){
    console.log('you are in the test() function');
    var i;
    for(i=0;i<tests.length;i++){
        console.log(i);
        if(i == 9){
            console.log('that is not possible');
        }
        document.getElementById('test').innerHTML = tests[Math.floor(Math.random() * tests.length)];
        
    }
}

function osakaShokan() {
    if(osaka<=300){
        var x = document.createElement("IMG");
        x.setAttribute("src", "almost.gif");
        x.setAttribute("width", "100");
        x.setAttribute("height", "100");
        x.setAttribute("alt", "Forres Gump alomost there");
        document.body.appendChild(x);
    }
    if(osaka>=300 && osaka<=600){
        var x = document.createElement("IMG");
        x.setAttribute("src", "goal.gif");
        x.setAttribute("width", "100");
        x.setAttribute("height", "100");
        x.setAttribute("alt", "new year");
        document.body.appendChild(x);
        
    }
}




</script>
    
    
    
</html>