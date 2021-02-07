// VARIAVEIS GLOBAIS DE SISTEMAS
let page = 0;
let width_menu = window.innerWidth > 900 ? 50: 90;

//#region CONFIGURAÇÕES GENÉRICAS DE ELEMENTOS DE TELA
loadShow();
$('.projthis-input-password').length ? $('.projthis-input-password').append("<input class='projthis-input' id='senha-default' type='password' placeholder='Senha' required /><i id='olho'></i>"): 0;
let inputpassword = {
    input: document.getElementById('senha-default'),
    show: function () {
        this.input.setAttribute('type', 'text');
        $('#olho').css('background', "url('imagens/olho-aberto.png') no-repeat");
        $('#olho').css('background-size', '50%');
        $('#olho').css('background-position', '50%');
    }, 
    hide: function () {
        this.input.setAttribute('type', 'password');
        $('#olho').css('background', "url('imagens/olho-fechado.png') no-repeat");
        $('#olho').css('background-size', '50%');
        $('#olho').css('background-position', '50%');
    }
};
$('#olho').on('click', () => {
    let input = document.getElementById('senha-default');
    input.getAttribute('type') == 'password' ? inputpassword.show(): inputpassword.hide();
});
//#endregion


//#region  OBJETO DE CAMPO DE PESQUISA
var Search = {
    Open: () => {
        if($(".searsh-area").is(":hidden")){
            $(".menu").hide();
            $(".searsh-area").show(100);
            setTimeout(() => {
                $(".searsh-area").css("width", width_menu + "%");
                $("#search").focus();
            }, 100);
        }else{
            $(".searsh-area").css("width", "0%");
            $(".searsh-area").hide(500);
            $(".menu").show(500);
        }
    },
    Close: () => {
        $(".searsh-button-hide").css("transform", "rotate(360deg)");
        $(".searsh-area").css("width", "0%");
        setTimeout(() => {
            $(".searsh-area").hide();
            $(".menu").show(200);
            $(".searsh-button-hide").css("transform", "rotate(0deg)");
        }, 400);
    },
    CloseArea: () => {
        $("#search-result-area").hide(0);
        $("#template").show(0);
    }
};
//#endregion

//#region OBJETO DE MENU
var menu = {
    show: () => {
        if($("#campo-menu") != null){
            $(".menu").show();
            $(".searsh-area").hide();
            $("#campo-menu").css("top","0px");
            $("#logo").show(350);
            $("#lupa").show(400);
        }
    },

    hide: () => {
        if($("#campo-menu") != null){
            $("#campo-menu").css("top","-300px");
            $("#logo").hide(400);
            $("#lupa").hide(400);
        }
    }
}
//#endregion

//#region ADIÇÃO DA LOGO ICONE

if(window.location.href.substring(window.location.href.length - 3, window.location.href.length) == "php"){
    document.getElementById("logo-tipo").href = window.location.href.substring(0, window.location.href.length - 9) +
    "imagens/logo-tipo.png";
}else{
    document.getElementById("logo-tipo").href = window.location.href + "/imagens/logo-tipo.png";
}
//#endregion

//#region CONTROLE DE ANIMAÇÃO E POSIÇÃO DO MENU
document.onscroll = () => {
    if(document.body.scrollTop > page && document.body.scrollTop > 200){
        //document.getElementById("campo-menu").style = "top: -300px;";
        menu.hide();
        page = document.body.scrollTop;
    }else if(document.body.scrollTop < page){
        menu.show();
        // $(".menu").show();
        // $(".searsh-area").hide();
        // document.getElementById("campo-menu").style = "top: 0px;";
        page = document.body.scrollTop
    }
};

$("#lupa").click(() => {
    Search.Open();
});

$(".searsh-button-hide").click(() => {
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
// $(".searsh-button").on("click", () => {
//     search();
// });

document.addEventListener("keypress", (event) => {
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

//#endregion

//#region LOAD NOTIFICATION
function loadShow(){
    if($("#load-area").length){
        $("#load-area").show()
    }else{
        $("body").append("<div id='load-area'><div id='load-loop'></div></div>");
        $("#load-area").show();
    };
}
function loadHide(){
    $("#load-area").hide();;
}
//#endregion



