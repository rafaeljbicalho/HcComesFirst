<?php
      // session_start();
      require_once("config.php");
      $email = $_POST['emailContato'];
      $pass = md5($_POST['senha']);

      $login = new Usuario();
      $login->login($email, $pass);
      // var_dump($login);
      // var_dump($_SESSION['email']);

 ?>
