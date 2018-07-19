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
	        
		
			<br><h1>{{$user->point}} POINTS</h1> 
	    </p>
</div>
		<center>楽天理解度王者ランキング</center>
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