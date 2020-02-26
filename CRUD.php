//CRUD em PHP 

<?php

include_once 'DataBase.php';


abstract class CRUD extends DataBase{
    
    protected $tabela;
    
    abstract public function insert();
    abstract public function update($id);
    public function find($id){
        $sql = "Select * from $this->tabela where id = :id";
        $stmt = DataBase::prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function findall(){
        $sql = "SELECT * FROM $this->tabela";
        $stmt = DataBase::prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id){
        $sql = "DELETE FROM $this->tabela WHERE ID = :id";
        $stmt = DataBase::prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        return $stmt->execute();
    }
}

?>
