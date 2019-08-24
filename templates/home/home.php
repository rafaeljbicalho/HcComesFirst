<!-- código php - Fabiano -->
<?php

       session_start();
       if(!isset($_SESSION['email'])){
         header('Location: pgerror/erro403');
       }
       require_once("config.php");
       $title = $_SESSION['nomeEmpresa'];
       $cod = $_SESSION['email']

  ?>


<!DOCTYPE html>
<html lang="en">

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
            <a href="home">
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
              <a href="home">Tela inicial</a>

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
  <div id="telaInicial">
    <div class="text-telaInicial">
        <h1>Tela inicial</h1>
        <hr>
    </div>
  </div>

  <section id="infoPrincipal">
      <div class="container-fluid">
        <div class="row bloco1">

          <div class="boasVindas">
            <div class="caixaInfo">
              <?php echo '<h1>'.'Você esta logado com: '.ucfirst($cod).'</h1>' ; ?>
              <p>
                Seu Ultimo acesso foi: 00/00/0000 <br>
                Seu estabelecimento tem : X pesquisas respondidas <br>
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>

	<!-- scripts, não remover -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
