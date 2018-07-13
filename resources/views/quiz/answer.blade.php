
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>A Collection of Page Transitions</title>
		<meta name="description" content="A Collection of Page Transitions with CSS Animations" />
		<meta name="keywords" content="page transition, css animation, website, effect, css3, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/transitions/default.css" />
		<link rel="stylesheet" type="text/css" href="css/transitions/multilevelmenu.css" />
		<link rel="stylesheet" type="text/css" href="css/transitions/component.css" />
		<link rel="stylesheet" type="text/css" href="css/transitions/animations.css" />
		<script src="js/modernizr.custom.js"></script>
		
		   <meta charset="UTF-8">
    <title>Sasorich KAI２</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    
    <!--Chat機能 Firebase接続-->
    <!--<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>-->
    <!--<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase-firestore.js"></script>-->
    
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>

    <!--Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!--最初の画面-->
    <!--<link rel="stylesheet" href="css/index.css">-->
    
    <!--チャットのCSS-->
    <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" type="text/css" href="css/quiz.css">-->
    
		
	</head>
	<body>	
		<div class="codrops-top clearfix">
			<!--<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/AutomaticFigureNumbering/"><span>Previous Demo</span></a>-->
			<!--<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15001"><span>Back to the Codrops Article</span></a></span>-->
		</div>

		<div class="pt-triggers">
			<!--<button id="iterateEffects" class="pt-touch-button">Show next page transition</button>-->
			<div id="dl-menu" class="dl-menuwrapper">
				<!--<button class="dl-trigger">Choose a transition</button>-->
				<ul class="dl-menu">
					<li>
						<a href="#">Move</a>
						<ul class="dl-submenu">
							<li data-animation="1"><a href="#">Move to left/ from right</a></li>
							<li data-animation="2"><a href="#">Move to right/ from left</a></li>
							<li data-animation="3"><a href="#">Move to top/ from bottom</a></li>
							<li data-animation="4"><a href="#">Move to bottom/ from top</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Fade</a>
						<ul class="dl-submenu">
							<li data-animation="5"><a href="#">Fade / from right</a></li>
							<li data-animation="6"><a href="#">Fade / from left</a></li>
							<li data-animation="7"><a href="#">Fade / from bottom</a></li>
							<li data-animation="8"><a href="#">Fade / from top</a></li>
							<li data-animation="9"><a href="#">Fade left / Fade right</a></li>
							<li data-animation="10"><a href="#">Fade right / Fade left</a></li>
							<li data-animation="11"><a href="#">Fade top / Fade bottom</a></li>
							<li data-animation="12"><a href="#">Fade bottom / Fade top</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Different easing</a>
						<ul class="dl-submenu">
							<li data-animation="13"><a href="#">Different easing / from right</a></li>
							<li data-animation="14"><a href="#">Different easing / from left</a></li>
							<li data-animation="15"><a href="#">Different easing / from bottom</a></li>
							<li data-animation="16"><a href="#">Different easing / from top</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Scale</a>
						<ul class="dl-submenu">
							<li data-animation="17"><a href="#">Scale down / from right</a></li>
							<li data-animation="18"><a href="#">Scale down / from left</a></li>
							<li data-animation="19"><a href="#">Scale down / from bottom</a></li>
							<li data-animation="20"><a href="#">Scale down / from top</a></li>
							<li data-animation="21"><a href="#">Scale down / scale down</a></li>
							<li data-animation="22"><a href="#">Scale up / scale up</a></li>
							<li data-animation="23"><a href="#">Move to left / scale up</a></li>
							<li data-animation="24"><a href="#">Move to right / scale up</a></li>
							<li data-animation="25"><a href="#">Move to top / scale up</a></li>
							<li data-animation="26"><a href="#">Move to bottom / scale up</a></li>
							<li data-animation="27"><a href="#">Scale down / scale up</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Rotate</a>
						<ul class="dl-submenu">
							<li>
								<a href="#">Glue</a>
								<ul class="dl-submenu">
									<li data-animation="28"><a href="#">Glue left / from right</a></li>
									<li data-animation="29"><a href="#">Glue right / from left</a></li>
									<li data-animation="30"><a href="#">Glue bottom / from top</a></li>
									<li data-animation="31"><a href="#">Glue top / from bottom</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Flip</a>
								<ul class="dl-submenu">
									<li data-animation="32"><a href="#">Flip right</a></li>
									<li data-animation="33"><a href="#">Flip left</a></li>
									<li data-animation="34"><a href="#">Flip top</a></li>
									<li data-animation="35"><a href="#">Flip bottom</a></li>
								</ul>
							</li>
							<li data-animation="36"><a href="#">Fall</a></li>
							<li data-animation="37"><a href="#">Newspaper</a></li>
							<li>
								<a href="#">Push / Pull</a>
								<ul class="dl-submenu">
									<li data-animation="38"><a href="#">Push left / from right</a></li>
									<li data-animation="39"><a href="#">Push right / from left</a></li>
									<li data-animation="40"><a href="#">Push top / from bottom</a></li>
									<li data-animation="41"><a href="#">Push bottom / from top</a></li>

									<li data-animation="42"><a href="#">Push left / pull right</a></li>
									<li data-animation="43"><a href="#">Push right / pull left</a></li>
									<li data-animation="44"><a href="#">Push top / pull bottom</a></li>
									<li data-animation="45"><a href="#">Push bottom / pull top</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Fold / Unfold</a>
								<ul class="dl-submenu">
									<li data-animation="46"><a href="#">Fold left / from right</a></li>
									<li data-animation="47"><a href="#">Fold right / from left</a></li>
									<li data-animation="48"><a href="#">Fold top / from bottom</a></li>
									<li data-animation="49"><a href="#">Fold bottom / from top</a></li>
									<li data-animation="50"><a href="#">Move to right / unfold left</a></li>
									<li data-animation="51"><a href="#">Move to left / unfold right</a></li>
									<li data-animation="52"><a href="#">Move to bottom / unfold top</a></li>
									<li data-animation="53"><a href="#">Move to top / unfold bottom</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Room</a>
								<ul class="dl-submenu">
									<li data-animation="54"><a href="#">Room to left</a></li>
									<li data-animation="55"><a href="#">Room to right</a></li>
									<li data-animation="56"><a href="#">Room to top</a></li>
									<li data-animation="57"><a href="#">Room to bottom</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Cube</a>
								<ul class="dl-submenu">
									<li data-animation="58"><a href="#">Cube to left</a></li>
									<li data-animation="59"><a href="#">Cube to right</a></li>
									<li data-animation="60"><a href="#">Cube to top</a></li>
									<li data-animation="61"><a href="#">Cube to bottom</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Carousel</a>
								<ul class="dl-submenu">
									<li data-animation="62"><a href="#">Carousel to left</a></li>
									<li data-animation="63"><a href="#">Carousel to right</a></li>
									<li data-animation="64"><a href="#">Carousel to top</a></li>
									<li data-animation="65"><a href="#">Carousel to bottom</a></li>
								</ul>
							</li>
							<li data-animation="66"><a href="#">Sides</a></li>
						</ul>
					</li>
					<li data-animation="67"><a href="#">Slide</a></li>
				</ul>
			</div><!-- /dl-menu-wrapper-->
		</div><!-- /triggers -->

		<div id="pt-main" class="pt-perspective">
			<div class="pt-page pt-page-1">
                <!--<h1><span>A collection of</span><strong>あいおうｗ</strong> Transitions</h1>-->

	                <h1><span>
	                <div id="ingame">
                		ゲームが進行中です
                		<br>
                		<br>
                	</div>
	                	Name

                	</span></h1><br>
	                <input type="text" name="username" id="username" value="" />
	                <button id="usertouroku" class="pt-touch-button">入室</button>
                <button id="reset">全員強制退出（ゲームをやり直す）</button>
			</div>
			<div class="pt-page pt-page-2"><h1>
				<!--<span>A collection of</span><strong>Page</strong> Transitions-->
                       <h1><span><div id="hello"></div></span></h1>
                       <div id="hatsu">
                       	<button id="ready">START</button>
                       </div>
                    	<!--<div id="tochuu">-->
                    	<!--<button id="readytochuu">START2</button>	-->
                    	<!--</div>-->
                        <h2><span>
                        	<!--<u>Users</u><br><br><br><br>-->
                        <div id="score2"></div>
                        </span></h2>
			</div>
			<div class="pt-page pt-page-3">
				<!--<h1><span>A collection of</span><strong>Page</strong> Transitions</h1>-->
			
				<!--<div id="quizzes"></div>-->

				<h1><span>
	                <div id="bangou"></div>
	                <br>
	                <div id="mondaidesu"></div>
				</h1></span>
				<h2><span>
					<div id="yesno"></div>
                Answer:
                <input type="text" name="kotae" id="kotae" value="" />
                
                <button id="send">送信</button>
                <br><br><br>
                
				</h2></span>
				
				<h4><span>
                <div id="kaitousha"></div>
                <div id="answer"></div>
				
	                Score:
	                <ul id="score"></ul>
	                </h4></span>
     
			
			</div>
			<div class="pt-page pt-page-4"><h1><span>A collection of</span><strong>Page</strong> Transitions</h1></div>
			<div class="pt-page pt-page-5"><h1><span>A collection of</span><strong>Page</strong> Transitions</h1></div>
			<div class="pt-page pt-page-6"><h1><span>A collection of</span><strong>Page</strong> Transitions</h1></div>
		</div>

		<div class="pt-message">
			<p>Your browser does not support CSS animations.</p>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<!--<script src="js/pagetransitions.js"></script>-->
	    <script src="js/answer.js"></script>
	</body>
</html>
