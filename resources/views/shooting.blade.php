<!DOCTYPE html>
<html>
<head>
    <title>shooting game</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <style>
        #hero{
            background-image: url("/images/fighter.png");
            height: 35px;
            width: 35px;
            position: absolute;
        }
        
        #heroImage{
            height: 20px;
            width: 20px;
        }
        
        #background{
            background: #000000;
            width: 500px;
            height: 500px;
            position: absolute;
            left: 0px;
            top: 0px;
        }
        
        
        .laser {
          background: #00ff00;
          width: 2px;
          height: 50px;
          position: absolute;
        }


        
        .enemy{
            background-image: url("/images/enemy.png");
            background-size: 35px 35px;
            width: 35px;
            height: 35px;
            position: absolute;
            
        }
        
        
        #score{
            color: black;
            font-size: 140px;
            position: absolute;
            left: 650px;
            top:250px;
            
            
        }
        
        #gameover{
            color: red;
            font-size: 20px;
            position: absolute;
            left: 160px;
            top: 200px;
            visibility: hidden;
        }
        
         #clear{
            color: black;
            font-size: 50px;
            position: absolute;
            left: 650px;
            top: 100px;
            visibility:hidden;
            
        }
        
        #new{
            position:absolute;
            left:210px;
            top:520px;
        }
        
        
        #license{
            position:absolute;
            top:700px;
            
        }
        
        #cense{
            position:absolute;
            top:720px;
        }
        
        
        
        
    </style>
    <script src="../js/jquery-1.7.1.min.js"></script>
    <script>
       
    </script>
    
