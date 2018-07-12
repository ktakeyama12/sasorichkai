
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
          <img src="images/fukuoka.jpg" alt="hakata" />
        </div>
    
        <div class="cont_mins">
          <div class="sub_mins">
            <h3>福岡</h3>
          </div>
          <div class="cont_icon_right">
            <a href="#">  <i class="material-icons">&#xE8E7;</i></a>
          </div>
        </div>
    
        <div class="cont_detalles">
          <h3>Fukuoka Office</h3>
          <p>&nbsp;&nbsp;〒812-0011<br>
          &nbsp;&nbsp;福岡市博多区博多駅前2丁目2番1号<br>
          &nbsp;&nbsp;福岡センタービル12F</p>
        </div>
      </div>
  
      <div class="cont_text_ingredients">
        <div class="cont_over_hidden">
     
          <div class="cont_tabs">
              <ul>
                <li><a href="#"><h4>福岡支社</h4></a></li>
              
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

              <link href="css/fukuoka.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/fukuoka.css') }}">

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
                  
                  {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
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