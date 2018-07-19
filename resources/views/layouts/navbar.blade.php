
<head><meta charset="UTF-8">
    <title>Welcome to Rakuten</title>
    <link rel="stylesheet" href="/css/nav.css">
   
</head>
<body>

<!--<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>-->
    
<!--    <a href="{{ url('/home') }}" class="btn">Home</a>-->
<!--    <a href="#" class="btn">R-Chat</a>-->
<!--    <a href="#" class="btn">User</a>-->
<!--    <a href="#" class="btn">Contact</a>-->


<ul id="menu">
    <li><a class="nao" href="/home">ホーム</a></li>
    <li><a class="nao" href="/users.show">マイページ</a></li>
    <li><a class="nao" href="#">お問い合わせ</a></li>
    @auth
    <li><a class="nao" href="logout">ログアウト</a></li>
    @else
    <li><a class="nao" href="login">ログイン/会員登録</a></li>
    @endauth
</ul>

</body>