$('head').append(
    '<style type="text/css">#container { display: none; } #fade, #loader { display: block; }</style>'
);
 
// jQuery.event.add(window,"load",function() { 
// $('#loadtime1').on('load', function(){
//     console.log("1")
//     $('#loadtime2').on('load', function(){
//         console.log("1")
//         $('#loadtime3').on('load', function(){
//             console.log("1")
//             $('#loadtime4').on('load', function(){
//                 console.log("1")
//                 $('#loadtime5').on('load', function(){
//     var pageH = $("#container").height();
//     $("#fade").css("height", pageH).delay(900).fadeOut(800);
//     $("#loader").delay(600).fadeOut(300);
//     $("#container").css("display", "block");
// });
// });
// });
// });
// });
var progress = 0;
document.getElementById("progress").innerHTML = progress + "%"
$('#loadtime1').on('load', function(){
    progress+=20;
    document.getElementById("progress").innerHTML = progress + "%"
    showpage(progress)
});
$('#loadtime2').on('load', function(){
    progress+=20;
    document.getElementById("progress").innerHTML = progress + "%"
    showpage(progress)
});
$('#loadtime3').on('load', function(){
    progress+=20;
    document.getElementById("progress").innerHTML = progress + "%"
    showpage(progress)
});
$('#loadtime4').on('load', function(){
    progress+=20;
    document.getElementById("progress").innerHTML = progress + "%"
    showpage(progress)
});
$('#loadtime5').on('load', function(){
    progress+=20;
    document.getElementById("progress").innerHTML = progress + "%"
    showpage(progress);
});

var finished=0;
function showpage(progress){

    if(progress==100){
        var pageH = $("#container").height();
        $('#scroller').scrollTop($('#messages').height());
        messageList[0].scrollTop = messageList[0].scrollHeight;
        $("#fade").css("height", pageH).delay(900).fadeOut(800);
        $("#loader").delay(600).fadeOut(300);
        $("#container").css("display", "block");
        $("#chat").delay(4000).fadeIn(2000);
        $('#scroller').scrollTop($('#messages').height());
        finished = 1;
        console.log("this")
    }
}
// if(document.getElementById("progress").innerHTML=="100"){
//     console.log(document.getElementById("progress").innerHTML)
//     var pageH = $("#container").height();
//     $("#fade").css("height", pageH).delay(900).fadeOut(800);
//     $("#loader").delay(600).fadeOut(300);
//     $("#container").css("display", "block");
//     $("#chat").delay(4000).fadeIn(2000);
// }

jQuery.event.add(window,"load",function() { 
    console.log("wd")
    var pageH = $("#container").height();
    $('#scroller').scrollTop($('#messages').height());
    messageList[0].scrollTop = messageList[0].scrollHeight;
    $("#fade").css("height", pageH).delay(900).fadeOut(800);
    $("#loader").delay(600).fadeOut(300);
    $("#container").css("display", "block");
    $("#chat").delay(4000).fadeIn(2000);
    $('#scroller').scrollTop($('#messages').height());
    finished += 1;
    console.log("that")
});




$(function(){
setInterval(oneSecondFunction, 100);
});

function oneSecondFunction() {
    if(finished >= 1 && finished <= 5){
        $('#scroller').scrollTop($('#messages').height());
        finished=10;
    }
}