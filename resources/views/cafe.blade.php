<!DOCTYPE html>
<html lang="ja" >
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Rakuten Gallery</title>

    <!-- add styles -->
    <link href="css/least.min.2.css" rel="stylesheet" type="text/css" />
    <link href="css/main.2.css" rel="stylesheet" type="text/css" />

    <!-- add scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/least.min.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    
</head>
<body>
    <header>
        <h2>Rakuten Gallery</h2>
    </header>

    <!--  least.js gallery -->
    <section>
        <ul id="gallery">
            <li id="fullPreview"></li>

            <li>
                <a href="images/gallery/p1.jpg"></a>
                <img data-original="images/gallery/trip.jpg" src="img/effects/white.gif" alt="Photo 1" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>i Beer</h3></li>
                        <li><p>rise</p></li>
                        <li><p>10% OFF</p></li>
                    </ul>
                </div>
                <div class="projectInfo">Drinking</div>
            </li>
            <li>
                <a href="images/gallery/p2.jpg"></a>
                <img data-original="images/gallery/haircut.jpg" src="img/effects/white.gif" alt="Photo 2" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>McDonald's</h3></li>
                        <li><p>rise</p></li>
                        <li><p>ポテト150円</p></li>
                    </ul>
                </div>
                <div class="projectInfo">McDonald's</div>
            </li>
            <li>
                <a href="images/gallery/p3.jpg"></a>
                <img data-original="images//gallery/gym.jpg" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>CINNABON</h3></li>
                        <li><p>rise</p></li>
                        <li><p>10% OFF</p></li>
                    </ul>
                </div>
                <div class="projectInfo">CINNABON</div>
            </li>
            
            <li>
                <a href="images/gallery/p3.jpg"></a>
                <img data-original="images//gallery/gym.jpg" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>KUAAINA</h3></li>
                        <li><p>rise</p></li>
                        <li><p>10% OFF</p></li>
                    </ul>
                </div>
                <div class="projectInfo">KUAAINA</div>
            </li>
            
        </ul>
    </section>


</body>
</html>