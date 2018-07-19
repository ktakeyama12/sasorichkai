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
	              echo $result
	        ?>
	        
		
			<br><h1>{{$user->point}} POINTS</h1> 
	    </p>
</div>
	   
		
	</body>
</html>