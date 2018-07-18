<!DOCTYPE html>
<html>
    <head>
        <link href="css/sasorich.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ secure_asset('css/sasorich.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>

      <div class='box'>
              <div class='wave -one'></div>
              <div class='wave -two'></div>
              <div class='wave -three'></div>
              
              <!--ここに題名-->
              <div class='title'>クイズ作成ページ
              
                  <div class="column" style="text-align:center;">
                      <ul class="list-inline">
                  </div>
                </div>

<test> 
                    <div class="lead">
            <div class="col-xs-offset-3 col-xs-6">
<!--中身-->


@auth
<br><br><br><br>
    {!! Form::model($quiz, ['route' => 'soloquiz.store']) !!}
        
        {!! Form::label('quiz', 'QUESTION:') !!}
        {!! Form::text('quiz') !!}
        
        {!! Form::label('answer', 'ANSWER:') !!}
        {!! Form::text('answer') !!}

        
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}
@else
    ログインしてね
@endauth

                <br><br><br><br><br>
        </div> </div> </div>         
 
    </div>
 
<!--中身終わり    -->
</test>  


 </div>
    
        
    </body>
</html>