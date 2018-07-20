var coordinates = function(element) {
    element = $(element);
    var top = element.position().top - $(".japan").offset().top;
    var left = element.position().left - $(".japan").offset().left;
    $('#results').text('X: ' + left + ' ' + 'Y: ' + top);
    if(left>-50 && left<90 && top>-20 && top<90){
        window.location.href = "tokyo";
    }
    if(left>-220 && left<-120 && top>10 && top<120){
        window.location.href = "osaka";
    }
    if(left>-430 && left<-300 && top>50 && top<210){
        window.location.href = "fukuoka";
    }
}


$('#panda').draggable({
    start: function() {
        coordinates('#panda');
    },
    stop: function() {
        coordinates('#panda');
    }
});

// ろーでぃんぐ
$('head').append(
    '<style type="text/css">#container { display: none; } #fade, #loader { display: block; }</style>'
);
 
// jQuery.event.add(window,"load",function() { // 全ての読み込み完了後に呼ばれる関数
$(window).on('load', function () {
    var pageH = $("#container").height();
 
    $("#fade").css("height", pageH).delay(900).fadeOut(800);
    $("#loader").delay(600).fadeOut(300);
    $("#container").css("display", "block");
});