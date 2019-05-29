<?php

	if(isset($_POST['email']) && !empty($_POST['email'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$mensagem = $_POST['mensagem'];

		$para = "contato@realtechautomacao.com.br";
		$assunto = "Mensagem - Site RealTech";
		$corpo = "Nome: ".$nome."\r\nEmail: ".$email."\r\nTelefone: ".$telefone."\r\nMensagem: ".$mensagem;
		$cabecalho = "From: contato@realtechautomacao.com.br"."\r\nReply-To:".$email."\r\n"."X-Mailer:PHP/".phpversion();

		if(mail($para, $assunto, $corpo, $cabecalho)){
			echo "<script>alert('Email enviado com sucesso!'); window.location.href='index.php';</script>";
		}else{
			echo "<script>alert('O email não pode ser enviado!'); window.location.href='index.php';</script>";
		}
	}
?>