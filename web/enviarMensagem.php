<?php

	if(isset($_POST['email']) && !empty($_POST['email'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$mensagem = $_POST['mensagem'];

		$para = "fr.projetoeletrico@gmail.com";
		$assunto = "Mensagem - Site RealTech";
		$corpo = "Nome: ".$nome."\r\nEmail: ".$email."\r\nTelefone: ".$telefone."\r\nMensagem: ".$mensagem;
		$cabecalho = "From: "."\r\nReply-To:".$email."\r\n"."X-Mailer:PHP/".phpversion();

		if(mail($para, $assunto, $corpo, $cabecalho)){
			echo "<script>alert('Email enviado com sucesso!'); window.location.href='index.php';</script>";
		}else{
			echo "<script>alert('O email não pode ser enviado!'); window.location.href='index.php';</script>";
		}
	}
?>