<?php

if (isset($_FORM["nome"]) && isset($_FORM["email"]) && isset($_FORM["telefone"]) && isset($_FORM["assunto"]) && isset($_FORM["msg"])) {

	//$para = "contato@residencialbellavita.com.br";
	$para = "macecchi@gmail.com";
	$nome = $_FORM["nome"];
	$email = $_FORM["email"];
	$telefone = $_FORM["telefone"];
	$assunto = $_FORM["assunto"];
	$msg = $_FORM["msg"];

	$headers = "From: ".$nome."<".$email.">";
	
	mail($para, $assunto, $msg, $headers);
	
	header("Location: index.php?p=contato&msg=enviado");
}

?>