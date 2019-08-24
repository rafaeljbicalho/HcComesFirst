<?php
    session_start();
    require_once("config.php");
    $cod = $_POST['pesquisa'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];

    $cadastraPesquisa = new Inserirpesquisa($cod, $q1, $q2, $q3, $q4, $q5);
    $cadastraPesquisa->insert();

    header('Location: ../../index');


?>
