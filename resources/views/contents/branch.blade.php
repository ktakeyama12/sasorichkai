
<!DOCTYPE html>
<html>
<head>
<style>
    body {
    background: url('https://ihatetomatoes.net/assets/icon-background.png') no-repeat center center;
    background-attachment: fixed;
    background-size: cover;
    color: #909090;
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    height: 2000px;
}

a {
    color: #fff; 
    border-bottom: 1px #fff dotted;
    text-decoration: none;
}
a:hover {border-bottom: 1px #fff solid;}

#page-content {
    width: 80%;
    margin: 0 auto;
    max-width: 500px;
}
h1, h2, h3 {
    color: #efefef;
}
#intro {
    font-size: 18px;
    line-height: 24px;
}
    #intro strong {
        color: #fff;
    }
#gallery {
    list-style: none;
    margin: 0;
    padding: 0;
}
    #gallery li {
        float: left;
        margin-right: 10px;
    }
    #gallery li img {
      width: 100px;
      height: 100px;
      display: block;
    }
.highlight {
    color: #ebebeb;
    background-color: rgba(255,255,255,0.2);
    padding: 0 5px;
}

#windowWTxt,
#topOffsetTxt {
  color: #fff;
  font-weight: bold;
}

/*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */

.clearfix:before,
.clearfix:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.clearfix:after {
    clear: both;
}

/*
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */

.clearfix {
    *zoom: 1;
}
</style>
    
    
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
                <text font-size="50" fill='hsl(0, 72%, 55%)'>
                <textPath xlink:href="#path"  >  Rakuten Branches
                </textPath>
            </svg>
                    
                    
                   
                    
                                
                
            </text>
    
    
    <div class="sample-box-2">  </div>
     
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

