<!DOCTYPE html>
<html>
    <head>
        <link href="css/sasorich.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ secure_asset('css/sasorich.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Single Game</title>
    </head>

    <body>
        
      <div class='box'>
          <div class='wave -one'></div>
          <div class='wave -two'></div>
          <div class='wave -three'></div>
              
              
              
          <!--ここに題名-->
          <div class='title'>QUIZ
          
          <div class="column" style="text-align:center;">
              <ul class="list-inline">
          </div>
            </div>

            <test> 
                    <div class="lead">
            <div class="col-xs-offset-4 col-xs-6">
            @auth
            <br><br>
                QUESTION:
                <?php print $quiz->quiz;
                
             
                ?>
                <br>
                {!! Form::model($quiz, ['route' => 'soloquiz.answerinput']) !!}
            
                {!! Form::label('answerinput', 'ANSWER:') !!}
                {!! Form::text('answerinput') !!}
                
                {!! Form::submit('投稿') !!}
                <br>
                <div id="container-example">
         
                <input type="hidden" value="{{$quiz->answer}}" name="oldanswer" />
                <input type="hidden" value="{{$quiz->id}}" name="oldid" />
                <?php
                    if($message=="正解" or $message==""){
                        print $message;
                        $gotoulist = '';
                    }else{
                        print "答えは" . $message . "でした";
                    }
                   
                    if(!empty($gotoulist)){
                         ?><br>誤答一覧：<br><?php
                        foreach($gotoulist as $gotou){
                            print $gotou;
                            ?><br><?php
                        }
                    }
                ?>
            @else
            アカウント作ってね
            @endauth
                            <br><br><br><br><br>
                    </div>  </div>  </div>         
            
                </div>
             
            <!--中身終わり    -->
            </test>  
            
            
             </div>
                
                    
    </body>
</html>