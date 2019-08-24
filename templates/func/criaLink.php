<?php
    session_start();
    require_once("config.php");
    $email = $_SESSION['email'];
    $nomeEmpresa = $_SESSION['nomeEmpresa'];
    $ramo = $_SESSION['ramoAtividade'];
    
    $homepg = new Gerarpages();
    $linkpagina = $homepg->criaLink($nomeEmpresa, $email, $ramo);

    var_dump($linkpagina);

?>