</head>
<body>
    
    <div id='background'></div>
    <<div id='hero'></div>
    
    <div class="laser" id="laser0"></div>
    <div class="laser" id="laser1"></div>
    <div class="laser" id="laser2"></div>


    <div id="new"><button onclick="myFunction()">はじめから</button></div>
    <div id="back"><button onclick="back()">もどる</button></div>
    <div id = 'score'></div>
    <div id = 'gameover'>GAME OVER</div>
    <div id='clear'><h1>クリア！</h1></div>
    
    
    
    <script>
    
    var LEFT_KEY = 37;
    var UP_KEY = 38;
    var RIGHT_KEY = 39;
    var DOWN_KEY = 40;
    var SPACE_KEY = 32;
    var HERO_MOVEMENT = 5; 
    
    var lastLoopRun = 0;
    var score =0;
    var iterations = 0;
    
    
    
    
    var controller = new Object();
    var enemies = new Array();
    
    
    
    
    function myFunction() {
    location.reload();
    }
    
    function back() {
    view(shootingWelcome);
    }


    function getFireableLaser(){
        var result=null;
        for(var i=0; i < lasers.length; i++){
            if(lasers[i].y <= -120){
                result=lasers[i];
            }
        }
        return result;
    }
    
    function createSprite(element, x, y, w, h){
        var result = new Object();
        result.element = element;
        
        result.x = x;
        result.y = y;
        result.w = w;
        result.h = h;
        
        return result;
    }
    
    function toggleKey(keyCode, isPressed){
        if(keyCode == LEFT_KEY){
            controller.left = isPressed;
        }
        if(keyCode == RIGHT_KEY){
            controller.right = isPressed;
        }
        if(keyCode == UP_KEY){
            controller.up = isPressed;
        }
        if(keyCode == DOWN_KEY){
            controller.down = isPressed;
        }
        if(keyCode == SPACE_KEY){
            controller.space = isPressed;
        }
        
    }
    
        function intersects(a, b){
            return a.x < b.x + b.w && a.x + a.w > b.x && a.y < b.y + b.h && a.y + a.h > b.y;
        }
    
        function ensureBounds(sprite, ignoreY){
            if(sprite.x <20){
                sprite.x = 20;
            }
            if(sprite.y < 20){
                sprite.y = 20;
            }
            if(sprite.x + sprite.w >480){
                sprite.x = 480 - sprite.w;
            }
            if(sprite.y + sprite.h >480){
                sprite.y = 480 - sprite.h;
            }
        }
    
        function setPosition(sprite){
            var e = document.getElementById(sprite.element);
            e.style.left = sprite.x +'px';
            e.style.top = sprite.y +'px';
        }
        
        function handleControls(){
            if(controller.up){
                hero.y -= HERO_MOVEMENT;
            }
            if(controller.down){
                hero.y +=HERO_MOVEMENT;
            }
            if(controller.left){
                hero.x -=HERO_MOVEMENT;
            }
            if(controller.right){
                hero.x += HERO_MOVEMENT;
            }
            if(controller.space){
                var laser = getFireableLaser();
                if(laser){
                laser.x=hero.x+9;
                laser.y=hero.y - laser.h;
                }
            }
            
            
             ensureBounds(hero);
        }
        
        function getIntersectingLaser(enemy){
            var result = null;
            for(var i=0; i<lasers.length; i++){
                if(intersects(lasers[i],enemy)){
                    result=lasers[i];
                    break;
                }
            }
            return result;
        }
        
        function checkCollisions(){
            for(var i = 0; i < enemies.length; i++){
                var laser = getIntersectingLaser(enemies[i]);
                if(laser){
                    var element = document.getElementById(enemies[i].element);
                    element.style.visibility = 'hidden';
                    element.parentNode.removeChild(element);
                    enemies.splice(i, 1);
                    i--;
                    laser.y = -laser.h;
                    score += 100;
                }else if(intersects(hero, enemies[i])){
                    var element = document.getElementById(hero.element);
                    element.style.visibility = 'hidden';
                    gameOver();
                    
                    
                }else if(enemies[i].y + enemies[i].h >= 480){
                    var element = document.getElementById(enemies[i].element);
                    element.style.visiblity = 'hidden';
                    element.parentNode.removeChild(element);
                    enemies.splice(i,1);
                    i--;
                    score-=100;
                    }
                    
                }
            }
            
        function gameOver(){
            var element = document.getElementById(hero, element);
            element = document.getElementById('gameover');
            element.style.visibility = 'visible';
        }
        
        function clear(){
            var element = document.getElementById(hero, element);
            element = document.getElementById('clear');
            element.style.visibility = 'visible';
        }
        
        function showSprites(){
            setPosition(hero);
            for(var i=0; i<lasers.length; i++){
                 setPosition(lasers[i]);
            }
            for(var i=0; i<enemies.length; i++){
                setPosition(enemies[i]);
            }
            
            var scoreElement = document.getElementById('score');
            scoreElement.innerHTML = '得点: ' + score;
        }
        
        function updatePositions(){
            for(var i = 0; i < enemies.length; i++){
                enemies[i].y += 4;
                enemies[i].x += getRandom(7)-3;
                ensureBounds(enemies[i],true);
            }
            for(var i = 0; i < lasers.length; i++){
                lasers[i].y -= 12;
            }
            
        }
        
        var lasers = new Array();
        for(var i=0; i<3; i++){
            lasers[i] = createSprite('laser' + i, 0, -120, 2, 50);
        }
        
        function addEnemy(){
            var interval = 50;
            if(iterations > 1500){
                interval=5;
            }else if(iterations > 1000){
                interval=20;
            }else if(iterations > 500){
                interval=35;
            }
            if(getRandom(50) == 0){
                var elementName = 'enemy' + getRandom(10000000);
                var enemy = createSprite(elementName, getRandom(450), -40, 35, 35);
                
                var element = document.createElement('div');
                element.id = enemy.element;
                element.className = 'enemy';
                document.children[0].appendChild(element);
                
                enemies[enemies.length] = enemy;
                
            }
        }
        
        function getRandom(maxSize){
            return parseInt(Math.random() * maxSize);
        }
        
        function loop(){
            if(new Date().getTime() - lastLoopRun>40){
                updatePositions();
                handleControls();
                checkCollisions();
                
                addEnemy();
                
                showSprites();
                
                lastLoopRun = new Date().getTime();
                iterations++;
            }
            setTimeout('loop();', 2);
        }
        
        document.onkeydown = function(evt){
            toggleKey(evt.keyCode, true);
        }
        
        document.onkeyup = function(evt){
            toggleKey(evt.keyCode, false);
        }
        
        var hero = createSprite('hero', 250, 460, 30, 30);
        var laser = createSprite('laser', 0, -120,2,50);
        
        
        
        
        loop();
        
        
    </script>
    
    
<div id="license">Icons made by <a href="https://www.flaticon.com/authors/nikita-golubev" title="Nikita Golubev">Nikita Golubev</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        
</body>
</html>