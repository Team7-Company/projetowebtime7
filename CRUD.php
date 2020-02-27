//CRUD em PHP 

<?php

include_once "DB.php";


abstract class CRUD extends DB{
    
    protected $tabela;
    
    abstract public function insert($nome,$cargo,$salario);
    abstract public function update($id);
    public function find($id){
        $sql = "Select * from $this->tabela where id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function findall(){
        $sql = "SELECT * FROM $this->tabela";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id){
        $sql = "DELETE FROM $this->tabela WHERE ID = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        return $stmt->execute();
    }
}

?>
