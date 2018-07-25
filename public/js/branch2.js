var coordinates = function(element) {
    element = $(element);
    element2 = $('.japan');
    var childPos = element.offset();
    var parentPos = element2.offset();
    var childOffset = {
        top: childPos.top - parentPos.top,
        left: childPos.left - parentPos.left
    }
    // $('#results').text('X: ' + childOffset.top + ' ' + 'Y: ' + childOffset.left);
    // var top = element.position().top - $(".japan").offset().top;
    // var left = element.position().left - $(".japan").offset().left;
    // $('#results').text('X: ' + left + ' ' + 'Y: ' + top);
    if(childOffset.left>40 && childOffset.left<170 && childOffset.top>40 && childOffset.top<150){
        window.location.href = "tokyo";
    }
    if(childOffset.left>-120 && childOffset.left<-30 && childOffset.top>80 && childOffset.top<190){
        window.location.href = "osaka";
    }
    if(childOffset.left>-340 && childOffset.left<-200 && childOffset.top>130 && childOffset.top<240){
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