//variaveis de sistema globais
let page = 0;
let width_menu = window.innerWidth > 900 ? 50: 90;
var Search = {
    Open: function(){
        if($(".searsh-area").is(":hidden")){
            $(".menu").hide();
            $(".searsh-area").show();
            $(".searsh-area").css("width", width_menu + "%");
            $("#search").focus();
        }else{
            $(".searsh-area").css("width", "0%");
            $(".searsh-area").hide(500);
            $(".menu").show(500);
        }
    },
    Close: function(){
        $(".searsh-button-hide").css("transform", "rotate(360deg)");
        $(".searsh-area").css("width", "0%");
        setTimeout(() => {
            $(".searsh-area").hide();
            $(".menu").show(200);
            $(".searsh-button-hide").css("transform", "rotate(0deg)");
        }, 400);
    }
};
//#region ADIÇÃO DA LOGO ICONE
logotipo = window.location.href;
if(logotipo.substring(window.location.href.length - 3, window.location.href.length) == "php"){
    document.getElementById("logo-tipo").href = window.location.href.substring(0, window.location.href.length - 9) +
    "imagens/logo-tipo.png";
}else{
    document.getElementById("logo-tipo").href = window.location.href + "imagens/logo-tipo.png";
}
//#endregion

//#region CONTROLE DE ANIMAÇÃO E POSIÇÃO DO MENU
document.onscroll = () => {
    if(document.body.scrollTop > page && document.body.scrollTop > 200){
        document.getElementById("campo-menu").style = "top: -300px;";
        page = document.body.scrollTop;
    }else if(document.body.scrollTop < page){
        $(".menu").show();
        $(".searsh-area").hide();
        document.getElementById("campo-menu").style = "top: 0px;";
        page = document.body.scrollTop
    }
};

$("#lupa").on("click", () => {
    Search.Open();
});

$(".searsh-button-hide").on("click", () => {
    Search.Close();
});

// Usuario piscando
setInterval(function(){
    $("#icon-user").css("background", "url('imagens/user-bed-pisc.png')");
    $("#icon-user").css("background-position", "50%");
    $("#icon-user").css("background-size", "110%");
    setTimeout(() => {
        $("#icon-user").css("background", "url('imagens/user-bed.png')");
        $("#icon-user").css("background-position", "50%");
        $("#icon-user").css("background-size", "110%");
    }, 200);
},3000);

// Usuario com sono
setInterval(() => {
    $("#icon-user").css("background", "url('imagens/user-sono.png')");
    $("#icon-user").css("background-position", "50%");
    $("#icon-user").css("background-size", "110%");
    setTimeout(() => {
        $("#icon-user").css("background", "url('imagens/user-bed.png')");
        $("#icon-user").css("background-position", "50%");
        $("#icon-user").css("background-size", "110%");
    }, 400);
},15000);

// Usuario rindo
$("#icon-user").on("mouseover", () => {
    $("#icon-user").css("background", "url('imagens/user-heppy.png')");
        $("#icon-user").css("background-position", "50%");
        $("#icon-user").css("background-size", "110%");
});
//#endregion
        

//#region SEARCH ACTION
$(".searsh-button").on("click", () => {
    search();
});
$("#close-result-search").on("click", () => {
    $("#search-result-area").hide(0);
    $("#template").show(0);
});
document.addEventListener("keypress", function(event) {
    if(event.key.toUpperCase() == "ENTER" && $("#search").val() != "" && !document.getElementById("search").hidden){
        search();
    }
});

function search(){
    loadShow();
    $("#template").hide();
    $("#search-result-area").show();
    $.ajax({
        method: "POST",
        url: "../ASCINC/Global.php",
        data: {
            search: $("#search").val(),
            metodo: "search"
        },
    }).done((data) => {
        loadHide();
        console.log(data);
    }).fail((jqXHR, textStatus, msg) => {
        loadHide();
        console.log(msg);
    });
    Search.Close();
}
function loadShow(){
    $("#load-area").show();
}
function loadHide(){
    $("#load-area").hide();
}
function init(){
    $(".searsh-area").hide();
    $("#search-result-area").hide();
    $("#load-area").hide();
}
//#endregion