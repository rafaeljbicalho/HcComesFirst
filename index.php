<!-- Não mudar o codigo abaixo -->
<?php
     # Testando se exite um erro caso contrário atribui sempre 0
     $erro = isset($_GET['erro']) ? $_GET['erro'] : 0 ; # if ternário
     # Testando Cadastro com sucesso
     $cadastro = isset($_GET['cadastro']) ? $_GET['cadastro'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HC comes first - Página Inicial</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/favicon.png">
  <!-- icones -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <!-- font google -->
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- css interno -->
  <link rel="stylesheet" type="text/css" href="css/design.css">
</head>
<body>
  <!-- nav bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="../index">HC Comes First</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item  active">
      <a class="nav-link" href="../index">Página Inicial <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="templates/sobre">Sobre</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="templates/como-funciona">Como funciona</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Cadastre-se  <i class="fa fa-user-plus"></i></a></li>
    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#mySecondModal">Faça seu login  <i class="fa fa-user"></i></a></li>
  </ul>
</div>
</nav>
<!-- fim nav bar -->

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 850px;">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="min-height: 850px;">
      <!-- primeiro slide -->
      <div class="carousel-item active" style="min-height: 850px;">
        <img style="min-height: 850px;" id="imagens" class="first-slide" src="img/hotel.jpg" width="1900" height="1200"alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h3 style="color: white;">Hotéis</h3>
            <p style="color: white;">Conheça melhor seus clientes</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Comece agora!</button>
          </div>
        </div>
      </div>
      <!-- segundo slide -->
      <div class="carousel-item" style="min-height: 850px;">
        <img style="min-height: 850px;" id="imagens" class="second-slide" src="img/restaurante.jpg" width="1900" height="1200"alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h3 style="color: white; text-align: center;">Restaurantes</h3>
            <p style="color: white;">Conheça melhor seus clientes</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Comece agora!</button>
          </div>
        </div>
      </div>
      <!-- terceiro slide -->
      <div class="carousel-item" style="min-height: 850px;">
        <img style="min-height: 850px;" id="imagens" class="third-slide" src="img/college.jpg" width="1900" height="1200"alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h3 style="color: black;">Intituições de ensino</h3>
            <p style="color: black;">Conheça melhor seus alunos</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Comece agora!</button>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</main>

  <!-- Modal - Cadasto efetuado com sucesso -->

  <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span></button> -->
          <h4 class="black" class="modal-title" id="myModalLabel">Seja um membro do HC - Cadastro</h4>
          <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span></button>
        </div>

        <div class="modal-body">
            <div class="black">
                <h2 class="modal-title">Cadastro efetuado com succeso</h2>
                <button type="button" class="btn btn-primary"><a href="index" style="color: white;">Página Inicial</a></button>
            </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Fim Modal - Cadasto efetuado com sucesso -->




  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span></button> -->
          <h4 class="black" class="modal-title" id="myModalLabel">Seja um membro do HC - Cadastro</h4>
          <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span></button>
        </div>


        <!-- Modal Body -->
        <div class="modal-body">

          <form method="post" action="/templates/func/cadastro" id="formCadastro" role="form">
            <!-- nome da empresa -->
            <div class="black" class="form-group">
              <label for="nomeEmpresa">Nome da Empresa</label>
              <input type="text" class="form-control" id="nomeEmpresa" name="nomeEmpresa" placeholder="Nome da empresa" required="requiored">
            </div>
            <!-- email -->
            <div class="black" class="form-group">
              <label for="emailContato">Email</label>
              <input type="email" class="form-control" id="emailContato" name="emailContato" placeholder="Email" required="requiored">
            </div>
            <!-- senha -->
            <div class="black" class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required="requiored">
            </div>
            <!-- tipo de conta -->
            <div class="black" class="form-group">
              <label for="tipoConta">Tipo de Conta</label>
              <select class="form-control" id="tipoConta" name="tipoConta" required="requiored">
                      <option selected></option>
                      <option>Grátis</option>
                  </select>
            </div>
            <!-- Ramo de atividade -->
            <div class="black" class="form-group">
              <label for="ramoAtividade">Ramo de Atividade</label>
              <select class="form-control" id="ramoAtividade" name="ramoAtividade" required="requiored">
                      <option selected></option>
                      <option>Hotél</option>
                      <option>Restaurante</option>
                      <option>Instituição de Ensino</option>
                  </select>
            </div>
            <!-- <div class="checkbox">
              <label>
              <input type="checkbox"/> Check me out
              </label>
            </div> -->
            <div id="botao">
              <button type="submit" class="btn btn-primary">Cadastre-se</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>

            <div class="black" class="form-group">
              <?php
                    if($erro == 1){
                        echo '<span class="error">'.'Esse e-mail já esta em uso'.'</span>';
                    }
               ?>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- fim do modal -->

  <!-- Modal Login -->
  <div class="modal fade" id="mySecondModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span></button> -->
          <h4 class="black" class="modal-title" id="myModalLabel">Seja bem vindo, faça seu login</h4>
          <button type="button" class="close" data-dismiss="modal">
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span></button>
        </div>

        <!-- Modal Login Body -->
        <div class="modal-body">

          <form method="post" action="/templates/func/validarAcesso" id="formValidadaeAcesso" role="form">
            <!-- email -->
            <div class="black" class="form-group">
              <label for="emailContato">Email</label>
              <input type="email" class="form-control" id="emailContato" name="emailContato" placeholder="Email" required="requiored">
            </div>
            <!-- Fim email -->

            <!-- senha -->
            <div class="black" class="form-group">
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required="requiored">
            </div>
            <!-- Fim senha -->

            <!-- botão validar acesso -->
            <div id="botao">
              <button type="submit" class="btn btn-primary">Login</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
            <div class="black" class="form-group">
              <?php
                    if($erro == 2){
                        echo '<span class="error">'.'Senha Inválida'.'</span>';
                    }
               ?>

               <?php
                     if($erro == 3){
                         echo '<span class="error">'.'Usuário Invalido'.'</span>';
                     }
                ?>
            </div>
          </form>
        </div><!-- Fim Modal Login Body -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

            <!-- Modal de Erro  -->
            <!-- Modal Cadastro - Se o codigo de erro for igual a 1 ele mostra automaticamente a modal-->
            <?php if($erro == 1) : ?>
            <script type="text/javascript">
            $(document).ready(function()
            {
            $("#myModal").modal("show");
            });
            </script>
            <?php endif;?>
            <!-- Fim Modal Cadastro - Se o codigo de erro for igual a 1 ele mostra automaticamente a modal-->
            <!-- Modal erro no login 2 = Senha inválida e 3 = Usuário não exite -->
            <?php if($erro == 2) : ?>
            <script type="text/javascript">
            $(document).ready(function()
            {
            $("#mySecondModal").modal("show");
            });
            </script>
            <?php endif;?>
            <?php if($erro == 3) : ?>
            <script type="text/javascript">
            $(document).ready(function()
            {
            $("#mySecondModal").modal("show");
            });
            </script>
            <?php endif;?>
            <!-- Modal erro no login 2 = Senha inválida e 3 = Usuário não exite -->
            <!-- Fim Modal de Erro  -->

            <!-- Modal Cadastro - Se o Cadastro for efetuado com sucesso abrir uma modal -->
            <?php if($cadastro == 1) : ?>
            <script type="text/javascript">
            $(document).ready(function()
            {
            $("#cadastro").modal("show");
            });
            </script>
            <?php endif;?>
            <!-- Modal Cadastro - Se o Cadastro for efetuado com sucesso abrir uma modal -->
</body>

</html>
