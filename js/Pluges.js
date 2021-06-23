$(function(){

    $(".BlockEngine").hover(function () {
        $(this).css("color","white")
        $(this).css("color","white")
        
    }, function () {
        $(this).css("color","black")
        $(this).css("color","black")
    }
);
    var box =$(".box");

    box.fadeOut(700);
    box.fadeIn(600);

    var BackButton = $(".BackButton");

    BackButton.fadeOut(1000);
    BackButton.fadeIn(1500);
    
    var control = $(".control");
    control.fadeOut(300);
    control.fadeIn(400);
    
});