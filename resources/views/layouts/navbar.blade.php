<head>
    <meta charset="UTF-8">
    <title>Welcome to Rakuten</title>
    <link rel="stylesheet" href="/css/nav.css">
</head>

<body>


<ul id="menu">
    <li><a id="home" class="nao" href="/">ホーム</a></li>
    <li><a id="oto" class="nao" href="/rpoint">らくプラポイントとは？</a></li>
    @auth
    <li><a id="mypage" class="nao" href="/users.show">マイページ</a></li>    
    @else
    <li><a id="login" class="nao" href="login">マイページ</a></li>
    @endauth

    <li><a id="oto" class="nao" href="/chat">チャット</a></li>

    @auth
    <li><a id="logout" class="nao" href="logout">ログアウト</a></li>
    @else
    <li><a id="login" class="nao" href="login">ログイン/会員登録</a></li>
    @endauth
</ul>

</body>