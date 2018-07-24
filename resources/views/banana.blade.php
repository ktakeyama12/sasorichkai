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
    <link href="css/nav.css" rel="stylesheet" type="text/css" />
    
    
  
</head>

<body>
    <div id="container-example">
          <div class='strip colour-4'>
            <a class="" onclick="history.back()">戻る</a>
          </div>
        </div>
    <div class="main">
    <div class="main_background-image"></div>    
        <h1>リアルタイムマジカルバナナ</h1>
        <br>
        <div id="bananashow"></div>と言ったら
                <div>
                    
                <input id="name" placeholder="名前">
                <input id="message" placeholder="メッセージ">
                    <button id="send">投稿</button>
                </div>
                <ul id="messages">
                </ul>
            
            <!--<div class="panel-default">-->
            <!--    <div class="panel-heading">-->
            <!--    </div>-->
            <!--    <div id="scroller" class="panel-body">-->
            <!--        <ul id='messages'>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--    <div class="panel-footer">-->
            <!--        <input type='text' class="form-control" id="nameInput" placeholder="ユーザー名を入力してください">-->
            <!--    </div>-->
            <!--    <div class="panel-footer">-->
            <!--        <input type='text' class="form-control" id="messageInput" placeholder="メッセージ内容を入力してください">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div>-->
            <!--    <ul id='last'></ul>-->
        
                    <!--<div id='last'></div>-->
            <!--        <div id='last'></div>と言ったら-->
            <!--</div>-->
            <div class="js" ><script src="js/banana.js"></script></div>
         </div>   
        </body>