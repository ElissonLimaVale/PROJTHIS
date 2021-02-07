let teste;

//#region  ESCOLHA DE TELA LOGIN
$(document).ready(() => {
    $('#cadastro').css('height', window.innerHeight + 'px');
    $('.login-bar').css('height', (window.innerHeight / 2) + (window.innerHeight / 3) + 'px');
    var query = location.search.slice(1);
    var partes = query.split('&');
    var data = {};
    partes.forEach(function (parte) {
        var chaveValor = parte.split('=');
        var chave = chaveValor[0];
        var valor = chaveValor[1];
        data[chave] = valor;
    });

    tela_def = {
        cadastro: () => {
            $("#cadastro").show();
            $("#login").hide();
            $("#esqueceu-senha").hide();
        },
        login: () => {
            $("#cadastro").hide();
            $("#login").show();
            $("#esqueceu-senha").hide();
        },
        recuperarsenha: () => {
            $("#cadastro").hide();
            $("#login").hide();
            $("#esqueceu-senha").show();
        }
    }

    switch(data["tela"]){
        case "cadastro":
            tela_def.cadastro();
            break;
        case "login":
            tela_def.login();
            break;
        case "recuperarsenha":
            tela_def.recuperarsenha();
            break;
        default: 
            tela_def.cadastro();
            break;
    }

});
//Evento de mudança para tela de login
$("#entre").on("click", () => {
    // $("#cadastro").hide();
    // $("#login").show();
    // $("#esqueceu-senha").hide();
});

//#endregion

//#region CADASTRO 
//Formatação e animação da tela
$(document).ready(() => {
    let wid = [190, 220, 245, 185, 210, 180];

    //Formatação de divs da direita
    for(let i = 1; i <= wid.length; i++){
        // width = Math.floor(max_width * Math.random());
        // height = Math.floor(max_height * Math.random());

        // width = width < 140 ? 140: width;
        // heigth = height < 70 ? 70: height;

        $("#right" + i).css("width", wid[i] + "px");
        // $("#right" + i).css("height", height + "px");        
    }
    //Formatação de divs da esquerda
    for(let i = 1; i <= wid.length; i++){
        // width = Math.floor(max_width * Math.random());
        // height = Math.floor(max_height * Math.random());

        // width = width < 140 ? 140: width;
        // heigth = height < 70 ? 70: height;

        $("#left" + i).css("width", wid[i] + "px");
        // $("#left" + i).css("height", height + "px");
    }
});

$("#cadastrar").on("click", () => {

    let nome = $("input[name=usuario]").val();
    let email = $("input[name=email]").val();
    let senha = $("input[name=senha]").val();
    
    if(nome == "" || email == "" || senha == ""){
        bootbox.alert("Por favor, preencha todos os campos!");
    }else{
        loadShow();
        $.ajax({
            method: "POST",
            url: "../ASCINC/login.php",
            data: {
                metodo: "cadastrar",
                nome: nome,
                email: email,
                senha: senha
            }
        }).done((data) => {
            loadHide();
            if(data.data){
                window.location.href = "localhost/PROJTHIS/VIEW/";
            }
            bootbox.alert(data.mensagem);
        }).fail((ex) => {
            loadHide();
            bootbox.alert("Ops, ocorreu uma falha na requisição");
        });
        
    }    
});
//#endregion