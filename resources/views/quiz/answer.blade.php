<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sasorich KAI２</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    
    <!--Chat機能 Firebase接続-->
    <!--<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>-->
    <!--<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase-firestore.js"></script>-->
    
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>

    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--最初の画面-->
    <!--<link rel="stylesheet" href="css/index.css">-->
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
</head>

<body>
            <div id="hello"></div>
            <br>
            <div id="show">
                <div id="quizzes"></div>
                <!--USERNAME:-->
                <!--<input type="text" name="name" id="name" value="" />-->
                <div id="bangou"></div>
                <div id="mondaidesu"></div>
                <br>
                答え:
                <input type="text" name="kotae" id="kotae" value="" />
                <button id="send">投稿</button>
                <div id="yesno"></div>
                ====

                <div id="kaitousha"></div>
                <br>
                <ul id="score"></div>
            </div>
            
            <div id="show2">
                まずは↓にニックネームを入れて、登録してね<br>
                <input type="text" name="username" id="username" value="" />
                <button id="usertouroku">登録</button>
                <br><br><br>
                <button id="reset">リセット（ゲームをやり直す）</button>
            </div>
    <script src="js/answer.js"></script>
    
    
</body>