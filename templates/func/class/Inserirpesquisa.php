<?php


      class Inserirpesquisa{
        /* Objetos da classe Inserirpesquisa */
        private $idForm;
        private $cod;
        private $q1;
        private $q2;
        private $q3;
        private $q4;
        private $q5;
        /* Fim Objetos da classe Inserirpesquisa */

        /* Get e Set classe Inserirpesquisa */
        public function getIdForm(){
            return $this->idForm;
        }
        public function setIdForm($value){
            $this->idForm = $value;
        }

        public function getCod(){
            return $this->cod;
        }
        public function setCod($value){
            $this->cod = $value;
        }

        public function getQ1(){
            return $this->q1;
        }
        public function setQ1($value){
            $this->q1 = $value;
        }

        public function getQ2(){
            return $this->q2;
        }
        public function setQ2($value){
            $this->q2 = $value;
        }

        public function getQ3(){
            return $this->q3;
        }
        public function setQ3($value){
            $this->q3 = $value;
        }

        public function getQ4(){
            return $this->q4;
        }
        public function setQ4($value){
            $this->q4 = $value;
        }

        public function getQ5(){
            return $this->q5;
        }
        public function setQ5($value){
            $this->q5 = $value;
        }
        /* Get e Set classe Inserirpesquisa */

        /* Construtor classe Inserirpesquisa */
        public function __construct($cod = "", $q1 = "", $q2 = "", $q3 = "", $q4 = "", $q5 = ""){
            $this->setCod($cod);
            $this->setQ1($q1);
            $this->setQ2($q2);
            $this->setQ3($q3);
            $this->setQ4($q4);
            $this->setQ5($q5);
        }
        /* Fim Construtor classe Inserirpesquisa */

        /* Metodo - setData classe Inserirpesquisa (retorna os dados) */
        public function setData($data){
          $this->setCod($data['cod']);
          $this->setQ1($data['q1']);
          $this->setQ2($data['q2']);
          $this->setQ3($data['q3']);
          $this->setQ4($data['q4']);
          $this->setQ5($data['q5']);
        }
        /* Metodo - setData classe Inserirpesquisa (retorna os dados) */

        /* Metodo insert (para para inserir resposta)*/
        public function insert(){
          $sql = new Sql();
          $in = $sql->select("CALL form_insert(:COD, :Q1, :Q2, :Q3, :Q4, :Q5)", array(
              ":COD"=>$this->getCod(),
              ":Q1"=>$this->getQ1(),
              ":Q2"=>$this->getQ2(),
              ":Q3"=>$this->getQ3(),
              ":Q4"=>$this->getQ4(),
              ":Q5"=>$this->getQ5()
            ));
        }
        /* Fim Metodo insert (para para inserir resposta)*/
        public function q1Dado($cod){
            $sql = new Sql();
            $results = $sql->select("SELECT q1 FROM form WHERE cod = :COD", array(
                ":COD"=>$cod
            ));
            if(count($results) > 0){
              $dados = $results;
              $excelente = 0;
              $bom = 0;
              $regular = 0;
              $ruim = 0;
              foreach ($dados as $row) {
                foreach ($row as $key) {
                  if ($row['q1'] == "1") {
                    $excelente += 1;
                  }elseif ($row['q1'] == "2") {
                    $bom += 1;
                  }elseif ($row['q1'] == "3") {
                    $regular += 1;
                  }else{
                    $ruim += 1;
                  }
                }
              }
              $info = array('Excelente' => $excelente, 'Bom' => $bom, 'Regular' => $regular, 'Ruim' => $ruim);
              return $info;
            }

        }

        public function q2Dado($cod){
            $sql = new Sql();
            $results = $sql->select("SELECT q2 FROM form WHERE cod = :COD", array(
                ":COD"=>$cod
            ));
            if(count($results) > 0){
              $dados = $results;
              $q2excelente = 0;
              $q2bom = 0;
              $q2regular = 0;
              $q2ruim = 0;
              foreach ($dados as $row) {
                foreach ($row as $key) {
                  if ($row['q2'] == "1") {
                    $q2excelente += 1;
                  }elseif ($row['q2'] == "2") {
                    $q2bom += 1;
                  }elseif ($row['q2'] == "3") {
                    $q2regular += 1;
                  }else{
                    $q2ruim += 1;
                  }
                }
              }
              $info = array('Excelente' => $q2excelente, 'Bom' => $q2bom, 'Regular' => $q2regular, 'Ruim' => $q2ruim);
              return $info;
            }

        }


        public function q3Dado($cod){
            $sql = new Sql();
            $results = $sql->select("SELECT q3 FROM form WHERE cod = :COD", array(
                ":COD"=>$cod
            ));
            if(count($results) > 0){
              $dados = $results;
              $q3excelente = 0;
              $q3bom = 0;
              $q3regular = 0;
              $q3ruim = 0;
              foreach ($dados as $row) {
                foreach ($row as $key) {
                  if ($row['q3'] == "1") {
                    $q3excelente += 1;
                  }elseif ($row['q3'] == "2") {
                    $q3bom += 1;
                  }elseif ($row['q3'] == "3") {
                    $q3regular += 1;
                  }else{
                    $q3ruim += 1;
                  }
                }
              }
              $info = array('Excelente' => $q3excelente, 'Bom' => $q3bom, 'Regular' => $q3regular, 'Ruim' => $q3ruim);
              return $info;
            }

        }

        public function q4Dado($cod){
            $sql = new Sql();
            $results = $sql->select("SELECT q4 FROM form WHERE cod = :COD", array(
                ":COD"=>$cod
            ));
            if(count($results) > 0){
              $dados = $results;
              $q4excelente = 0;
              $q4bom = 0;
              $q4regular = 0;
              $q4ruim = 0;
              foreach ($dados as $row) {
                foreach ($row as $key) {
                  if ($row['q4'] == "1") {
                    $q4excelente += 1;
                  }elseif ($row['q4'] == "2") {
                    $q4bom += 1;
                  }elseif ($row['q4'] == "3") {
                    $q4regular += 1;
                  }else{
                    $q4ruim += 1;
                  }
                }
              }
              $info = array('Excelente' => $q4excelente, 'Bom' => $q4bom, 'Regular' => $q4regular, 'Ruim' => $q4ruim);
              return $info;
            }

        }

        /* Metodo buscaDado (para buscar dados)*/



        /* Fim Metodo buscaDado (para buscar dados)*/


        /* Metodo - toString classe Usuario (retorna formatado em json) */
        public function __toString(){
            return json_encode(array(
                "cod"=>$this->getCod(),
                "q1"=>$this->getQ1(),
                "q2"=>$this->getQ2(),
                "q3"=>$this->getQ3(),
                "q4"=>$this->getQ4(),
                "q5"=>$this->getQ5(),
            ));
        }
        /* Fim Metodo - toString classe Usuario (retorna formatado em json) */

      }


 ?>
