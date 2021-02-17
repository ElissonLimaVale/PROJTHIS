<?php //include "../CONTROLLER/HomePageController.php";
session_start();
if(isset($_SESSION['usuario'])){
    
}
$caminho = array("imagens/voo.png", 
    "imagens/teste.jpg",
    "imagens/veio.jpg",
    "imagens/minhoca.jpg",
    "imagens/among.jpg",
    "imagens/bob.jpg",
    "imagens/free.jpeg",
    "imagens/arqueiro.jpg",
    "imagens/lupa2.png"
);
include "../CONTROLLER/LoginController.php";
//Exibe o nome do computador do usuario
//echo "<script> alert('Computer name: ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."'); </script>";
?>
<!DOCTYPE html/>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Projthis, compartilhe seus projetos</title>
    <link id="logo-tipo" rel="icon" href="imagens/logo-tipo.png"/>
    <link rel="preload" as="image" href="imagens/user-heppy.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="estilo/globalpc.css"/>
    <link rel="stylesheet" type="text/css" href="estilo/globalmobile.css"/>
    <link rel="stylesheet" type="text/css" href="estilo/inicio.css"/>
    <link rel="preload" as="script" href="scripts/global.js"/>
   
</head>
<body onload="loadHide();">
    <!-- load para eventos e requsições ascincronas -->
    <!-- <div id='load-area'><div id='load-loop'></div></div> -->

    <nav id="campo-menu" class="nav-top">
        <div>
            <div id="menu-button"></div>
            <a href="/projthis/view/"><div id="logo"></div></a>
        </div>
        <ul class="menu">
            <li id="inicio" class="item-menu">Início</li>
            <li id="categorias" class="item-menu">Categorias</li>
            <li id="comunidade" class="item-menu">Comunidade</li>
            <li id="duvidas" class="item-menu">Dúvidas</li>
            <li id="sobre" class="item-menu">Sobre</li>
            <li id="lupa" style="padding: 0px;"></li>
            <li id="conta" class="item-menu">Conta</li>
            <li id="icon-user" style="padding: 0px;"></li>
        </ul>
        <div class='searsh-area' method='post' action='index.php' hidden='true'> 
            <button class='searsh-button-hide' onclick='Search.Close();'></button>
            <input id='search' name='pesquisar' placeholder='Pesquisar..'/> 
            <button type='submit' class='searsh-button' onclick='search();'></button> 
        </div>
    </nav>
    <!-- Template -->
    <?php if (isset($_SESSION["usuario"])) 
    {
    ?>
    <!-- QUANDO O USUARIO ESTA LOGADO -->
        
    <div class="projthis-container-white">
        <div class="projthis-container-50">
            <div style="width: 100%; height: 70px;">
            </div>
            <div >
                <label class="projthis-title" style="margin: 10px;">Crie uma comunidade</label>
                <i></i>
            </div>
            <div>
                <label class="projthis-sub-title" style="margin: 12px;">Comunidades que você participa:</label>
            </div>
            <div id="his_comunidades">
                <?php 
                    foreach($caminho as $item){
                ?>
                    <!--foreach para resultado de ultimas visualizações -->
                    <div class="item-ultimos" style="background: url('<?=$item?>') no-repeat;background-size: 180%;background-position: 50%;"></div>
                <?php 
                    } 
                ?>
            </div>
            <div>
                <label class="projthis-sub-title" style="margin: 12px;">Continuar jogando:</label>
            </div>
            <div id="his_comunidades">
                <?php 
                    foreach($caminho as $item){
                ?>
                    <!--foreach para resultado de ultimas visualizações -->
                    <div class="item-ultimos" style="background: url('<?=$item?>') no-repeat;background-size: 180%;background-position: 50%;"></div>
                <?php 
                    } 
                ?>
            </div>
        </div>
        
        <div id="profile-data" class="projthis-container-50">
        </div>
    </div>
    
    
    <?php
    }
    else {
    ?>
    <!-- QUANDO O USUARIO ESTA DESLOGADO -->
    <div id="template">
        <div class="col-2">
            <h1 class="titulo-logo">Projthis</h1>
            <div class="titulo-div">
                <h1 class="titulo">Jogue,</h1>
                <h1 class="titulo">Crie e </h1>
                <h1 class="titulo">Opine</h1> 
            </div>
            <img id="pandora" src="imagens/pancorrendo.gif"/>
        </div>
        <div class="col-2">
            <a href="/projthis/view/login.php">
                <button class="projthis-button-orange" id="cadastre-se">Cadastre-se</button>
            </a>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <!-- AREA DE RESULTADO DE UMA PESQUISA -->
    <div id='search-result-area' hidden='true'>
        <div id='result-search'>
            <label id='titulo-search-area'>Resultados: <i id='close-result-search' onclick='Search.CloseArea();'></i></label>
            <?php 
            
            foreach($caminho as $back){
            ?>
            <div class='item-result'>
                <div class='icone-play' style="background: url('<?=$back?>') no-repeat;background-size: 120%;background-position: 50%;">
                    <div class='sub-search-result-div-item'>
                        <label class='buttom-item-result projthis-button-orange' href='#'>Acessar</label>
                    </div>
                </div>
                <label class='nome-play'>
                    Jogo do bicho
                </label>
                <label class='descricao-play'>
                    <p>Jogo do bicho, jogue com os amigos, elimine vilas
                    e teste seu taelinto em relação ao de todos ao seu redor.
                    Seus inimigos estaram todo online e esperando a parte deles 
                    nos aspectos de fazer partidas.
                    </p>
                </label>
            </div>
            <?php } ?>
        </div>
        <div id='bottom-header'>
            <ul id='number-pages'>
                <?php 
                for($i = 1; $i < 8;$i++) {
                ?>
                <li class='inumerable'><?php echo $i; ?></li>
                <?php 
                    if($i > 2){
                        echo "<li class='enumerable'>Mais</li>";
                        break;
                    }
                } ?>
            </ul>
        </div>
    </div>
    
    <!--- bibliotecas - frameworks - recursos --->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../PASTAS_PROJETO/ACE ADMIN/scripts/bootbox.js"></script>
    
    <!-- Scripts do do site-->
    <script src="scripts/global.js"></script>
    <script src="scripts/globalmobile.js"></script>
    <link rel="stylesheet" type="text/css" href="estilo/inicio.css"/>
    <script src="scripts/inicio.js"></script>
</body>
</html>
