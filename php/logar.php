<?php
	session_start();

	$email = $_POST["email"];
	$senha = $_POST["senha"];

	include_once 'conexao.php';

	$queryVerificaLogin = "SELECT email, senha FROM admin WHERE email = '$email' AND senha = '$senha'";

	$resultado = $conexao->query($queryVerificaLogin);

	if($resultado->num_rows > 0){
		$_SESSION["logado"] = true;

		header('location:../indexAdmin.php');

	}else{
		unset($_SESSION["logado"]);
		echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!'); window.location.href='../admin.php';</script>";
	}
?>