<?php //include "../CONTROLLER/HomePageController.php";
// include "../CONTROLLER/LoginController.php";
include "../ASCINC/login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <title>Projthis, cadastre-se</title>
    <link id="logo-tipo" rel="icon" href="imagens/logo-tipo.png"/>
    <link rel="preload" as="image" href="imagens/user-heppy.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="estilo/login.css"/>
    <link rel="stylesheet" type="text/css" href="estilo/globalpc.css"/>
    <link rel="stylesheet" type="text/css" href="estilo/globalmobile.css"/>
    <link rel="preload" as="script" href="scripts/global.js"/>
   
</head>
<body onload="loadHide();">
    <!-- load para eventos e requsições ascincronas -->
    <!-- <div id='load-area'><div id='load-loop'></div></div> -->


    <div id="cadastro">
        
        <div id = "logotipo"></div> 

        <h2 id="title">Crie sua conta!</h2>

        <p id="sub-title">Cadastre-se e participe da nossa comunidade, crie uma comunidade, crie projetos e principalmente divirta-se!</p>

        <div class="login-bar">
            <input class="projthis-input" type="text" name="usuario" placeholder="Nome de usuario" style=margin-top:20px; required/>

            <input class="projthis-input" type="email" name="email" placeholder="E-mail" style=margin-top:20px;margin-bottom:12px; required/>

            <div class="projthis-input-password"></div>

            <button id="cadastrar">Cadastrar</button>
        

        <p id="termos-condicoes">Ao se cadastrar você aceita automaticamente nossos </br> <a href="http://youtube.com">Termos e Condições</a></p>

    
        <h3 id="conta-entrar">Já tem uma conta? <a id="entre" href="http://youtube.com">Entre</a></h3>
        </div>
        
        <div id="left1" class="colunas"></div>
        <div id="left2" class="colunas"></div>
        <div id="left3" class="colunas"></div>
        <div id="left4" class="colunas"></div>
        <div id="left5" class="colunas"></div>
        <div id="left6" class="colunas"></div>

        <div id="right1" class="colunas"></div>
        <div id="right2" class="colunas"></div>
        <div id="right3" class="colunas"></div>
        <div id="right4" class="colunas"></div>
        <div id="right5" class="colunas"></div>
        <div id="right6" class="colunas"></div>
    </div>

    <div id="login" hidden="true">
        <div class="projthis-widget-box" style=width:500px;margin:50px>
            <div class="projthis-widget-header">
                Cadastro de Usuários sei lá qualquer coisa
            </div>
            <div style=width:100px;height:100px;background-color:red;margin:10px></div>
        </div>
    </div>

    <div id="esqueceu-senha">
    
    </div>

     <!--- bibliotecas - frameworks - recursos --->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- java script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../PASTAS_PROJETO/ACE ADMIN/scripts/bootbox.js"></script>
    
    <!-- Scripts do do site-->
    <script src="scripts/login.js"></script>
    <script src="scripts/global.js"></script>
</body>
</html>
