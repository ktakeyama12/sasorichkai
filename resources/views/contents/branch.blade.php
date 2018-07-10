<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bootstrap Template</title>

        <!-- Bootstrap CSS-->
        <link href="css/branch.css" rel="stylesheet" type="text/css">        <!-- jQuery -->
       
    </head>
    <body>
        
        <h1>全国の楽天</h1>
        
         <div>    
        <p>
            <img class="japan" src="/images/japan.jpg">
        </p>
        </div>
       
            <div class = "entry-content">
            <ol>
                <li>札幌支社</li>
                <li>仙台支社</li>
                <li>盛岡オフィス</li>
                <li>新潟支社</li>
                <li>さいたま支社</li>
                <li>{!! link_to_route('contents.tokyo', '楽天クリムゾンハウス') !!}</li>
                <li>千葉支社</li>
                <li>横浜支社</li>
                <li>松本オフィス</li>
                <li>静岡支社</li>
                <li>名古屋支社</li>
                <li>金沢支社</li>
                <li>京都支社</li>
                <li>{!! link_to_route('contents.osaka', '大阪支社') !!}</li>
                <li>神戸支社</li>
                <li>広島支社</li>
                <li>松山支社</li>
                <li>{!! link_to_route('contents.fukuoka', '福岡支社') !!}</li>
                <li>鹿児島支社</li>
                <li>沖縄支社</li>
                
        
            </ol>
            </div>
            
            
        
    </body>
</html>