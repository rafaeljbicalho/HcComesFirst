<?php

  session_start();


  unset($_SESSION['idCliente']);
  unset($_SESSION['nomeEmpresa']);
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['ramoAtividade']);
  unset($_SESSION['tipoConta']);

  header('Location: ../../index');

 ?>
