<!DOCTYPE html>
<html lang="ja" >
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Rakuten Gallery</title>

    <!-- add styles -->
    <link href="css/least.min.free.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />

    <!-- add scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/leastprime.min.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    
</head>
<body>
    
    <header>
        <h2>Rakuten Gallery<div class="text">プライム会員になればプレゼンに使えるあの写真がダウンロードし放題！！</div></h2>
        
    </header>

    <!--  least.js gallery -->
   
    <section style="border:1px solid black;width:200px;height:800px;overflow:scroll;">
        <div id="container-example">
          <div class='strip colour-4'>
            <a class="" onclick="history.back()">戻る</a>
          </div>
        </div>
        <ul id="gallery">
            <li id="fullPreview"></li>

            <li>
                <a href="images/sample/cafelogo.s.png"></a>
                <img  id="free" data-original="images/rakuten_gallery/cafelogo t.jpeg" src="img/effects/white.gif" alt="Photo 1" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Circle R</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天のロゴ</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>楽天のロゴ。赤丸にRが象徴的。</h2></div>
            </li>
            <li>
                <a href="images/sample/cafemenu.s.png"></a>
                <img  id="prime" data-original="images/rakuten_gallery/cafemenu t.jpeg" src="img/effects/white.gif" alt="Photo 2" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Drink</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天カフェのドリンク</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>楽天カフェはドリンクが豊富。仕事の合間にほっと一息。</h2></div>
            </li>
            <li>
                <a href="images/sample/menuboard.s.png"></a>
                <img data-original="images/rakuten_gallery/menuboard t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Cafe Menu</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天カフェメニュー</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>社内の楽天カフェは全ドリンク半額！</h2></div>
            </li>
            <li>
                <a href="images/sample/rakutencafe.s.png"></a>
                <img id="free" data-original="images/rakuten_gallery/rakutencafe t.jpeg" src="img/effects/white.gif" alt="Photo 3" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Cafe</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天カフェ二子玉川店</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>オフィスの隣にも楽天カフェ。</h2></div>
            </li>
            <li>
                <a href="images/sample/rakutencafe2.s.png"></a>
                <img  id="free" data-original="images/rakuten_gallery/rakutencafe2 t.jpeg" src="img/effects/white.gif" alt="Photo 4" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Cafe</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天カフェ二子玉川店</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>カフェ店内には楽天モバイルショップも。<br><br>社割を使ってリーズナブルにスマホを使おう！</h2></div>
            </li>
            <li>
                <a href="images/sample/rakutencafe3.s.png"></a>
                <img id="free" data-original="images/rakuten_gallery/rakutencafe3 t.jpeg" src="img/effects/white.gif" alt="Photo 5" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Cafe</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天カフェ</p></li>
                    </ul>
                </div>
                
                <div class="projectInfo"><h2>光が差し込む楽天カフェ二子玉川店は、最高の休憩所。<br><br>楽天ペイ利用でドリンク半額！</h2></div>
            </li>
            <li>
                <a  href="images/sample/cafeteria.s.png"></a>
                <img id="free" data-original="images/rakuten_gallery/cafeteria t.jpeg" src="img/effects/white.gif" alt="Photo 6" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Cafeteria</h2></li>
                        <li><p>View</p></li>
                        <li><p>社食</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>本社の社食は３食無料。豊富な手作りドレッシングはいつも行列。</h2></div>
            </li>
            <li>
                <a href="images/sample/cafeteria2.s.png"></a>
                <img id="free" data-original="images/rakuten_gallery/cafeteria2 t.jpeg" src="img/effects/white.gif" alt="Photo 7" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Cafeteria</h2></li>
                        <li><p>View</p></li>
                        <li><p>社食</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>社食の席は大容量。<br><br>混雑する時間帯もありますが、いつでも座れます。</h2></div>
            </li>
            <li>
                <a href="images/sample/cafeteria3.s.png"></a>
                <img  id="prime" data-original="images/rakuten_gallery/cafeteria3 t.jpeg" src="img/effects/white.gif" alt="Photo 8" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Cafeteria</h2></li>
                        <li><p>View</p></li>
                        <li><p>社食</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>ミーティングでの利用もOK。</h2></div>
            </li>
            <li>
                <a href="images/sample/cafeteria4.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/cafeteria4 t.jpeg" src="img/effects/white.gif" alt="Photo 9" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Cafeteria</h2></li>
                        <li><p>View</p></li>
                        <li><p>社食</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>二子玉川を一望できる広々とした空間はリラックス効果抜群。</h2></div>
            </li>
            </li>
            <li>
                <a href="images/sample/lunch.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/lunch t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Lunch</h2></li>
                        <li><p>View</p></li>
                        <li><p>ランチ</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>無料とは思えないクオリティ＆ボリューム！</h2></div>
            </li>
            
            <li>
                <a href="images/sample/aquarium.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/aquarium t.jpeg" src="img/effects/white.gif" alt="Photo 11" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Small Aquarium</h2></li>
                        <li><p>View</p></li>
                        <li><p>ちっちゃな水族館</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>オフィスの外を歩くとちっちゃな水族館が見つかるかも…。</h2></div>
            </li>
            <li>
                <a href="images/sample/crimsonstore2.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/crimsonstore2 t.jpeg" src="img/effects/white.gif" alt="Photo 12" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Crimson Store</h2></li>
                        <li><p>View</p></li>
                        <li><p>クリムゾンストア</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>売店では、楽天カードや楽天Edyが利用できます。<br><br> 現金が使えないので要注意！</h2></div>
            </li>
            <li>
                <a href="images/sample/crimsonstore.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/crimsonstore t.jpeg" src="img/effects/white.gif" alt="Photo 13" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Crimson Store</h2></li>
                        <li><p>View</p></li>
                        <li><p>クリムゾンストア</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>今日のおすすめはどれ？絶品アイスクリームは一度は食べてみるべし！</h2></div>
            </li>
            <li>
                <a href="images/sample/entrance.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/entrance t.jpeg" src="img/effects/white.gif" alt="Photo 14" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Entrance</h2></li>
                        <li><p>View</p></li>
                        <li><p>エントランス</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>屋根が続く二子玉川駅からオフィスまでの道のりは傘いらず！始業１５分前は混みがちなので要注意。</h2></div>
            </li>
            <li>
                <a href="images/sample/landscape.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/landscape t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>LandScape</h2></h2></li>
                        <li><p>View</p></li>
                        <li><p>景観</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>オフィスの庭に行くと絶景が広がります</h2></div>
            </li>
            <li>
                <a href="images/sample/landscape3.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/landscape3 t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Landscape</h2></li>
                        <li><p>View</p></li>
                        <li><p>景観</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>オフィス周りは住宅街なので、朝から夜まで穏やか。<br><br>夜遅くの帰り道も安心。</h2></div>
            </li>
            <li>
                <a href="images/sample/landscape4.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/landscape4 t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Shopping Mall</h2></li>
                        <li><p>View</p></li>
                        <li><p>ショッピングモール</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>敷地内には大きな大きなショッピングモールが。<br><br>社員優遇クーポンでお買い得。</h2></div>
            </li>
            <li>
                <a href="images/sample/outlook.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/outlook t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Building</h2></li>
                        <li><p>View</p></li>
                        <li><p>オフィス外観</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>オフィスは２４階建ての大きなビル。写真に入りきれないほどの迫力！</h2></div>
            </li>
            
            <li>
                <a href="images/sample/rakutenmap.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/rakutenmap t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Map</h2></li>
                        <li><p>View</p></li>
                        <li><p>楽天の拠点</p></p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>国内・国外のいたるところに拠点があります。</h2></div>
            </li>
            <li>
                <a href="images/sample/rakutenmuseum.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/rakutenmuseum t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Museun</h2></li>
                        <li><p>View</p></li>
                        <li><p>ミュージアム</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>エントランスのすぐ近くには、<br><br>楽天の歴史を一覧できるミュージアムがあります。</h2></div>
            </li>
            <li>
                <a href="images/sample/redchair.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/redchair t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Guest Room</h2></li>
                        <li><p>View</p></li>
                        <li><p>応接間</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>応接間には楽天のクリムゾンカラーを大胆に使ったソファが！<br><br>待ち合わせに便利かも。</h2></div>
            </li>
            <li>
                <a href="images/sample/uniform.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/uniform t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Sports Business</h2></li>
                        <li><p>View</p></li>
                        <li><p>スポーツ</p></p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>スポーツのスポンサー事業も盛ん。<br><br>世界トップクラスの選手が来社することも…！？</h2></div>
            </li>
            <li>
                <a href="images/sample/rakutentoday.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/rakutentoday t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Rakuten Today</h2></li>
                        <li><p>View</p></li>
                        <li><p>今日の楽天</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>社内には、会社の動きをタイムリーに<br><br>キャッチアップできるサービスが多様に用意されています。<h2></h2></div>
            </li>
            <li>
                <a href="images/sample/smoking.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/smoking t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Smoking Area</h2></li>
                        <li><p>View</p></li>
                        <li><p>喫煙所</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>オフィス外には喫煙所もあります。<br><br>マナーを守って利用しましょう。</h2></div>
            </li>
            <li>
                <a href="images/sample/opan.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/opan t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Okaimono Panda</h2></li>
                        <li><p>View</p></li>
                        <li><p>お買い物パンダ</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>楽天といえばお買い物パンダ！<br><br> エントランス前のマスコットと一緒に記念写真を撮ろう！</h2></div>
            </li>
            <li>
                <a href="images/sample/yukataday.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/yukataday t.jpg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Annual Event</h2></li>
                        <li><p>View</p></li>
                        <li><p>季節の行事</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>楽しい社内イベントが毎年開催されます。<br><br>写真は七夕の浴衣DAY！</h2></div>
            </li>
            <li>
                <a href="images/sample/motherroom.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/motherroom t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Mother's room</h2></li>
                        <li><p>View</p></li>
                        <li><p>マザールーム</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>楽天は育児制度が充実。<br><br>子育て中も働きやすくなっています。</h2></div>
            </li>
            <li>
                <a href="images/sample/gym.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/gym t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>GYM</h2></li>
                        <li><p>View</p></li>
                        <li><p>ジム</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>終業後はジムでストレス解消！</h2></div>
            </li>
            <li>
                <a href="images/sample/gym2.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/gym2 t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>GYM</h2></li>
                        <li><p>View</p></li>
                        <li><p>ジム</p></p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>充実した設備とお手頃価格が、<br><br>男女問わず多くの社員に大人気</h2></div>
            </li>
            <li>
                <a href="images/sample/beauty.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/beauty t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>BEAUTY</h2></li>
                        <li><p>View</p></li>
                        <li><p>美容</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>美容やリラクゼーションまで…！<br><br>なんでもオフィス内でできちゃう福利厚生の充実ぶり</h2></div></div>
            </li>
            <li>
                <a href="images/sample/drone.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/drone t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Drone</h2></li>
                        <li><p>View</p></li>
                        <li><p>ドローン</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>日本で初めてドローン配達に成功したのは楽天！<br><br>社内には楽天が開発したドローンが展示されています。</h2></div>
            </li>
            <li>
                <a href="images/sample/meetingroom.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/meetingroom t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Metting Room</h2></li>
                        <li><p>View</p></li>
                        <li><p>ミーティングルーム</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>透明ガラスは、風通しの良い環境つくりのため</h2></div>
            </li>
            <li>
                <a href="images/sample/guestroom.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/guestroom t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Guest Room</h2></li>
                        <li><p>View</p></li>
                        <li><p>ゲストルーム</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>現代的でおしゃれなゲストルーム。<br><br>木目調に温かみを感じます。</h2></div>
            </li>
            <li>
                <a href="images/sample/garden.s.png"></a>
                <img id='prime' data-original="images/rakuten_gallery/garden t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Garden</h2></li>
                        <li><p>View</p></li>
                        <li><p>庭</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>晴れた日は庭に出るべし！<br><br>心地よい風が吹く隠れ癒しスポット</h2></div>
            </li>
            <li>
                <a href="images/sample/garden2.s.png"></a>
                <img id='free' data-original="images/rakuten_gallery/garden2 t.jpeg" src="img/effects/white.gif" alt="Photo 15" />

                <div class="overLayer"></div>
                <div class="infoLayer">
                    <ul>
                        <li><h2>Garden</h2></li>
                        <li><p>View</p></li>
                        <li><p>庭</p></li>
                    </ul>
                </div>
                <div class="projectInfo"><h2>たまには社食ではなくて、<br><br>外でのお弁当もおすすめ</h2></div>
            </li>

        </ul>
    </section>


</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
</script>
</html>