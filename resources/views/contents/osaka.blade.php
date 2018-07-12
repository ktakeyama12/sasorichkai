
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
          <img src="images/osaka.jpg" alt="tokyo" />
        </div>
    
        <div class="cont_mins">
          <div class="sub_mins">
            <h3>大阪支社</h3>
          </div>
          <div class="cont_icon_right">
            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
          </div>
        </div>
    
        <div class="cont_detalles">
          <h3>Osaka Office</h3>
          <p>&nbsp;&nbsp;〒530-0005<br>
          &nbsp;&nbsp;大阪府大阪市北区中之島3-2-18<br>
          &nbsp;&nbsp;住友中之島ビル8F<br>
        </div>
      </div>
  
      <div class="cont_text_ingredients">
        <div class="cont_over_hidden">
     
          <div class="cont_tabs">
              <ul>
                <li><a href="#"><h4>大阪支社</h4></a></li>
              
              </ul>  
          </div>
         
          <div class="cont_text_det_preparation">
            <div class="cont_title_preparation">
              <p>近隣情報</p>
              </div>
            <div class="cont_info_preparation">
              <p>京阪中之島線、渡辺橋駅【4番出口】より徒歩1分
地下鉄四つ橋線、肥後橋駅【3番出口】より徒歩2分
地下鉄御堂筋線・京阪本線、淀屋橋駅【7番出口】より徒歩7分
JR東西線、北新地駅【11－5番出口】より徒歩7分
※JR大阪駅【51番出口】より徒歩12分
なんとか川ぞい　オフィス街　徒歩10分で梅田　
              ジェシカ
              <br></p>
              </div>  
            <div class="cont_text_det_preparation">
          
              <div class="cont_title_preparation">
                <p>社食</p>
                </div>
              <div class="cont_info_preparation">
                <p>岡本さんの返事待ち
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
              <link rel="stylesheet" href="{{ secure_asset('css/osaka.css') }}">

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