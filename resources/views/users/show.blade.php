<html>
	<head>
		<meta charset="UTF-8">
	    <title>Profile</title>
	    <link rel="stylesheet" href="/css/profile.css">
	     @include('layouts.navbar')
	</head>
	<body>
		
<div class="box_6">
	  <h1><span class="box-title">{{$user->name}} さん</span></h1>
	    <p>
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
	              
	              
	        ?>
	        <?php
	        $free = "あなたは無料会員です。今すぐ10円払おう！";
	        $prime = "あなたはプライム会員です。ポイントもっとためましょう！";
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
	        
		
			<br><h1>{{$user->point}} POINTS</h1> 
	    </p>
</div>
		<div id="rankingname">楽天理解度王者ランキング</div>
	    <?php
		    foreach($alldata as $data){
		    	?><div class="box_6"><?php
	            print $data->name;
	            print "さん ";
	            print $data->point;
	            print "ポイント";
	            ?></div><?php
        }
	    ?>
	   
		
	</body>
</html>