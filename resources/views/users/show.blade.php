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
			<img class="gardenden" src="/images/rakuten_gallery/ent.png">
			<div class="circle"><img class="hito" src="/images/rakuten_gallery/panda2.png"></div>
		</div>
		<div class="border2">
			 <h1><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->name}} さん</h1>
		</div>
		
	
	<div class="border3">	
		<div class="box_6">
			    <p><center>
			    	<?php 
			              if($user->point < 50){
			                 $result = '<img src="images/rakuten_gallery/bronze.jpg">';
			              }
			              elseif($user->point >=50 && $user->point <200){
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
			        
				
				<br><div class="oomoji">{{$user->point}} ポイント</div> 
			   	<br><br><br><br>
			   	<div class="hako" title="楽天理解度王者ランキング">
				<!--<div class="tyuumoji"></div>-->
			    
			    
			    <div class="box" title="楽天理解度王者ランキング">

				<br><br>
			    <div class="komoji">
			    <?php
				    foreach($alldata as $data){
				    		    	?><?php
				    		    	
				    		    	foreach (($data) as $user => $count) {
									    echo "{$count}位:";
									  }
				    		    	
				
	            print $data->name;
	            print "さん ";
	            print $data->point;
	            print "ポイント";
	            ?>
	            <br><br>
	            <?php
		        }
			    ?>
			    </div>
			    </center></p>

				</div>
			    
			    
		</div>
	</div>
	</body>

</html>