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
    <link rel="stylesheet" href="/css/nav.css">
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
          <h3>Fukuoka Office</h3>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;〒812-0011<br>
          &nbsp;&nbsp;&nbsp;&nbsp;福岡市博多区博多駅前2丁目2番1号<br>
          &nbsp;&nbsp;&nbsp;&nbsp;福岡センタービル12F</p>
          
           <div class = "btn-toolbar">
            
                      <div class="btn btn-lg">
                      
                      <?php
                        $user_id =  \Auth::user()->id;
                        $exist = DB::select("select * from branchfavorites where user_id = $user_id and favorite_id = 2");
                      
                         if(!$exist){
                      ?>
                            {!! Form::open(['route' => ['fukuokafavorite']]) !!}
                               <input type="hidden" value="2" name="fukuoka_id" />
                                {!! Form::submit('いいね！', ['class' => 'btn btn-danger  btn-sm btn-block']) !!}
                            {!! Form::close() !!}
                      <?php
                          }
                         else{
                      ?>
                            {!! Form::open(['route' => ['fukuokaunfavorite']]) !!}
                           
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
                <li><h4>福岡支社</h4></a>
                </li>
                
                
              
              </ul>  
          </div>
         
          <div class="cont_text_det_preparation">
            <div class="cont_title_preparation">
              <p>近隣情報</p>
              </div>
            <div class="cont_info_preparation">
              <p>JR博多駅から徒歩１分
              <br>福岡市博多区は、福岡の中でも最も栄えた街で、福岡支社の周りには飲食店やショッピングモールが多く隣接しています。電車やバスの交通網も整っているため、日常生活に困ることはないでしょう。</p>
              </div>  
            <div class="cont_text_det_preparation">
          
              <div class="cont_title_preparation">
                <p>社食</p>
                </div>
              <div class="cont_info_preparation">
                <p>ランチのみ無料です。
                朝食や夕食は有料で提供されています。オフィス周辺の飲食店で利用できる食品券の支給があります。</p>
                
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
   
    
            
  
    <br>
    
   

      <div class="col-xs-offset-3 col-xs-6">

         

              <link href="css/fukuoka.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/fukuoka.css') }}">

               <!--Bootstrap -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
              <br><br><br>
              <div class = 'prime_button'>
                
                  @auth
                    <?php
                    $prime = \Auth::user()->prime;
                            if($prime == 0){
                    ?>
                    
                    <h3>楽天プライム（入会費１０円）に登録すると<br>支社に関する口コミの投稿や閲覧ができます。</h3>
                          	  {!! Form::open(['route' => ['welcomePrimeF']]) !!}
                                 <input type="hidden" value="1" name="prime" />
                                  {!! Form::submit('楽天プライム会員（入会費１０円）になる', ['class' => 'btn btn-danger  btn-lg btn-block']) !!}
                              {!! Form::close() !!}
                    <?php
                            }
                            elseif($prime == 1){
                              print '';
                                
                            }
                    ?>
                @endauth
              </div>
              <?php
               $prime = \Auth::user()->prime;
               if($prime == 0){
                 print '';
               }
               elseif($prime == 1){
              ?>
              <div class='towa'>
                  福岡支社についてコメントしてみよう！<br>
                  {!! Form::model($content, ['route' => 'contents.storeF']) !!}
                    </div>
                    <div class='form-group'>
                      {!! Form::label('content', ' ') !!}
                      {!! Form::text('content',null, ['class' => 'form-control']) !!}
                    </div>
                      <br>{!! Form::submit('投稿', ['class' => 'btn btn-info', 'onclick'=>'alertpost()'])!!}
                  {!! Form::close() !!}
            <br><br>
            <div>
              
              <?php
              if($contents){
                foreach($contents as $content){
              ?>
                    <div class="box5">
                        <?php 
                        
                              if($content->user_point < 50){
                                 $result = '<img src="images/rakuten_gallery/bronze.jpg">';
                              }
                              elseif($content->user_point >=50 && $content->user_point <200 ){
                                 $result = '<img src="images/rakuten_gallery/silver.jpg">';
                              }
                              elseif($content->user_point >=200){
                                $result = '<img src="images/rakuten_gallery/gold-ribon.jpg">';
                              }
                              echo $result;
                        ?>  <br><br>{{ $content->user_name }}:<br><br>{{ $content->content }}
                        <br>
                                           @if (Auth::user()->id == $content->user_id)
                        <div class="btn-group">
                            {!! Form::open(['route' => ['destroyfukuoka', $content->id], 'method' => 'delete']) !!}
                            <input type="hidden" value="{{$content->id}}" name="id" />
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'onclick'=>'alertdelete()']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                    </div>
 
                    
                    
                    <?php
                }
              }
               }
              ?>
              <script>
                function alertpost(){
                  alert("投稿しました");
                }
                                function alertdelete(){
                  alert("削除しました");
                }
              </script>
            </div>        
      </div>

    
  </div>

</div>


</body>
