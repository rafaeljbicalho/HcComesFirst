<?php
      session_start();
      require_once("config.php");
      $title = $_SESSION['nomeEmpresa'];
      $cod = $_SESSION['email'];
      $tmd5 = md5($cod);

      $mostra = new Inserirpesquisa();
      $q1dados = $mostra->q1Dado($tmd5);
      $q2dados = $mostra->q2Dado($tmd5);
      $q3dados = $mostra->q3Dado($tmd5);
      $q4dados = $mostra->q4Dado($tmd5);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Config meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- essa tag e definir a largura para o tamanho que esteja utilizando -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Fabiano Basso Antonio">
    <title>HC comes first - <?php echo ucfirst($title); ?></title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body>
      <!-- Barra de Navegação -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-transparente">
              <!-- Logo -->
            <div class="navbar-brand">
                <a href="#">
                    <span class="img-logo"></span>
                </a><!-- Fim Logo -->
            </div>
            <!-- Nome da Empresa -->
            <div class="navbar-brand">
                <?php echo '<span class="titulo">'.ucfirst($title).'&nbsp;&nbsp;'.'</span>' ; ?>
            </div><!-- Nome da Empresa -->
            <!-- Botão para small device -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button><!-- Botão para small device -->
            <!-- Menu Principal -->
            <!-- justify-content-end Muda o alinhamento em bootstrap -->
            <div class="navbar navbar-nav justify-content-end collapse navbar-collapse" id="menuPrincipal">
                  <div class="navbar-nav dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Formulário de pesquisa
                    </a>
                    <div class="dropdown-menu dropdown-menu-left bgDiv" aria-labelledby="navbarDropdown1">
                      <a class="dropdown-item" href="#">Criar pesquisa</a>
                      <a class="dropdown-item" href="#">Link para pesquisa</a>
                      <a class="dropdown-item" href="#">Imprimir QRcode</a>
                    </div>
                  </div>
                <div class="dropdown navbar-nav">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Relatórios da pesquisa
                  </a>
                  <div class="dropdown-menu dropdown-menu-left bgDiv" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="dados">Relatório - Geral</a>
                    <a class="dropdown-item" href="#">Relatório - </a>
                    <a class="dropdown-item" href="#">Relatório - </a>
                  </div>
                </div>
                  <a class="disabled" href="#">Ajuda</a>
            </div><!-- Fim Menu Principal -->
            <span class="linhaVertical"></span>
            <!-- Menu do Usuário -->
            <div class="justify-content-end navbar-brand">
                  <div class="dropdown">
                    <a  href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="img-log"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right bgDiv" aria-labelledby="navbarDropdown">
                        <?php echo '<span class="emailEmpresa">'.'&nbsp;&nbsp;&nbsp;&nbsp;'.ucfirst($cod).'&nbsp;&nbsp;&nbsp;&nbsp;'.'</span>' ; ?>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Atualizar cadastro</a>
                      <a class="dropdown-item" href="#">Perfil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../func/sair">Sair da conta</a>
                    </div>
                  </div>
            </div><!-- Fim Menu do Usuário -->
      </nav><!-- Fim Barra de Navegação -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
