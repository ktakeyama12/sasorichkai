<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bootstrap Template</title>

        <!-- Bootstrap CSS-->
        <link href="css/branch.css" rel="stylesheet" type="text/css">        <!-- jQuery -->
        <script type="text/javascript" src="js/branch.js"></script>
    </head>
    <body>
        
        <div>
            <p><a href="/branch">
                RAKUTEN &nbsp; &nbsp; BRANCHES
             </a></p>
        </div>
        
        <br>
        <br>
        
        <p>
            <img class="japan" src="/images/japan.jpg">
        </p>
            
            <ul>
                <li>①札幌支社</li>
                <li>②仙台支社</li>
                <li>③盛岡オフィス</li>
                <li>④新潟支社</li>
                <li>⑤さいたま支社</li>
                {!! link_to_route('contents.tokyo', '⑥楽天クリムゾンハウス') !!}
                <li>⑦千葉支社</li>
                <li>⑧横浜支社</li>
                <li>⑨松本オフィス</li>
                <li>⑩静岡支社</li>
                <li>⑪名古屋支社</li>
                <li>⑫金沢支社</li>
                <li>⑬京都支社</li>
                {!! link_to_route('contents.osaka', '⑭大阪支社') !!}
                <li>⑮神戸支社</li>
                <li>⑯広島支社</li>
                <li>⑰松山支社</li>
                {!! link_to_route('contents.fukuoka', '⑱福岡支社') !!}
                <li>⑲鹿児島支社</li>
                <li>⑳沖縄支社</li>
                
        
            </ul>
        <div id="container">
  
</div>
    
    </body>
</html>
