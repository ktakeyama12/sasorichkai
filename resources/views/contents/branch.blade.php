
<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Rakuten Branches</title>

        <!-- Bootstrap CSS-->
        <!-- jQuery -->
        <!--<script type="text/javascript" src="js/gallery.js"></script>-->
        <!--<link rel="stylesheet" type="text/css" href="style.css">-->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/branch.css" rel="stylesheet" type="text/css"> 
        <link href="css/nav.css" rel="stylesheet" type="text/css"> 
        
      
</head>
    <body>
        <div id="loader"><img src="images/loading/panda.gif" alt="Loading..." /><br><center>Now Loading...</center></div>
        <div id="fade"></div>
        <div id="container" style="display:none">
            

            <div id="container-example">
              <!--<div class='strip colour-4'>-->
              <!--  <a class="" onclick="history.back()">戻る</a>-->
              <!--</div>-->
              <div class='strip colour-4'>
                <a class="" href="/">戻る</a>
              </div>
            </div>
        
            <div class="main">
                <div id="setsumei">
                    <p style="background-color: #ffffff">
                    <font color="black"><font size="4"><b>楽天パンダを行きたいところにドラッグしてね！</b></font>
                    </style>
                </div>
                <div id="panda">
                    <img src="images/games/pandatravel.gif" class="resize">
                </div>    
                <div class="main_background-image"></div>
                <div id="map">
                    <img class="japan" src="/images/japan.png">
                </div>
                <div class = "branches_index">
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
                
            </div>
    
            <div id="results"></div>
            
        </div>
        <script src="js/branch2.js"></script>
    </body>
</html>

