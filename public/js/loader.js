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

jQuery.event.add(window,"load",function() { 
    var pageH = $("#container").height();
    $("#fade").css("height", pageH).delay(900).fadeOut(800);
    $("#loader").delay(600).fadeOut(300);
    $("#container").css("display", "block");

});