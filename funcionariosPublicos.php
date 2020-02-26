//classe para incluir os funcionários públicos a consultar

<?php
    include_once 'CRUD.php';

    class funcionariosPublicos extends CRUD{

        protected $tabela = “funcionariosPublicos”;
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

        public function insert(){
            $sql = "INSERT INTO $this->tabela (nome, cargo, salario ) VALUES (:nome, :cargo, :salario)";
            $stmt = DataBase::prepare($sql);
            $stmt->bindParam(':nome',$this->nome);
            $stmt->bindParam(‘:cargo',$this->cargo);
            $stmt->bindParam(‘:salario’,$this->salario);
            return $stmt->execute();
        }
        public function update($id){
            $sql = "UPDATE $this->tabela SET id = :id, nome = :nome, cargo = :cargo, salario = :salario";
            $stmt = DataBase::prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':nome',$this->nome);
            $stmt->bindParam(‘:cargo’,$this->cargo);
            $stmt->bindParam(‘:salario’,$this->salario);
            return $stmt->execute();
        }

        public function listall(){
            // Exibe todos os Contatos
            $sql = "SELECT * FROM contatos";
            $stmt = DataBase::prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($result as $row){
                 echo "<tr>";
                 echo "<td>" . $row['nome'] . "</td>";
                 echo "<td>" . $row[‘cargo’] . "</td>";
                 echo "<td>" . $row[‘salario] . "</td>";
                 echo "</tr>";
            }

        }


}
?>
