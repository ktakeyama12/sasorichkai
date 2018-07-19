<!DOCTYPE html>
<html lang="ja" >
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Rakuten Gallery</title>
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Bootstrap JavaScript-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    
    <!-- add styles -->
    <link href="css/least.min.2.css" rel="stylesheet" type="text/css" />
    <link href="css/main.2.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />

    <!-- add scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/least.min.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    
    
</head>
<body>
    
    <header>
        <h2>Rakuten services</h2>
    </header>

    <!--  least.js gallery -->
    <section>
        <div id="container-example">
          <div class='strip colour-4'>
            <a class="" onclick="history.back()">戻る</a>
          </div>
        </div>
        
        <ul id="gallery">
            <li id="fullPreview"></li>

            <li>
                <a href="images/gallery/p1.jpg"></a>
                <img data-original="images/gallery/trip.jpg" src="img/effects/white.gif" alt="Photo 1" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>Rakuten Travel</h3></li>
                        <li><p>Relo</p></li>
                        <li><p1>3,000円OFF</p1></li>
                    </ul>
                </div>
                <div class="projectInfo">Travel</div>
            </li>
            <li>
                <a href="images/gallery/p2.jpg"></a>
                <img data-original="images/gallery/haircut.jpg" src="img/effects/white.gif" alt="Photo 2" />
                
                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        
                        <li><h3>Rakuten Hair Salon</h3></li>
                        <li><p>Relo</p></li>
                        <li><p1>500円OFF</p1></li>
                        
                    </ul>
                </div>
                <div class="projectInfo">Hair Salon</div>
            </li>
            <li>
                <a href="images/gallery/p3.jpg"></a>
                <img data-original="images//gallery/gym.jpg" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>9F Fitness</h3></li>
                        <li><p>Relo</p></li>
                        <li><p1>500円OFF</p1></li>
                    </ul>
                </div>
                <div class="projectInfo">Fitness</div>
            </li>
            
        </ul>
    </section>


</body>
</html>