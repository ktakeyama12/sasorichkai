<!DOCTYPE html>
<html lang="ja" >
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Shopping</title>

    <!-- add styles -->
    <link href="css/least.min.2.css" rel="stylesheet" type="text/css" />
    <link href="css/main.2.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />
    
    <link href="css/nav.css" rel="stylesheet" type="text/css" />

    <!-- add scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/leastprime.min.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    
</head>
<body>
    <header>
        <h2>Shopping<div class="text">人気度ランキング</div></h2></h2>
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
                <a href="https://www.google.co.jp/search?q=john+masters+organics&rlz=1C1GGRV_enJP791JP792&oq=john+masters+organics&aqs=chrome..69i57j0l5.3260j0j7&sourceid=chrome&ie=UTF-8"></a>
                
                <img data-original="images//gallery/rank/john.png" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>1位：john masters organics</h3></li>
                        <li><p>Relo</p></li>
                        <li><h3>10～15% off</h3></li>
                    </ul>
                </div>
                
                <!--<a href="images/gallery/h3.jpg"></a>-->
                <!--<img data-original="images/gallery/drinking.jpg" src="img/effects/white.gif" alt="Photo 1" />-->

                <!--<div class="overLayer"></div>-->
                <!--<div class="infoLayer">-->
                <!--    <ul>-->
                <!--        <li><h3>i Beer</h3></li>-->
                <!--        <li><p>rise</p></li>-->
                <!--        <li><h3>10% OFF</h3></li>-->
                <!--    </ul>-->
                <!--</div>-->
                <div class="projectInfo">Drinking</div>
            </li>
            <li>
                <a href="https://www.google.co.jp/search?q=%E9%AB%98%E5%B3%B6%E5%B1%8B&rlz=1C1GGRV_enJP791JP792&oq=%E9%AB%98%E5%B3%B6%E5%B1%8B&aqs=chrome..69i57j0l5.2526j0j7&sourceid=chrome&ie=UTF-8"></a>
                
                <img data-original="images//gallery/rank/taka.png" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>2位：高島屋</h3></li>
                        <li><p>RELO</p></li>
                        <li><h3>5% off(対象店舗限定)</h3></li>
                    </ul>
                </div>
                <!--<img data-original="images/gallery/potato.jpg" src="img/effects/white.gif" alt="Photo 2" />-->

                <!--<div class="overLayer"></div>-->
                <!--<div class="infoLayer">-->
                <!--    <ul>-->
                <!--        <li><h3>McDonald's</h3></li>-->
                <!--        <li><p>rise</p></li>-->
                <!--        <li><h3>ポテト150円</h3></li>-->
                <!--    </ul>-->
                <!--</div>-->
                <div class="projectInfo">McDonald's</div>
            </li>
            <li>
                <a href="https://www.google.co.jp/search?rlz=1C1GGRV_enJP791JP792&ei=h3xRW_GpNsrJ0ASGu7qQCw&q=L%27OCCITANE&oq=L%27OCCITANE&gs_l=psy-ab.3..0l8.16320.17542.0.19110.5.4.0.0.0.0.95.255.3.3.0....0...1.1.64.psy-ab..3.2.180...0i67k1j0i131k1.0.YHkPw0-lFK8"></a>
                <img data-original="images//gallery/rank/loc.png" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>3位：L'OCCITANE</h3></li>
                        <li><p>rise</p></li>
                        <li><h3>10% OFF</h3></li>
                    </ul>
                </div>
                <!--<img data-original="images//gallery/cinamon.jpg" src="img/effects/white.gif" alt="Photo 3" />-->

                <!--<div class="overLayer"></div>-->
                <!--<div class="infoLayer">-->
                <!--    <ul>-->
                <!--        <li><h3>CINNABON</h3></li>-->
                <!--        <li><p>rise</p></li>-->
                <!--        <li><h3>10% OFF</h3></li>-->
                <!--    </ul>-->
                <!--</div>-->
                <div class="projectInfo">CINNABON</div>
            </li>
            
            <li>
                <a href="https://www.google.co.jp/search?rlz=1C1GGRV_enJP791JP792&ei=TlxRW4D5LoHH0gSE9aDYAg&q=ABC%E3%83%9E%E3%83%BC%E3%83%88&oq=ABC%E3%83%9E%E3%83%BC%E3%83%88&gs_l=psy-ab.3..0l8.3759.9894.0.10557.11.11.0.0.0.0.455.1212.8j1j4-1.10.0....0...1.1j4.64.psy-ab..1.10.1210...0i131i67k1j0i4k1j0i67k1j0i131k1.0.hU5cJKhwRdI"></a>
                <img data-original="images//gallery/rank/abc.png" src="img/effects/white.gif" alt="Photo 2" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>4位：ABC Mart</h3></li>
                        <li><p>rise</p></li>
                        <li><h3>10% OFF</h3></li>
                    </ul>
                </div>
                <!--<img data-original="images//gallery/hamburger.jpg" src="img/effects/white.gif" alt="Photo 3" />-->

                <!--<div class="overLayer"></div>-->
                <!--<div class="infoLayer">-->
                <!--    <ul>-->
                <!--        <li><h3>KUAAINA</h3></li>-->
                <!--        <li><p>rise</p></li>-->
                <!--        <li><h3>10% OFF</h3></li>-->
                <!--    </ul>-->
                <!--</div>-->
                <div class="projectInfo">KUAAINA</div>
            </li>
            
            <li>
                <a href="https://www.google.co.jp/search?rlz=1C1GGRV_enJP791JP792&ei=I25RW9-dBIXG0gSF0ZTYDg&q=ViS&oq=ViS&gs_l=psy-ab.3..0i67k1j0l3j0i67k1j0i131k1j0i4k1l2.17981.23675.0.24754.2.2.0.0.0.0.128.223.1j1.2.0....0...1.1.64.psy-ab..0.2.221....0.pEhoLZ6Pw5E"></a>
                
                <img data-original="images/gallery/rank/vis.png" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>5位：Vis</h3></li>
                        <li><p>rise</p></li>
                        <li><h3>10% off</h3></li>
                    </ul>
                </div>
                <div class="projectInfo">KUAAINA</div>
            </li>
            
            
            <li>
                <a href="https://www.google.co.jp/search?q=AMPHI&rlz=1C1GGRV_enJP791JP792&oq=AMPHI&aqs=chrome..69i57j0l5.742j0j7&sourceid=chrome&ie=UTF-8"></a>
                
                <img data-original="images//gallery/rank/amphi.png" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>6位：AMPHI</h3></li>
                        <li><p>rise</p></li>
                        <li><h3>20% off(不定期開催)</h3></li>
                    </ul>
                </div>
                <div class="projectInfo">KUAAINA</div>
            </li>
            
            <li>
                <a href="https://www.google.co.jp/search?q=Tabio&rlz=1C1GGRV_enJP791JP792&oq=Tabio&aqs=chrome..69i57j0l5.2089j0j7&sourceid=chrome&ie=UTF-8"></a>
                
                <img data-original="images//gallery/rank/tabio.png" src="img/effects/white.gif" alt="Photo 1" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h3>7位：Tabio</h3></li>
                        <li><p>rise</p></li>
                        <li><h3>5% off</h3></li>
                    </ul>
                </div>
                <div class="projectInfo">KUAAINA</div>
            </li>
            
          
    </section>


</body>
</html>