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

     @include('layouts.navbar')

</head>

<body>
<div class="cont_principal">

  <br>
  <div id="container-example">
              <div class='strip colour-4'>
                <a class="" href="contents.branch">支社一覧に戻る</a>
              </div>
            </div>
 
  <div class="cont_central">
  
    <div class="cont_modal cont_modal_active">
      <div class="cont_photo">
        <div class="cont_img_back">

          <img src="images/osaka2.jpg" alt="osaka" />

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
          <h3>Osaka Office</h3>
          <p>&nbsp;&nbsp;〒530-0005<br>
          &nbsp;&nbsp;大阪府大阪市北区中之島3-2-18<br>
          &nbsp;&nbsp;住友中之島ビル8F<br>
          
          
          <div class = "btn-toolbar">
            
                      
            
                      <div class="btn .btn-sm">
                      
                      <?php
                        $user_id =  \Auth::user()->id;
                        $exist = DB::select("select * from branchfavorites where user_id = $user_id and favorite_id = 3");
                      
                         if(!$exist){
                      ?>
                            {!! Form::open(['route' => ['osakafavorite']]) !!}
                               <input type="hidden" value="3" name="osaka_id" />
                                {!! Form::submit('いいね！', ['class' => 'btn btn-danger  btn-sm btn-block']) !!}
                            {!! Form::close() !!}
                      <?php
                          }
                         else{
                      ?>
                            {!! Form::open(['route' => ['osakaunfavorite']]) !!}
                            {!! Form::submit('やっぱり興味ないかなぁ',  ['class' => 'btn btn-info  btn-sm btn-block']) !!}
                            {!! Form::close() !!}
                            
                            
                      <?php
                         }
                      ?>
                      
      
                      </div>
                 
          </div>
        </div>
      </div>
  
      <div class="cont_text_ingredients">
        <div class="cont_over_hidden">
     
          <div class="cont_tabs">
              <ul>
                <li><h4>大阪支社</h4></li>
              
              </ul>  
          </div>
         
          <div class="cont_text_det_preparation">
            <div class="cont_title_preparation">
              <p>近隣情報</p>
              </div>
            <div class="cont_info_preparation">
              <p>京阪中之島線、渡辺橋駅【4番出口】より徒歩1分
                地下鉄御堂筋線・京阪本線、淀屋橋駅【7番出口】より徒歩7分。
                堂島川沿いにあり、落ち着いた雰囲気のオフェス街。
                徒歩10分で梅田駅まで行けるので買い物、食事にも困りません。

              <br>
              </p>
              </div>  
            <div class="cont_text_det_preparation">
          
              <div class="cont_title_preparation">
                <p>社食</p>
                </div>
              <div class="cont_info_preparation">
                <p>朝食、昼食、夕食、3食無料です。
                カフェテリアは一箇所でコーヒーやお菓子数種類も、社内で購入できます。</p>
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
    
    
   

      <div class="col-xs-offset-3 col-xs-6">

         

              <link href="css/fukuoka.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/fukuoka.css') }}">

               <!--Bootstrap -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
              <br><br><br>
              <?php
               $prime = \Auth::user()->prime;
               if($prime == 0){
               }
               elseif($prime == 1){
              ?>
              
                  大阪支社についての感想や、疑問に思ったことをコメントしてみよう！<br>
                  {!! Form::model($content, ['route' => 'contents.storeO']) !!}
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
              }
              ?>
            </div>        
      </div>

    
  </div>

</div>


</body>
