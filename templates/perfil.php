<!DOCTYPE html>
<html>

<head>
  <title>Pesquisa de satisfação v1.0</title>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/design.css">
  <script src="js/numero.js"></script>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="../index.html">HC Comes First</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="../index.html">Página Inicial</a></li>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="como-funciona.html">Como funciona</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="cadastro.html">Cadastre-se  <i class="fa fa-user-plus"></i></a></li>
          <li><a href="login.html">Faça seu login  <i class="fa fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" maxlength="60">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Avenida Moraes Sales">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Cidade</label>
          <input type="text" class="form-control" id="inputCity" maxlength="40">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Estado</label>
          <select id="inputState" class="form-control">
          <option selected>Selecione...</option>
          <option>(AC)</option>
          <option>(AL)</option>
          <option>(AP)</option>
          <option>(AM)</option>
          <option>(BA)</option>
          <option>(CE)</option>
          <option>(DF)</option>
          <option>(ES)</option>
          <option>(GO)</option>
          <option>(MA)</option>
          <option>(MT)</option>
          <option>(MS)</option>
          <option>(MG)</option>
          <option>(PA)</option>
          <option>(PB)</option>
          <option>(PR)</option>
          <option>(PI)</option>
          <option>(RJ)</option>
          <option>(RN)</option>
          <option>(RS)</option>
          <option>(RO))</option>
          <option>(RR)</option>
          <option>(MS)</option>
          <option>(SC)</option>
          <option>(SP)</option>
          <option>(SE)</option>
          <option>(TO)</option>
        </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">CEP</label>
          <input type="text" class="form-control" id="txtNumber" maxlength="8" onkeypress="return isNumberKey(event)"   type="text" name="txtNumber">
        </div>
      </div>
      <div class="form-group">
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>


    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
