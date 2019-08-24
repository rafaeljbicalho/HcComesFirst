<?php

      // Arquivo de config do site:

      // função para carregar as classes automatica do sistema
      spl_autoload_register(function($nameClass){
          $dirClass = "../func/class";
          $filename = str_replace("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
          // testa se exite a classe e inclui ela.
          if (file_exists($filename))
            {
              require_once($filename);
            }
      });

 ?>
