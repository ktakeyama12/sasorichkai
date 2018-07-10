<<<<<<< HEAD
<<<<<<< HEAD

<head><meta charset="UTF-8">
    <title>Welcome to Rakuten</title>
    <link rel="stylesheet" href="/css/gallery.css">
    <script type="text/javascript" src="/js/gallery.js"></script>
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
          <p>〒812-0011<br>
          福岡市博多区博多駅前2丁目2番1号<br>
          福岡センタービル12F</p>
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

              <link href="css/gallery.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/gallery.css') }}">

              <!-- Bootstrap -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          </head>
            <body>
                  {!! Form::model($content, ['route' => 'contents.store']) !!}
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
=======
=======
>>>>>>> c8dbbd326e0b5bf4f4ca0836491751e93e3b9a5e
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bootstrap Template</title>

        <!-- Bootstrap CSS-->
        <link href="css/branch.css" rel="stylesheet" type="text/css">        <!-- jQuery -->
        <script type="text/javascript" src="js/gallery.js"></script>
    </head>
    <body>
        
        <h1>全国の楽天</h1>
            
        <p>
            <img class="japan" src="/images/japan.jpg">
        </p>
            
            <ul>
                <li>①札幌支社</li>
                <li>②仙台支社</li>
                <li>③盛岡オフィス</li>
                <li>④新潟支社</li>
                <li>⑤さいたま支社</li>
                {!! link_to_route('contents.tokyo', '⑥楽天クリムゾンハウス') !!}
                <li>⑦千葉支社</li>
                <li>⑧横浜支社</li>
                <li>⑨松本オフィス</li>
                <li>⑩静岡支社</li>
                <li>⑪名古屋支社</li>
                <li>⑫金沢支社</li>
                <li>⑬京都支社</li>
                {!! link_to_route('contents.osaka', '⑭大阪支社') !!}
                <li>⑮神戸支社</li>
                <li>⑯広島支社</li>
                <li>⑰松山支社</li>
                {!! link_to_route('contents.fukuoka', '⑱福岡支社') !!}
                <li>⑲鹿児島支社</li>
                <li>⑳沖縄支社</li>
                
        
            </ul>
        
    </body>
<<<<<<< HEAD

<head><meta charset="UTF-8">
    <title>Welcome to Rakuten</title>
    <link rel="stylesheet" href="/css/gallery.css">
    <script type="text/javascript" src="/js/gallery.js"></script>
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
          <p>〒812-0011<br>
          福岡市博多区博多駅前2丁目2番1号<br>
          福岡センタービル12F</p>
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

              <link href="css/gallery.css" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="{{ secure_asset('css/gallery.css') }}">

              <!-- Bootstrap -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          </head>
            <body>
                  {!! Form::model($content, ['route' => 'contents.store']) !!}
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
=======
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Bootstrap Template</title>

        <!-- Bootstrap CSS-->
        <link href="css/branch.css" rel="stylesheet" type="text/css">        <!-- jQuery -->
        <script type="text/javascript" src="js/gallery.js"></script>
    </head>
    <body>
        
        <h1>全国の楽天</h1>
            
        <p>
            <img class="japan" src="/images/japan.jpg">
        </p>
            
            <ul>
                <li>①札幌支社</li>
                <li>②仙台支社</li>
                <li>③盛岡オフィス</li>
                <li>④新潟支社</li>
                <li>⑤さいたま支社</li>
                {!! link_to_route('contents.tokyo', '⑥楽天クリムゾンハウス') !!}
                <li>⑦千葉支社</li>
                <li>⑧横浜支社</li>
                <li>⑨松本オフィス</li>
                <li>⑩静岡支社</li>
                <li>⑪名古屋支社</li>
                <li>⑫金沢支社</li>
                <li>⑬京都支社</li>
                {!! link_to_route('contents.osaka', '⑭大阪支社') !!}
                <li>⑮神戸支社</li>
                <li>⑯広島支社</li>
                <li>⑰松山支社</li>
                {!! link_to_route('contents.fukuoka', '⑱福岡支社') !!}
                <li>⑲鹿児島支社</li>
                <li>⑳沖縄支社</li>
                
        
            </ul>
        
    </body>
</html>


