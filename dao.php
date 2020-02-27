<?php

	include_once "CRUD.php";
	
	class dao extends CRUD{
		
		protected $tabela = "funcionariospublicos";
		
		public function insert($nome,$cargo,$salario){
			$sql = "INSERT INTO $this->tabela (nome, cargo, salario) VALUES (:nome, :cargo, :salario)";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome',$nome);
			$stmt->bindParam(':cargo',$cargo);
			$stmt->bindParam(':salario',$salario);
			return $stmt->execute();
		}
		public function update($id){
			$sql = "UPDATE $this->tabela SET nome = :nome, cargo = :cargo, salario = :salario, id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nome',$funcionario->getNome());
			$stmt->bindParam(':cargo',$funcionario->getCargo());
			$stmt->bindParam(':salario',$funcionario->getSalario());
			$stmt->bindParam(':id',$id);
			return $stmt->execute();
		}
		public function findall(){
			$sql = "Select * from $this->tabela";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetch();
		}
	}
?>