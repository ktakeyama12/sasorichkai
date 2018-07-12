
<!DOCTYPE html>
<html>
<head>
<div class="all">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Rakuten Branchs</title>

        <!-- Bootstrap CSS-->
        <link href="css/branch.css" rel="stylesheet" type="text/css">        <!-- jQuery -->
        <script type="text/javascript" src="js/gallery.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        
        
        <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
        
</head>
    <body>
        <div class="main">
            <div class="main_background-image"></div>
            
            <svg viewBox="0 0 470 110" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                 <path id="path">
                    <animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="6.8s" begin="0s" repeatCount="indefinite"/>
                </path>
                <text font-size="50.5" fill='hsl(0, 72%, 55%)'>
                <textPath xlink:href="#path"  >  Rakuten Branches
                </textPath>
            </svg>
                    
                    
                    <div class="Iam">
                    <p>Which branch do you like... </p>
                    <b>
                    
                    <div class="innerIam">
                        楽天クリムゾンハウス？<br /> 
                        千葉支社？<br />
                        大阪支社？<br />
                        福岡支社？<br />
                        SCROLL　DOWN！！！
                    
                    </div>
                    </b>
                    </div>
                    
                                
                
            </text>
    
        
            <img class="japan" src="/images/japan.png">
            
            
            <ul font-family="Noto Sans Japanese" class='kk'>
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


</body>

</html>

