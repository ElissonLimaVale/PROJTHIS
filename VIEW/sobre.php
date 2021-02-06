<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src='scripts/global.js'></script>
<link rel="stylesheet" type='text/css' href='estilo/globalpc.css'/>

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

<input type='text' class='projthis-input' placeholder='Pesquisar'/>

<button class='projthis-button-green'>Cadastrar</button>
<button class='projthis-button-blue'>Login</button>
<button class='projthis-button-orange'>Logout</button>

<div class='projthis-input-password'>
<i></i>
<input type='password' class='projthis-input' placeholder='Senha'/>
</div>
</body>
</html>