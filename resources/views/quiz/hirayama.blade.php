<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/newquiz.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>-->
     <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/hirayama.js"></script>
</head>
<body>
    <!--<div id="entry">-->
    <!--    <input type="text" name="name" id="name" value="" />-->
    <!--    <button id="nyuushitsu" onclick="nyuushitsu()">送信</button>-->
    <!--    <div id="cantenter"></div>-->
    <!--    <div id="usercount"></div>-->
    <!--</div>-->

    <div id="game">
        <br><br>
        <div id="results"  style="display: none"></div>
        <div id="results1"  style="display: none"></div>
        <div id="leftPos"  style="display: none"></div>
        <!--Time left:-->
        <div id="results2"></div>
        <!--Question:-->
        <div id="quizData"></div>
        <!--<div id="prevAns"></div>-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3" style="background-color:lavender;">
                <div id="answerData1"></div>
            </div>
            <div class="col-sm-3" style="background-color:lavenderblush;">
                <div id="answerData2"></div>
            </div>
            <div class="col-sm-3" style="background-color:lavender;">
                <div id="answerData3"></div>
            </div>
            <div class="col-sm-3" style="background-color:lavenderblush;">
                <div id="answerData4"></div>
            </div>
        </div>
        <div id="answerCorrect"  style="display: none"></div>
        <div id="seikai"  style="display: none"></div>
        <div id="seikaiorfuseikai"></div>
        Your Score:
        <div id="score"></div>
        <img src="images/hirayama.png" id="user1">
        <br>
        <font size=30>平山さんをドラッグ！</font>
        <!--<img src="images/newquiz/1.jpg" id="user1" style="display: none">-->
        <!--<img src="images/newquiz/2.jpg" id="user2" style="display: none">-->
        <!--<img src="images/newquiz/3.jpg" id="user3" style="display: none">-->
        <!--<img src="images/newquiz/4.jpg" id="user4" style="display: none">-->
        </div>
    </div>
    <div id="finish" style="display: none">
    <div id="finalscore1">おわり<br>あなたのスコアは：</div>
    <div id="finalscore"></div>
    </div>
    <!--<div id="ready" style="display: none">-->
    <!--    <div id="welcome"></div>-->
    <!--    <button id="ready" onclick="ready()">READY</button>-->
    <!--    <button id="start" onclick="start()">start</button>-->
    <!--    <div id="checkstart"></div>-->
    <!--    <div id="name1">w</div>-->
    <!--    <div id="ready1">w</div>-->
    <!--    <div id="name2"></div>-->
    <!--    <div id="ready2"></div>-->
    <!--    <div id="name3"></div>-->
    <!--    <div id="ready3"></div>-->
    <!--    <div id="name4"></div>-->
    <!--    <div id="ready4"></div>-->
    <!--</div>-->
    <!--<button id="reset" onclick="reset()">RESET</button>-->
    <!--<div id="usernumber"></div>-->
    <!--<div id="startcheck"></div>-->
    <!--<div id="dwd">www</div>-->
</body>
</html>