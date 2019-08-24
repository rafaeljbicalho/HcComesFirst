<?php

      Class Usuario{
        /* Objetos da classe Usuario */
        private $idcliente;
        private $nomeEmpresa;
        private $email;
        private $senha;
        private $ramoAtividade;
        private $tipoConta;
        /* Fim Objetos da classe Usuario */

        /* Get e Set classe Usuario */
        public function getIdcliente(){
            return $this->idcliente;
        }
        public function setIdcliente($value){
            $this->idcliente = $value;
        }

        public function getNomeEmpresa(){
            return $this->nomeEmpresa;
        }
        public function setNomeEmpresa($value){
            $this->nomeEmpresa = $value;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($value){
            $this->email = $value;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($value){
            $this->senha = $value;
        }

        public function getRamoAtividade(){
            return $this->ramoAtividade;
        }
        public function setRamoAtividade($value){
            $this->ramoAtividade = $value;
        }

        public function getTipoConta(){
            return $this->tipoConta;
        }
        public function setTipoConta($value){
            $this->tipoConta = $value;
        }
        /* Fim Get e Set classe Usuario */

        /* Construtor da classe Usuario */
        # Permite passar parametros ou não
        public function __construct($empresa = "", $email = "", $password = "", $ramo = "", $conta = ""){
             $this->setNomeEmpresa($empresa);
             $this->setEmail($email);
             $this->setSenha($password);
             $this->setRamoAtividade($ramo);
             $this->setTipoConta($conta);
        }
        /* Fim Construtor classe Usuario */

        /* Metodo - setData classe Usuario (retorna os dados) */
        public function setData($data){
            $this->setIdcliente($data['idCliente']);
            $this->setNomeEmpresa($data['nomeEmpresa']);
            $this->setEmail($data['email']);
            $this->setSenha($data['senha']);
            $this->setRamoAtividade($data['ramoAtividade']);
            $this->setTipoConta($data['tipoConta']);
        }
        /* Fim Metodo - setData classe Usuario (retorna os dados) */

        /* Metodo - getData classe Usuario (retorna os dados) */
        public function getData($data){
            $this->getIdcliente($data['idCliente']);
            $this->getNomeEmpresa($data['nomeEmpresa']);
            $this->getEmail($data['email']);
            $this->getSenha($data['senha']);
            $this->getRamoAtividade($data['ramoAtividade']);
            $this->getTipoConta($data['tipoConta']);
            return $data;
        }
        /* Fim Metodo - getData classe Usuario (retorna os dados) */

        /* Metodo - loadById classe Usuario (retorna um usuario pelo id) */
        public function loadById($id){

            $sql = new Sql();
            $results = $sql->select("SELECT * FROM Cliente WHERE idcliente = :ID", array(
                ":ID"=>$id
            ));
            // # Validar se existir
             if (count($results) > 0){
                 $this->setData($results[0]);
             }
        }
        /* Fim Metodo - loadById classe Usuario (retorna um usuario pelo id) */

        /* Metodo Select list (retorna uma lista)*/
        # Metodo static pode ser chamado direto.
        public static function getList(){
          $sql = new Sql();
          return $sql->select("SELECT * FROM Cliente ORDER BY nomeEmpresa;");
        }
        /* Fim Metodo Select list (retorna uma lista)*/

        /* Metodo search (procura no banco - adptar para qualquer condição)*/
        public static function search($email){
            $sql = new Sql();
            return $sql->select("SELECT * FROM Cliente WHERE email like :SEARCH ORDER BY nomeEmpresa", array(
                ':SEARCH'=>"%".$email."%"
            ));
        }
        /* Fim Metodo search (procura no banco - adptar para qualquer condição)*/

        /* Metodo Iniciar sessão de usuario*/
        public function user($data){

          $_SESSION['idCliente'] = $this->getIdcliente($data['idCliente']);
          $_SESSION['nomeEmpresa'] = $this->getNomeEmpresa($data['nomeEmpresa']);
          $_SESSION['email'] = $this->getEmail($data['email']);
          $_SESSION['senha'] = $this->getSenha($data['senha']);
          $_SESSION['ramoAtividade'] = $this->getRamoAtividade($data['ramoAtividade']);
          $_SESSION['tipoConta'] = $this->getTipoConta($data['tipoConta']);

        }
        /* Fim Metodo Iniciar sessão de usuario*/


        /* Metodo login (para validar o login)*/

        public function login($email, $password){
          $sql = new Sql();
          $results = $sql->select("SELECT * FROM Cliente WHERE email = :EMAIL AND senha = :PASSWORD", array(
                ":EMAIL"=>$email,
                ":PASSWORD"=>$password
          ));
          # Validar o Usuário
          if(count($results) > 0){
              session_start();
              $this->setData($results[0]);

              $this->user($results[0]);
              header('Location: ../home/home');
          }else{
              $remail = $sql->select("SELECT * FROM Cliente WHERE email = :EMAIL", array(
                    ":EMAIL"=>$email
              ));
              if (count($remail) > 0) {
                #Senha Invalida
                header('Location: ../../index?erro=2');
              }else{
                #Usuário invalido
                header('Location: ../../index?erro=3');
              }

          }



        }

        /* Fim Metodo login (para validar o login)*/

        /* Metodo insert (para para inserir usuario)*/

        public function insert(){
          $sql = new Sql();
          $results = $sql->select("SELECT * FROM Cliente WHERE email = :EMAIL", array(
                ":EMAIL"=>$this->getEmail()

          ));

          # Validar o Usuário por email caso já tenha cadastrado no banco
          if(count($results) > 0){
              # Redirecionamento - Email já exite.
              header('Location: ../../index?erro=1');
          }else{
               $sql = new Sql();
               $in = $sql->select("CALL cliente_insert(:NOMEEMPRESA, :EMAIL, :PASSWORD, :RAMO, :CONTA)", array(
                ':NOMEEMPRESA'=>$this->getNomeEmpresa(),
                 ':EMAIL'=>$this->getEmail(),
                 ':PASSWORD'=>$this->getSenha(),
                 ':RAMO'=>$this->getRamoAtividade(),
                 ':CONTA'=>$this->getTipoConta()
               ));
               # Redirecionamento - Cadastro efetuado com sucesso.
               header('Location: ../../index?cadastro=1');

          }
        }
        /* Fim Metodo insert (para para inserir usuario)*/

        /* Metodo - Update classe Usuario (para fazer atualização de algum dado) */

        public function update($nomeEmpresa, $conta){
          $this->setNomeEmpresa($nomeEmpresa);
          $this->setTipoConta($conta);
          $sql = new Sql();
          $sql->query("UPDATE Cliente SET nomeEmpresa = :NOMEEMPRESA, tipoConta = :CONTA WHERE idCliente = :ID", array(
              ':NOMEEMPRESA'=>$this->getNomeEmpresa(),
              ':CONTA'=>$this->getTipoConta(),
              ':ID'=>$this->getIdcliente()
          ));
        }

        /* Fim Metodo - Update classe Usuario (para fazer atualização de algum dado) */

        /* Fim Metodo - delete classe Usuario (deletar usuario) */

        public function delete(){
          $sql = new Sql();
          $sql->query("DELETE FROM Cliente WHERE idCliente = :ID", array(
              ':ID'=>$this->getIdcliente()
          ));
          $this->setIdcliente(0);
          $this->setNomeEmpresa("");
          $this->setEmail("");
          $this->setSenha("");
          $this->setRamoAtividade("");
          $this->setTipoConta("");
        }

         /* Metodo - Criar formulario
        public function criaLink($email,$ramo){
           $sql = new Sql();
           $results = $sql->select("SELECT * FROM Cliente WHERE email = :EMAIL", array(
                 ":EMAIL"=>$email

           ));
           if(count($results) > 0){
             $this->setData($results[0]);
             if($this->getRamoAtividade() == $ramo){
               return "Hotel";
             }elseif ($this->getRamoAtividade() == $ramo) {
               return "Restaurante";
             }else{
               return "Ensino";
             }


           }else{
             throw new Exception("Falha");

           }

        }

        Fim Metodo - Criar formulario */

        /* Fim Metodo - delete classe Usuario (deletar usuario) */

        /* Metodo - toString classe Usuario (retorna formatado em json) */
        public function __toString(){
            return json_encode(array(
                "idcliente"=>$this->getIdcliente(),
                "nomeEmpres"=>$this->getNomeEmpresa(),
                "email"=>$this->getEmail(),
                "tipoConta"=>$this->getTipoConta(),
                "ramoAtividade"=>$this->getRamoAtividade(),

            ));
        }
        /* Fim Metodo - toString classe Usuario (retorna formatado em json) */


      }
      /* Fim Classe Usuario Mysql */


 ?>
