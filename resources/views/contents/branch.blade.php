
<!DOCTYPE html>
<html>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Rakuten Branchs</title>

        <!-- Bootstrap CSS-->
        <!-- jQuery -->
        <!--<script type="text/javascript" src="js/gallery.js"></script>-->
        <!--<link rel="stylesheet" type="text/css" href="style.css">-->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/branch.css" rel="stylesheet" type="text/css">   
</head>
    <body>
        <button id="button" class="btn btn-danger" type="button" onclick="history.back()"  >戻る</button>
        <div class="main">
            
            <div class="main_background-image"></div>
            
            <img class="japan" src="/images/japan.png">
            
            <ul font-family="Noto Sans Japanese" >
                <li>①札幌支社</li>
                <li>②盛岡オフィス</li>
                <li>③仙台支社</li>
                <li>④新潟支社</li>
                <li>⑤さいたま支社</li>
                {!! link_to_route('contents.tokyo', '⑥楽天クリムゾンハウス') !!}
                <li>⑦千葉支社</li>
                <li>⑧横浜支社</li>
                <li>⑨松本オフィス</li>
                <li>⑩静岡支社</li>
                <li>⑪金沢支社</li>
                <li>⑫名古屋支社</li>
                <li>⑬京都支社</li>
                {!! link_to_route('contents.osaka', '⑭大阪支社') !!}
                <li>⑮神戸支社</li>
                <li>⑯広島支社</li>
                <li>⑰松山支社</li>
                {!! link_to_route('contents.fukuoka', '⑱福岡支社') !!}
                <li>⑲鹿児島支社</li>
                <li>⑳沖縄支社</li>
            </ul>
            
        </div>
        
    </body>
</html>

