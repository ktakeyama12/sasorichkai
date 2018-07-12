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
    <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
    
</head>

<body>
    <div class="main">
        <div class="main_background-image"></div>
            <div id="ready2">
                <div class="box box1 shadow1">
                    <h3>
                        <div id="hello"></div>
                    </h3>
                </div>
                <br>
                <h5>
                    <button id="ready">全員の準備ができたら<br>ゲームを始める</button>
                </h5>
                <div class="box box2 shadow2">
                    <h3>
                        入室しているユーザー：
                        <div id="score2"></div>
                    </h3>
                </div>
            </div>
            <div id="show">
                <div id="quizzes"></div>
                <!--USERNAME:-->
                <!--<input type="text" name="name" id="name" value="" />-->
                <div class="wrap">
                    <div class="box box1 shadow1">
                        <h3>
                            <div id="bangou"></div>
                            <div id="mondaidesu"></div>
                        </h3>
                    </div>
                    <div class="box box2 shadow2">
                        <h3>
                            答え:
                            <input type="text" name="kotae" id="kotae" value="" />
                            <button id="send">送信</button>
                            <div id="yesno"></div>
                        </h3>
                    </div>
                    
                    <br>
                    <br>
                    <div class="box box3 shadow3">  
                        <h3>
                            <div id="kaitousha"></div>
                            <div id="answer"></div>
                            <br>
                            点数：
                            <ul id="score"></ul>
                        </h3>
                    </div>
                </div>
            </div>
            <div id="show2">
                <div class="wrap">
                    <div class="box box1 shadow1">  
                        <h3>
                            まずは↓にニックネームを入れて、入室してね<br>
                            <input type="text" name="username" id="username" value="" />
                                </h3>
                    </div>
                    <h4>
                        <button id="usertouroku">入室</button>
                    </h4>    
                            <br><br><br>
                    <h5>
                        <button id="reset">全員強制退出（ゲームをやり直す）</button>
                    </h5>
                </div>
                
            </div>
            <div id="ingame">
                                    <div class="box box1 shadow1">  
                        <h3>
                ゲームが進行中です

                    </div>
                </h3>
                                   <h5>
                        <button id="reset2">全員強制退出（ゲームをやり直す）</button>
                    </h5>
                <br>
            </div>
    </div>
    
    
    <script src="js/answer.js"></script>
    
    
</body>