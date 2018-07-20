<!--
福岡をfavoriteできるようになる。
ー中間テーブルはいらない。
ー一対多の関係を構築する。
ー福岡テーブルはid user_idになるんじゃないか？
-->
<head>
  
  <meta charset="UTF-8">
    <title>Welcome to Rakuten</title>
    <link rel="stylesheet" href="/css/fukuoka.css">

    <!--<link rel="stylesheet" href="/css/nav.css">-->
    <!--<script type="text/javascript" src="/js/fukuoka.js"></script>-->

    <script type="text/javascript" src="/js/fukuoka.js"></script>
    
     @include('layouts.navbar')

</head>

<body>
<div class="cont_principal">

  <br><br><br>
  <div id="container-example">
              <div class='strip colour-4'>
                <a class="" href="contents.branch">支社一覧に戻る</a>
              </div>
            </div>
 
  <div class="cont_central">
  
    <div class="cont_modal cont_modal_active">
      <div class="cont_photo">
        <div class="cont_img_back">
          <img src="images/fukuoka.jpg" alt="hakata" />
        </div>
    
        <div class="cont_mins">
          <!--<div class="sub_mins">-->
          <!--  <h3>福岡</h3>-->
          <!--</div>-->
              <div class="sub_mins">
                          
                    <h3><?php
                    print $count;
                    ?></h3>
                    <br><span class="glyphicon glyphicon-thums-up"><h8>いいね !</h8></span>
              </div>
          <!--<div class="cont_icon_right">-->
          <!--  <a href="#">  <i class="material-icons">&#xE8E7;</i></a>-->
          <!--</div>-->
        </div>
    
        <div class="cont_detalles">
          <h3>Rakuten Crimson House</h3>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;〒158-0094<br>
          &nbsp;&nbsp;&nbsp;&nbsp;東京都世田谷区玉川一丁目14番1号<br>
        </div>
      </div>
  
      <div class="cont_text_ingredients">
        <div class="cont_over_hidden">
     
          <div class="cont_tabs">
              <ul>
                <li><a href="#"><h4>楽天クリムゾンハウス本社</h4></a></li>
              
              </ul>  
          </div>
         
          <div class="cont_text_det_preparation">
            <div class="cont_title_preparation">
              <p>近隣情報</p>
              </div>
            <div class="cont_info_preparation">
              <p>東急田園都市線、東急大井町線、二子玉川駅より徒歩4分
              <br>多摩川がすぐそばを流れ、開放的で自然を多く感じられる二子玉川。一方で、ショッピングモール「二子玉川ライズ」や日本初の本格的ショッピングセンター「玉川高島屋S・C」など都会的な一面も持ち合わせ、子供連れの家族が多く集います。</p>
              </div>  
            <div class="cont_text_det_preparation">
          
              <div class="cont_title_preparation">
                <p>社食</p>
                </div>
              <div class="cont_info_preparation">
                <p>朝食、昼食、夕食、3食無料です。
                カフェテリアは9階と22階の2フロア展開となっており、ランチは日替わりで8～10種類と豊富なラインナップ。楽天カフェも併設し、食事以外でもコーヒーや軽食を提供しています。</p>
              </div>
        
            </div>
          </div>  
        
          <!--<div class="cont_btn_mas_dets">-->
          <!--  <a href="#"><i class="material-icons">&#xE313;</i></a>-->
          <!--</div>-->
        
        </div>
          <!--<div class="cont_btn_open_dets">-->
          <!--  <a href="#e" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>-->
          <!--</div>-->
  
      </div>
      
    </div>
    <br>
    <div class = "btn-toolbar">
            
                      <div class="btn btn-lg">
                      
                      <?php
                        $user_id =  \Auth::user()->id;
                        $exist = DB::select("select * from branchfavorites where user_id = $user_id and favorite_id = 1");
                      
                         if(!$exist){
                      ?>
                            {!! Form::open(['route' => ['tokyofavorite']]) !!}
                               <input type="hidden" value="1" name="tokyo_id" />
                                {!! Form::submit('いいね！', ['class' => 'btn btn-danger  btn-lg btn-block']) !!}
                            {!! Form::close() !!}
                      <?php
                          }
                         else{
                      ?>
                            {!! Form::open(['route' => ['fukuokaunfavorite']]) !!}
                            {!! Form::submit('やっぱり興味ないかなぁ',  ['class' => 'btn btn-info  btn-lg btn-block']) !!}
                            {!! Form::close() !!}
                      <?php
                         }
                      ?>
                      </div>
                 
          </div>
    
            
  
    <br><br><br><br><br><br><br>
    
   

      <div class="col-xs-offset-3 col-xs-6">

         

              <link href="css/fukuoka.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/fukuoka.css') }}">

               <!--Bootstrap -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
              <br><br><br>
              
                  東京本社についての感想や、疑問に思ったことをコメントしてみよう！<br>
                  {!! Form::model($content, ['route' => 'contents.storeT']) !!}
                    <div class='form-group'>
                      {!! Form::label('content', ' ') !!}
                      {!! Form::text('content',null, ['class' => 'form-control']) !!}
                    </div>
                      <br>{!! Form::submit('投稿', ['class' => 'btn btn-info'])!!}
                  {!! Form::close() !!}
            <br><br>
            <div>
              
              
              
              
              <?php
              if(count($count)>0){
                foreach($contents as $content){
              ?>
                    <div class="box5">
                        <?php 
                              if($content->user_point < 30){
                                 $result = '<img src="images/rakuten_gallery/bronze.jpg">';
                              }
                              elseif($content->user_point >=100){
                                 $result = '<img src="images/rakuten_gallery/silver.jpg">';
                              }
                              else{
                                $result = '<img src="images/rakuten_gallery/gold.jpg">';
                              }
                              echo $result
                        ?>  {{ $content->user_name }}:<br><br>{{ $content->content }}</div>
                  
                    
                    
                    <?php
                }
              }
              ?>
            </div>        
      </div>

    
  </div>

</div>


</body>
