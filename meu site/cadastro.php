<?php

$base = $_SERVER['DOCUMENT_ROOT'];

//Conecta ao BD
include($base."/bd/bd_clientes.php");

//Pega dados
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data = $_POST["data"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];
$curso = $_POST["curso"];

if($nome == "" || $nome == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo Nome Obrigatório!');window.location.href='/chekout.php'</script>";
}
if($cpf == "" || $cpf == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo CPF Obrigatório!');window.location.href='/chekout.php'</script>";
}
else{
	 // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );  
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        echo"<script language='javascript' type='text/javascript'>alert('CPF inválido!');window.location.href='/chekout.php'</script>";
    }
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        echo"<script language='javascript' type='text/javascript'>alert('CPF inválido!');window.location.href='/chekout.php'</script>";
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
            echo"<script language='javascript' type='text/javascript'>alert('CPF inválido!');window.location.href='/chekout.php'</script>";
        }
    }
}
if($data == "" || $data == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo Data de Nascimento Obrigatório!');window.location.href='/chekout.php'</script>";
}
if($email == "" || $email == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo Email Obrigatório!');window.location.href='/chekout.php'</script>";
}
if($cidade == "" || $cidade == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo Cidade Obrigatório!');window.location.href='/chekout.php'</script>";
}
if($curso == "" || $curso == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Selecione um Curso!');window.location.href='/chekout.php'</script>";
}
else{
	$query_select = "SELECT `cpf` FROM `bak_cliente` WHERE `cpf` = '$cpf'";
	$select = mysqli_query($con_cliente, $query_select) or die ('Erro select1');
    $array = mysqli_fetch_array($select);
	
	echo "aqui2";
	
	$logarray = $array['cpf'];
	if($logarray == $cpf){
		echo"<script language='javascript' type='text/javascript'>alert('CPF ja cadastrado!');window.location.href='/chekout.php';</script>";
        die();
	}
	else{		
		echo "aquipre";
	$query = "INSERT INTO `bak_cliente`(`nome`, `cpf`, `data`, `email`, `cidade`, `curso`) VALUES ('".$nome."', '".$cpf."', '".$data."', '".$email."', '".$cidade."', '".$curso."')";
	$insert = mysqli_query($con_cliente, $query) or die ('Erro na conexão insert');
    
		echo "aqui $insert a"; exit; 
		
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso!');window.location.href='/info_ins.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel fazer inscrição!');window.location.href='/chekout.php'</script>";
        }
		
	}
}
?>