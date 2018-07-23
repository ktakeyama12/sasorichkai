<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="newquiz.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--<script src="https://www.gstatic.com/firebasejs/5.3.0/firebase.js"></script>-->
     <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="newquiz.js"></script>
</head>
<body>
    <div id="entry">
        <input type="text" name="name" id="name" value="" />
        <button id="send">送信</button>
    </div>
    <div id="ready">
        
    </div>
    <div id="game">
        <div id="results"></div>
        <div id="results1"></div>
        <div id="leftPos"></div>
        Time left:
        <div id="results2"></div>
        Question:
        <div id="quizData"></div>
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
            <div class="col-sm-3" style="background-color:lavender;">
                <div id="answerData4"></div>
            </div>
        </div>
        <div id="answerCorrect"></div>
        <div id="seikai"></div>
        <div id="seikaiorfuseikai"></div>
        Your Score:
        <div id="score"></div>
        <div id="draggable">
            <img src="rich.jpg">
        </div>
    </div>
</body>
</html>