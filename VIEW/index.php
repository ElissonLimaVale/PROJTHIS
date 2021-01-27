<?php //include "../CONTROLLER/HomePageController.php";
include "../CONTROLLER/LoginController.php";
//Exibe o nome do computador do usuario
//echo "<script> alert('Computer name: ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."'); </script>";
?>
<!DOCTYPE html/>
<html>
<head lang="pt-br">
    <style>
        /* #inicio {
            background-color: #1f9fe4;
            color: rgba(255, 255, 255, 0.966);
        } */
    </style>
    <meta charset="utf-8">
    <title>Projthis, compartilhe seus projetos</title>
    <link id="logo-tipo" rel="icon" href="imagens/logo-tipo.png"/>
    <link rel="preload" as="image" href="imagens/user-heppy.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
    <link rel="stylesheet" type="text/css" href="estilo/globalpc.css"/>
    <link rel="stylesheet" type="text/css" href="estilo/globalmobile.css"/>
    <!--link rel="preload" as="script" href="scripts/global.js"/ -->
   
</head>
<body>
    <nav id="campo-menu" class="nav-top">
        <div>
            <div id="menu-button"></div>
            <div id="logo"></div>
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
    </nav>
    <div id="template">
        <div class="div2">
            <h1 class="titulo-logo">Projthis</h1>
            <div class="titulo-div">
                <h1 class="titulo">Jogue,</h1>
                <h1 class="titulo">Crie e </h1>
                <h1 class="titulo">Opine</h1> 
            </div>
            <img id="pandora" src="imagens/pancorrendo.gif"/>
        </div>
        <div class="div2">

        </div>
    </div>

    
    <!-- AREA DE RESULTADO DE UMA PESQUISA -->
    <div id='search-result-area' hidden='true'>
        <div id='result-search'>
            <label id='titulo-search-area'>Resultados: <i id='close-result-search'></i></label>
            <?php 
            $caminho = array("imagens/voo.png", 
            "imagens/teste.jpg",
            "imagens/veio.jpg",
            "imagens/minhoca.jpg",
            "imagens/among.jpg",
            "imagens/bob.jpg",
            "imagens/free.jpeg",
            "imagens/arqueiro.jpg",
            "imagens/lupa2.png");
            for($i = 0; $i < 9;$i++){
            ?>
            <div class='item-result'>
                <div class='icone-play' style="background: url('<?php echo $caminho[$i]?>') no-repeat;background-size: 120%;background-position: 50%;">
                    <div class='sub-search-result-div-item'>
                        <label class='buttom-item-result' href='#'>Acessar</label>
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
    
    <!-- Scripts do do site-->
    <script src="scripts/global.js"></script>
    <script src="scripts/globalmobile.js"></script>
</body>
</html>
