
if(window.innerWidth < 1000){
    $(".item-menu").css("height", "0px");
    $(".item-menu").hide();
}

document.body.onresize = () => {
    if(window.innerWidth < 1000){
        $(".item-menu").css("height", "0px");
        $(".item-menu").hide();
    }else{
        $(".item-menu").show();
        $(".item-menu").css("height", "50px");
    }
}

$("#menu-button").on("click", () => {
    if($(".item-menu").is(":hidden")){
        $(".item-menu").show();
        $("#menu-button").css("background", "url('imagens/Cansel_seash.png')");
        $("#menu-button").css("background-position", "50%");
        $("#menu-button").css("background-size", "95%");
        $(".item-menu").css("height", "60px");
    }else{
        $("#menu-button").css("background", "url('imagens/menu7.png')");
        $("#menu-button").css("background-position", "50%");
        $("#menu-button").css("background-size", "95%");
        $(".item-menu").css("height", "0px");

        setTimeout(function(){
            $(".item-menu").hide();
        }, 100);
    }
});