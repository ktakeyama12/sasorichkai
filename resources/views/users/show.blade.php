        <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
        
        
	    <title>Profile</title>
	    <link rel="stylesheet" href="/css/profile.css">
	     @include('layouts.navbar')
	</head>
	<body>
	<div class="border">
		<img class="gardenden" src="/images/s_entrance.png">
		<div class="circle"><img class="hito" src="/images/rakuten_gallery/panda2.png"></div>
	</div>
	<div class="border2">
		 <h1><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->name}} さん</h1>
	</div>
	
	<div class="primeButton">
		<h2>あなたはプライム会員ですか？</h2>
		
		<form method="POST" action="/login">
        <input type="button" name="yesButton" value="yesPrime"/>
    	</form>
    	

	</div>

	
	<div class="border3">	
		<div class="box_6">
			 
			    <p><center>
			    	<?php 
			              if($user->point < 30){
			                 $result = '<img src="images/rakuten_gallery/bronze.jpg">';
			              }
			              elseif($user->point >=100){
			                 $result = '<img src="images/rakuten_gallery/silver.jpg">';
			              }
			              else{
			                $result = '<img src="images/rakuten_gallery/gold.jpg">';
			              }
			              echo $result;
			              
			              
			        $free = "あなたは無料会員です。";
			        $prime = "あなたはプライム会員です。";
			        $error = "Who the hell are you? get the hell out of here";
			        
			        if($user->prime == 0){
			        	echo $free;
			        }elseif($user->prime == 1){
			        	$img = '<img src="images/prime.png">';
			        	echo $img;
			        	echo $prime;
			        }else{
			        	echo $error;
			        }
			        ?>
			        
			        <?php
			        
			        if(isset($_POST["yesButton"])){
			        	$loginuser = \Auth::user();
        				$user = User::find($loginuser->id);
        				if($user->prime==0){
            				$user->prime = 1;
            				$user->save();
			        	}
			        }
                      ?>
			        
			        	<h2>{{$user->prime}}:this is prime status</h2>
				
					<br><div class="oomoji">{{$user->point}} ポイント</div> 
			   
				<div class="tyuumoji">楽天理解度王者ランキング</div>
			    <?php
				    foreach($alldata as $data){
				    
		        }
		        
			    ?>
			</center></p>
		</div>
	</div>
</body>
	
<script>
		//primeボタンの機能。Yesならprimeカラムに１ Noなら0
		//ボタンを二つ作る。
		//ボタンに機能をつける。－yesを押すとuserテーブルのprimeカラムに１が挿入され、noの場合は何も起こらない。
		var status;
		
		function yesPrime(){
			alert("あなたはプライム会員ですね？");
			document.getElementById("prime").innerHTML = "あなたはプライム会員です";
			
		}
		
		function noPrime(){
			alert("あなたは無料会員ですね？");
			document.getElementById("prime").innerHTML = "あなたは無料会員です。今すぐプライム会員に登録！";
		}
		
		
		
</script>
</html>