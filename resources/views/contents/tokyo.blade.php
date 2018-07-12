
<head><meta charset="UTF-8">
    <title>Welcome to Rakuten</title>
    <link rel="stylesheet" href="/css/fukuoka.css">
    <script type="text/javascript" src="/js/fukuoka.js"></script>
</head>

<body>
<div class="cont_principal">
  <div class="cont_central">
  
    <div class="cont_modal cont_modal_active">
      <div class="cont_photo">
        <div class="cont_img_back">
          <img src="images/tokyo.jpg" alt="tokyo" />
        </div>
    
        <div class="cont_mins">
          <div class="sub_mins">
            <h3>東京クリムゾンハウス</h3>
          </div>
          <div class="cont_icon_right">
            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
          </div>
        </div>
    
        <div class="cont_detalles">
          <h3>Rakuten Crimson House</h3>
          <p>&nbsp;&nbsp;〒158-0094<br>
          &nbsp;&nbsp;東京都世田谷区玉川一丁目14番1号<br>
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
                カフェテリアは9階と22階の2フロア展開となっており、ランチは日替わりで8～10種類と抱負なラインナップ。楽天カフェも併設し、食事以外でもコーヒーや軽食を提供しています。</p>
              </div>
        
            </div>
          </div>  
        
          <div class="cont_btn_mas_dets">
            <a href="#"><i class="material-icons">&#xE313;</i></a>
          </div>
        
        </div>
          <div class="cont_btn_open_dets">
            <a href="#e" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
          </div>
  
      </div>
      
      
      
    </div>
    <br><br><br><br><br><br><br>

      <div class="col-xs-offset-3 col-xs-6">
          <head>

              <link href="css/tokyo.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/tokyo.css') }}">

               Bootstrap 
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          </head>
            <body>
                  {!! Form::model($content, ['route' => 'contents.storeF']) !!}
                    <div class='form-group'>
                      {!! Form::label('name', 'なまえ') !!}
                      {!! Form::text('name',null, ['class' => 'form-control']) !!}
                    </div>
                    <div class='form-group'>
                      {!! Form::label('content', 'コメント') !!}
                      {!! Form::text('content',null, ['class' => 'form-control']) !!}
                    </div>
                      <br>{!! Form::submit('投稿', ['class' => 'btn btn-warning'])!!}
                  {!! Form::close() !!}
                
            </body>
                  
            <br><br>
            <div>
              @if (count($contents) > 0)
                      <ul>
                          @foreach ($contents as $content)
                          <br><div class="alert alert-warning" role="alert">{{ $content->name }} :<br>{{ $content->content }}</div>
                          @endforeach
                      </ul>
               @endif
            </div>        
      </div>

    
  </div>

</div>

</body>