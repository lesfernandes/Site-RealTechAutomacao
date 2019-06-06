<?php
	$servidor = "localhost";
	$usuario = "root";
	$senhaConexao = "";
	$banco = "realtech";

	$conexao = new mysqli ($servidor, $usuario, $senhaConexao, $banco);

	$conexao->set_charset("utf8");
	
	if($conexao->connect_error){
		die("Falha na conexão: ".$conexao->connect_error);
	}
?>