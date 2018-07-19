x = 0;
$(document).ready(function(){
    $("section").scroll(function(){
        $("span").text( x+= 1);
        if(x>=0){
            swal("続きは楽天プライムで", "ここから先は10円だよ", "success");
        }
    });
    });