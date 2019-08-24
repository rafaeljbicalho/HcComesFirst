<?php

    class Gerarpages extends Usuario{

        private $path = "../pesquisa/";

        private $ext = ".php";

        private $pghotel = '<!-- código php -->
        <?php

             $pesquisa = isset($_GET['."'".'pesquisa'."'".' ]) ? $_GET['."'".'pesquisa'."'".' ] : 0 ; # if ternário
             $q1 = 0;
             $q2 = 0;
             $q3 = 0;
             $q4 = 0;

        ?>

        <!DOCTYPE html>
        <html>

        <head>
          <title>Formulário de Pesquisa - Hotel</title>
          <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="icon" href="img/favicon.png">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
          <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
          <link rel="stylesheet" type="text/css" href="../../css/design.css">
        </head>

        <body id="pesquisaBody" class="pesquisa">
          <form method="post" action="../func/registraPesquisa">
            <div class="container">
              <!--alinha ao centro-->
              <div id="colorJumbotron" class="jumbotron">
                <!-- cria o jumbotron-->
                <!--
                      Padrão.
                      1 = Excelente
                      2 = Bom
                      3 = Regular
                      4 = Ruim
                      e toda caixa de texto com limite de 500 caracteres
                  -->

                <div class="pesquisa">
                  <h2>HC - Comes First - Pesquisa de satisfação - Hotel</h2><br><br>
                  <h6> Responda a pesquisa conforme as instruções abaixo:</h6>
                  <p> 1 = Excelente </p>
                  <p> 2 = Bom </p>
                  <p> 3 = Regular </p>
                  <p> 4 = Ruim </p>

                  <!-- tabela para as pesquisas -->
                  <table>
                    <tr>
                      <th></th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                    </tr>
                    <tr>
                      <td><label for="q1">Como você avalia o serviço de recepção do hotel?</label></td>
                      <td><input type="radio" name="q1" id="q1" value="1" required="requiored" <?php $q1==1 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q1" id="q1" value="2" required="requiored" <?php $q1==2 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q1" id="q1" value="3" required="requiored" <?php $q1==3 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q1" id="q1" value="4" required="requiored" <?php $q1==4 ? "checked" : null; ?></td>
                    </tr>
                    <tr>
                      <td><label for="q2">Com você avalia o serviço de quarto do hotel?</label></td>
                      <td><input type="radio" name="q2" id="q2" value="1" required="requiored" <?php $q2==1 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q2" id="q2" value="2" required="requiored" <?php $q2==2 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q2" id="q2" value="3" required="requiored" <?php $q2==3 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q2" id="q2" value="4" required="requiored" <?php $q2==4 ? "checked" : null; ?></td>
                    </tr>
                    <tr>
                      <td><label for="q3">Como você avalia o serviço de nossa cozinha?</label></td>
                      <td><input type="radio" name="q3" id="q3" value="1" required="requiored" <?php $q3==1 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q3" id="q3" value="2" required="requiored" <?php $q3==2 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q3" id="q3" value="3" required="requiored" <?php $q3==3 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q3" id="q3" value="4" required="requiored" <?php $q3==4 ? "checked" : null; ?></td>
                    </tr>
                    <tr>
                      <td><label for="q4">Como você avalia a qualidade de nossa internet?</label></td>
                      <td><input type="radio" name="q4" id="q4" value="1" required="requiored" <?php $q4==1 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q4" id="q4" value="2" required="requiored" <?php $q4==2 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q4" id="q4" value="3" required="requiored" <?php $q4==3 ? "checked" : null; ?></td>
                      <td><input type="radio" name="q4" id="q4" value="4" required="requiored" <?php $q4==4 ? "checked" : null; ?></td>
                    </tr>
                  </table>
                  <br>
                  <label for="q5"> Deixe seu comentário sobre o nosso hotel:</label><br>
                  <textarea name="q5" id="q5" rows="5" cols="50" maxlength="500"></textarea>
                </div>
                <div class="">
                  <label for="pesquisa">Codigo</label><br>
                  <input type="text" size="35" name="pesquisa" value="<?php echo $pesquisa;?>" readonly="readonly">
                </div>
                <div class="">
                  <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
          </form>
          <!-- scripts, não remover -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>

        </html>';

        private $pgres = '<!-- código php -->
        <?php

             $pesquisa = isset($_GET['."'".'pesquisa'."'".' ]) ? $_GET['."'".'pesquisa'."'".' ] : 0 ; # if ternário
             $q1 = 0;
             $q2 = 0;
             $q3 = 0;
             $q4 = 0;

        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Formulário de Pesquisa - Restaurante</title>
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="icon" href="img/favicon.png">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
            <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="../../css/design.css">
          </head>
          <body id="pesquisaBody" class="pesquisa">
            <form method="post" action="../func/registraPesquisa">
              <div class="container"> <!--alinha ao centro-->
                <div id="colorJumbotron" class="jumbotron">
                  <!-- cria o jumbotron-->
                  <!--
                        Padrão.
                        1 = Excelente
                        2 = Bom
                        3 = Regular
                        4 = Ruim
                        e toda caixa de texto com limite de 500 caracteres
                    -->


          <div class="pesquisa">
          <h2>HC - Comes First - Pesquisa de satisfação - Restaurante</h2><br><br>
          <h6> Responda a pesquisa conforme as instruções abaixo:</h6>
          <p> 1 = Excelente </p>
          <p> 2 = Bom </p>
          <p> 3 = Regular </p>
          <p> 4 = Ruim </p>
          <!-- tabela para as pesquisas -->
          <table>
            <tr>
              <th></th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
            </tr>
            <tr>
              <td><label for="q1">Como foi sua recepção em nosso restaurante?</label></td>
              <td><input type="radio" name="q1" id="q1" value="1" required="requiored" <?php  $q1 == 1 ? "checked" : 0; ?></td>
              <td><input type="radio" name="q1" id="q1" value="2" required="requiored" <?php  $q1 == 2 ? "checked" : 0; ?></td>
              <td><input type="radio" name="q1" id="q1" value="3" required="requiored" <?php  $q1 == 3 ? "checked" : 0; ?></td>
              <td><input type="radio" name="q1" id="q1" value="4" required="requiored" <?php  $q1 == 4 ? "checked" : 0; ?></td>
            </tr>
            <tr>
              <td><label for="q2">Como você avalia nosso funcionários?</label></td>
              <td><input type="radio" name="q2" id="q2" value="1" required="requiored" <?php $q2 == 1 ? "checked" : null; ?></td>
              <td><input type="radio" name="q2" id="q2" value="2" required="requiored" <?php $q2 == 2 ? "checked" : null; ?></td>
              <td><input type="radio" name="q2" id="q2" value="3" required="requiored" <?php $q2 == 3 ? "checked" : null; ?></td>
              <td><input type="radio" name="q2" id="q2" value="4" required="requiored" <?php $q2 == 4 ? "checked" : null; ?></td>
            </tr>
            <tr>
              <td><label for="q3">Como você avalia o serviço de nossa cozinha?</label></td>
              <td><input type="radio" name="q3" id="q3" value="1" required="requiored" <?php $q3 == 1 ? "checked" : null; ?></td>
              <td><input type="radio" name="q3" id="q3" value="2" required="requiored" <?php $q3 == 2 ? "checked" : null; ?></td>
              <td><input type="radio" name="q3" id="q3" value="3" required="requiored" <?php $q3 == 3 ? "checked" : null; ?></td>
              <td><input type="radio" name="q3" id="q3" value="4" required="requiored" <?php $q3 == 4 ? "checked" : null; ?></td>
            </tr>
            <tr>
              <td><label for="q4">Como você avalia a limpeza de nosso estabelecimento?</label></td>
              <td><input type="radio" name="q4" id="q4" value="1" required="requiored" <?php $q4 == 1 ? "checked" : null; ?></td>
              <td><input type="radio" name="q4" id="q4" value="2" required="requiored" <?php $q4 == 2 ? "checked" : null; ?></td>
              <td><input type="radio" name="q4" id="q4" value="3" required="requiored" <?php $q4 == 3 ? "checked" : null; ?></td>
              <td><input type="radio" name="q4" id="q4" value="4" required="requiored" <?php $q4 == 4 ? "checked" : null; ?></td>
            </tr>
          </table><br>
                <label for="q5"> Deixe seu comentário sobre nosso restaurante:</label><br>
                <textarea name="q5" id="q5" rows="5" cols="50" maxlength="500"></textarea>
              </div>
              <div class="">
                <label for="pesquisa">Codigo</label><br>
                <input type="text" size="35" name="pesquisa" value="<?php echo $pesquisa;?>" readonly="readonly">
              </div>
              <div class="">
                <button type="submit" class="btn btn-dark" >Enviar</button>
              </div>
            </form>
            <!-- scripts, não remover -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          </body>
        </html>';

        private $pgensino = '<!-- código php -->
        <?php

             $pesquisa = isset($_GET['."'".'pesquisa'."'".' ]) ? $_GET['."'".'pesquisa'."'".' ] : 0 ; # if ternário
             $q1 = 0;
             $q2 = 0;
             $q3 = 0;
             $q4 = 0;

        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Formulário de Pesquisa - Int. Ensino</title>
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="icon" href="img/favicon.png">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
            <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="../../css/design.css">
          </head>
          <body id="pesquisaBody" class="pesquisa">
            <form method="post" action="../func/registraPesquisa">
              <div class="container"> <!--alinha ao centro-->
                <div id="colorJumbotron" class="jumbotron">
                  <!-- cria o jumbotron-->
                  <!--
                        Padrão.
                        1 = Excelente
                        2 = Bom
                        3 = Regular
                        4 = Ruim
                        e toda caixa de texto com limite de 500 caracteres
                    -->

                    <div class="pesquisa">
                      <h2>HC - Comes First - Pesquisa de satisfação - Instituição de Ensino</h2><br><br>
                      <h6> Responda a pesquisa conforme as instruções abaixo:</h6>
                      <p> 1 = Excelente </p>
                      <p> 2 = Bom </p>
                      <p> 3 = Regular </p>
                      <p> 4 = Ruim </p>

        <!-- tabela para as pesquisas -->
                <table>
                <tr>
                  <th></th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                </tr>
                <tr>
                  <td><label for="q1">Como você avalia a qualidade de nossos professores? </label></td>
                  <td><input type="radio" name="q1" id="q1" value="1" required="requiored" <?php  $q1 == 1 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q1" id="q1" value="2" required="requiored" <?php  $q1 == 2 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q1" id="q1" value="3" required="requiored" <?php  $q1 == 3 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q1" id="q1" value="4" required="requiored" <?php  $q1 == 4 ? "checked" : null; ?></td>
                </tr>
                <tr>
                  <td><label for="q2">Como você avalia o sistema de avaliação da Faculdade?</label></td>
                  <td><input type="radio" name="q2" id="q2" value="1" required="requiored" <?php $q2 == 1 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q2" id="q2" value="2" required="requiored" <?php $q2 == 2 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q2" id="q2" value="3" required="requiored" <?php $q2 == 3 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q2" id="q2" value="4" required="requiored" <?php $q2 == 4 ? "checked" : null; ?></td>
                </tr>
                <tr>
                  <td><label for="q3">Como você avalia o suporte dos professores fora da sala de aula?</label></td>
                  <td><input type="radio" name="q3" id="q3" value="1" required="requiored" <?php $q3 == 1 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q3" id="q3" value="2" required="requiored" <?php $q3 == 2 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q3" id="q3" value="3" required="requiored" <?php $q3 == 3 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q3" id="q3" value="4" required="requiored" <?php $q3 == 4 ? "checked" : null; ?></td>
                </tr>
                <tr>
                  <td><label for="q4">Como você avalia o atendimento na secretaria de nossa Faculdade?</label></td>
                  <td><input type="radio" name="q4" id="q4" value="1" required="requiored" <?php $q4 == 1 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q4" id="q4" value="2" required="requiored" <?php $q4 == 2 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q4" id="q4" value="3" required="requiored" <?php $q4 == 3 ? "checked" : null; ?></td>
                  <td><input type="radio" name="q4" id="q4" value="4" required="requiored" <?php $q4 == 4 ? "checked" : null; ?></td>
                </tr>
              </table>
              <br>
              <label for="q5"> Deixe seu comentário sobre a nossa Instituição:</label><br>
              <textarea name="q5" id="q5" rows="5" cols="50" maxlength="500"></textarea>
            </div>
            <div class="">
              <label for="pesquisa">Codigo</label><br>
              <input type="text" size="35" name="pesquisa" value="<?php echo $pesquisa;?>" readonly="readonly">
            </div>
            <div class="">
              <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </form>
            <!-- scripts, não remover -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          </body>
        </html>';



        /* Metodo - Contrutor de pagina Hotel */
        public function hotel($nome){
          $mod = "x+";
          $file = fopen($nome, $mod);
          fwrite($file, $this->pghotel);
          fclose($file);
        }
        /* Metodo - Contrutor de pagina Hotel*/

        /* Metodo - Contrutor de pagina Ensino */
        public function ensino($nome){
          $mod = "x+";
          $file = fopen($nome, $mod);
          fwrite($file, $this->pgensino);
          fclose($file);
        }
        /* Metodo - Contrutor de pagina Ensino*/

        /* Metodo - Contrutor de pagina Hotel */
        public function restaurante($nome){
          $mod = "x+";
          $file = fopen($nome, $mod);
          fwrite($file, $this->pgres);
          fclose($file);
        }
        /* Metodo - Contrutor de pagina Hotel*/

        public function criaLink($nomeEmpresa, $email, $ramo){
           $sql = new Sql();
           $results = $sql->select("SELECT * FROM Cliente WHERE email = :EMAIL", array(
                 ":EMAIL"=>$email

           ));
              if(count($results) > 0){
                  $dados = $results;
                  $user = new Usuario;
                  $user->setData($dados[0]);

                  #Se for hotel faz essa.
                   if($user->getRamoAtividade() === "Hotél"){
                      $cp = md5($email);
                      $mail = $this->path . $nomeEmpresa . $this->ext;
                      $pg = $this->hotel($mail);
                      return $pagina = 'http://www.fabianobasso.com:8080/templates/pesquisa/' . $nomeEmpresa . '?pesquisa=' .$cp;


                      #Se for restaurante faz essa
                    }elseif ($user->getRamoAtividade() === "Restaurante") {
                          $cp = md5($email);
                          $mail = $this->path . $nomeEmpresa . $this->ext;
                          $pg = $this->restaurante($mail);
                          return $pagina = 'http://www.fabianobasso.com:8080/templates/pesquisa/' . $nomeEmpresa . '?pesquisa=' .$cp;

                      #Se não faz ensino
                      }else {

                          $cp = md5($email);
                          $mail = $this->path . $nomeEmpresa . $this->ext;
                          $pg = $this->ensino($mail);
                          return $pagina = 'http://www.fabianobasso.com:8080/templates/pesquisa/' . $nomeEmpresa . '?pesquisa=' .$cp;

              }

            }else{
               throw new Exception("Falha Arquivo já existe");
            }

        }

        /* Fim Metodo - Criar formulario*/


    }


 ?>
