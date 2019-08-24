<?php

    require_once("config.php");
     $empresa = $_POST['nomeEmpresa'];
     $email = $_POST['emailContato'];
     $pass = md5($_POST['senha']);
     $conta = $_POST['tipoConta'];
     $ramo = $_POST['ramoAtividade'];

     $usuario = new Usuario($empresa, $email, $pass, $ramo, $conta);
     $usuario->insert();

 ?>
