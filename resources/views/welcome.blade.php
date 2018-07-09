<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sasorich KAI</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    
    <!--Chat機能 Firebase接続-->
    <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

     
              <!--JQuery-->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--最初の画面-->
    <link rel="stylesheet" href="css/index.css">
    
    <!--チャットのCSS-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    
    
   @include('layouts.navbar')
</head>

<body>
  <div class="cont s--inactive">
  <!-- cont inner start -->
  <div class="cont__inner">
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            
            <h2 class="el__heading">Coupon</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
              <div class="el__title">Coupon Top5</div>

              
             
                   
    <ol class="suuji">
                   
                      <li class="el__coupon"> <a href="test">Rakuten services</a></li>
                      <li class="animsition-link"> <a href="./resources/views/cafe.html" >Cafe & Restaurant around office</a></li>
                      <li class="coupon"> <a href="./resources/views/cafe.html">Rakuten services</a></li>
                      <li class="coupon"> <a href="./resources/views/cafe.html">Movie & Karaoke</a></li>
                      <li class="coupon"> <a href="./resources/views/cafe.html">Amusement park & pool</a></li>
                      <li class="coupon"> <a href="./resources/views/cafe.html">Shopping</a></li>
                     </ol>
                     </div>
                   
                   
                   
                   
                   
                   

            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">R</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="R">R</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">BRANCH</h2>
          </div>
          <div class="el__content">
            <div class="el__text">{!! link_to_route('contents.branch', 'BRANCH') !!}</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">A</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="A">A</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">GALLERY</h2>
          </div>
          <div class="el__content">
            <div class="el__text">{!! link_to_route('contents.gallery', 'GALLERY') !!}</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">K</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="K">K</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">Section 4</h2>
          </div>
          <div class="el__content">
            <div class="el__text">Whatever</div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">U</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="U">U</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">RAKUTEN QUIZ</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
              {!! link_to_route('quiz', 'quiz') !!}
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">T</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="T">T</div>
        </div>
      </div>
    </div>
    <!-- el end -->
        <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">Magical Banana</h2>
          </div>
          <div class="el__content">
            <div class="el__text">
                 {!! link_to_route('banana', 'banana') !!}
                
            </div>
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">E</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="E">E</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    
            <!-- el start -->
    <div class="el">
      <div class="el__overflow">
        <div class="el__inner">
          <div class="el__bg"></div>
          <div class="el__preview-cont">
            <h2 class="el__heading">チャット</h2>
          </div>
          <div class="el__content">
            <div class="el__text">チャット機能だお
            @include('chat')
            
            </div>
            
            <div class="el__close-btn"></div>
          </div>
        </div>
      </div>
      <div class="el__index">
        <div class="el__index-back">N</div>
        <div class="el__index-front">
          <div class="el__index-overlay" data-index="N">N</div>
        </div>
      </div>
    </div>
    <!-- el end -->
    
  </div>
  <!-- cont inner end -->
</div>

  
  
<!--ロードが完了してから読み込むJavascript-->
    <script  src="js/index.js"></script>
    <script src="js/chat.js"></script>



</body>

</html>
