<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
<script src='scripts/global.js'></script>
<link rel="stylesheet" type='text/css' href='estilo/globalpc.css'/>


<!-- CSS ace admin -->
<!-- bootstrap & fontawesome -->
<!-- <link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/font-awesome.min.css" /> -->

<!-- page specific plugin styles -->
<!-- <link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/jquery-ui.custom.min.css" /> -->
<!-- <link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/jquery.gritter.min.css" /> -->

<!-- text fonts -->
<!-- <link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/fonts.googleapis.com.css" /> -->

<!-- ace styles -->
<!-- <link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" /> -->

<!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
<![endif]-->
<!-- <link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/ace-skins.min.css" />
<link rel="stylesheet" href="../PASTAS_PROJETO/ACE ADMIN/bootstrap/ace-rtl.min.css" /> -->

<!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!--- bibliotecas - frameworks - recursos --->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

</head>
<body onload="loadHide();">

<div id="logo"></div>

<div id='load-area'><div id='load-loop'></div></div>
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
    <div class='searsh-area' method='post' action='index.php' hidden='true'> 
        <button class='searsh-button-hide' onclick='Search.Close();'></button>
        <input id='search' name='pesquisar' placeholder='Pesquisar..'/> 
        <button type='submit' class='searsh-button' onclick='search();'></button> 
    </div>
</nav>
<div class="projthis-col-50">
    <div class="widget-header">
        Tela de sobre nós
    </div>
    <input type='text' class='projthis-input' placeholder='Pesquisar'/>

    <button class='projthis-button-green'>Cadastrar</button>
    <button class='projthis-button-blue'>Login</button>
    <button class='projthis-button-orange'>Logout</button>

    <div class='projthis-input-password'>
    <i></i>
    <input type='password' class='projthis-input' placeholder='Senha'/>
    </div>

</div>


<canvas></canvas>
<div class='col-md-3 col-md-6'>
<button class="btn btn-info">
<i class="ace-icon fa fa-check bigger-110"></i>
Teste
</button>
</div>

<!-- scripts ace admin -->
<!-- <script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='../PASTAS_PROJETO/ACE ADMIN/scripts/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script> -->

<!-- <script src="../PASTAS_PROJETO/ACE ADMIN/scripts/jquery-ui.custom.min.js"></script>
<script src="../PASTAS_PROJETO/ACE ADMIN/scripts/jquery.ui.touch-punch.min.js"></script> -->
<script src="../PASTAS_PROJETO/ACE ADMIN/scripts/bootbox.js"></script>
<!-- <script src="../PASTAS_PROJETO/ACE ADMIN/scripts/jquery.easypiechart.min.js"></script>
<script src="../PASTAS_PROJETO/ACE ADMIN/scripts/jquery.gritter.min.js"></script>
<script src="../PASTAS_PROJETO/ACE ADMIN/scripts/spin.js"></script> -->

<!-- ace scripts -->
<!-- <script src="../PASTAS_PROJETO/ACE ADMIN/scripts/ace-elements.min.js"></script>
<script src="../PASTAS_PROJETO/ACE ADMIN/scripts/ace.min.js"></script> -->

<!-- inline scripts related to this page -->
<script type="text/javascript">
</body>
</html>