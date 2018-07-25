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
    <!--<link rel="stylesheet" href="css/index.css">-->
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chatwindow.css">
    
    @include('layouts.navbar')
   
</head>

<body>
    <div class="panel-default">
        <div class="panel-heading">
            同期トーーーーク！
            <br>
            自由にチャットしよう
        </div>
        <div id="scroller" class="panel-body">
            <ul id='messages'>
            </ul>
        </div>
        <div class="panel-footer1">
            <input type='text' class="form-control" id="nameInput" placeholder="ユーザー名を入力してください">
        </div>
        <div class="panel-footer1">
            <input type='text' class="form-control" id="messageInput" placeholder="メッセージ内容を入力してください">
        </div>
    </div>
    <script src="js/chat.js"></script>
</body>
