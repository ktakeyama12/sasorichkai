var coordinates = function(element) {
    element = $(element);
    element2 = $('.japan');
    var childPos = element.offset();
    var parentPos = element2.offset();
    var childOffset = {
        top: childPos.top - parentPos.top,
        left: childPos.left - parentPos.left
    }
    $('#results').text('X: ' + childOffset.top + ' ' + 'Y: ' + childOffset.left);
    // var top = element.position().top - $(".japan").offset().top;
    // var left = element.position().left - $(".japan").offset().left;
    // $('#results').text('X: ' + left + ' ' + 'Y: ' + top);
    if(childPos.left>170 && childPos.left<260 && childPos.top>150 && childPos.top<240){
        window.location.href = "tokyo";
    }
    if(childPos.left>0 && childPos.left<100 && childPos.top>180 && childPos.top<290){
        window.location.href = "osaka";
    }
    if(childPos.left>-200 && childPos.left<-110 && childPos.top>223 && childPos.top<325){
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