<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preload" href="fonts/MaterialIconsRound-Regular.woff2" as="font">
    <link rel="stylesheet" href="css/core/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="envelope envelope--p">
        <header class="display-flex">    
            <h1 class="texto-titulo texto-titulo--h1">CityApp</h1>
            <i class="topo__icone mi">maps_home_work</i>
        </header>
        <h2 class="topo__subtitulo texto-titulo texto-titulo--h4" style="margin-top:16px;">Entre e faça parte dos mais de 50 milhões de usuários</h2>
        <div class="box" style="padding:32px 24px; margin-top:16px;">
            <form action="autenticar.php" method="POST">
                <div class="form-container">
                    <div class="form-label">E-mail:</div>
                    <input type="email" name="email" placeholder="Ex.: xiniga@gmail.com" class="form-input" required>
                </div>

                <div class="form-container">
                    <div class="form-label">Senha:</div>
                    <input type="password" name="senha" placeholder="Digite a sua senha" class="form-input" required>
                </div>

                <div class="display-flex" style="margin-top:16px;">
                    <input type="submit" value="Entre" class="botao mi--a" style="background-color:var(--cor-principal-3);">
                    <span class="texto-corpo" style="margin:0 8px;">ou</span>
                    <a href="cadastrar.php" class="botao mi--a" style="background-color:var(--cor-principal-5);" data-icone="chevron_right">Cadastre-se</a>
                </div>
                <div id="erro" style="visibility: hidden; color: red">
                    <h4>Email ou senha incorretos</h4>  <!-- Precisamos verificar se o usuario logou-->
                </div>
            </form>
        </div>
    </section>
</body>
</html>


<?php
session_start();
if(isset($_SESSION['tipo'])){
    if($_SESSION['tipo'] == 'c'){
        header("location: main-cidadao.php");
    }else if($_SESSION['tipo'] == 'p'){
        header("location: main-prefeitura.php");
    }
}
?>