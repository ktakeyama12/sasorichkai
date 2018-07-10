var text = ".split";
/*global $*/
var split = new SplitText(text);
/*global SplitText*/
function random(min, max){
    return (Math.random() * (max - min)) + min;
}

$(split.chars).each(function(i){
    TweenMax.from($(this), 2.5, {
        /*global TweenMax*/
        opacity: 0,
        x: random(-500, 500),
        y: random(-500, 500),
        z: random(-500, 500),
        scale: .1,
        delay: i * .02,
        yoyo: true,
        repeat: -1,
        repeatDelay: 10
    });
});