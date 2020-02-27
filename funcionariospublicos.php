//classe para incluir os funcionários públicos a consultar

<?php

    class funcionariospublicos {

        private $id;
        private $nome;
        private $cargo;
        private $salario;        

       public function setNome($Pnome){
            $this->nome = $Pnome;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setCargo($Pcargo){
        $this->cargo = $Pcargo;
        }
        public function getCargo(){
          return $this->cargo;
        }

        public function setSalario($Psalario){
          $this->salario = $Psalario;
        }

        public function getSalario(){
          return $this->salario;
        }  
}
?>
