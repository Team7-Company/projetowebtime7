<?php

    include_once "funcionariospublicos.php";
	
	include_once "dao.php";
	
    $nome = ($_POST['nome']);
    $cargo = ($_POST['cargo']);
    $salario = ($_POST['salario']);

	$funcionario = new funcionariospublicos();
	
	$funcionario->setNome($nome);
	$funcionario->setCargo($cargo);
	$funcionario->setSalario($salario);
	
	$dao = new dao();
	
	if($dao->insert($funcionario->getNome(),$funcionario->getCargo(),$funcionario->getSalario()))
	{
		echo "<script>alert('Funcionario cadastrado com sucesso');window.location='index.html'</script>";
	}
	else 
    { 
		echo "<script>alert('Funcionario não cadastrado');window.location='index.html'</script>"; 
	} 
	
	
?>
