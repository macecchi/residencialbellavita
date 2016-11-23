<div class="left">
<h3>Entre em contato!</h3>
<p>Rua Carlos Gomes, nº 226<br />
Marapé, Santos – SP<br />
<br />
(13) 3225-7727<br />
(13) 9105-0562<br />
(13) 9795-5580<br />
<br />
Envie-nos uma mensagem preenchendo o formulário ao lado ou diretamente pelo e-mail <a href="mailto:contato@residencialbellavita.com.br">contato@residencialbellavita.com.br</a>.
</p>
</div>

<div class="right">

<h2>Contato</h2>
<?php
if (isset($_POST["enviar"])) {
	
	if (@($_POST["nome"]) && @($_POST["email"]) && @($_POST["telefone"]) && @($_POST["assunto"]) && @($_POST["msg"])) {
	
		$para = "contato@residencialbellavita.com.br";
		//$para = "macecchi@gmail.com";
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];
		$assunto = "[Contato] " . $_POST["assunto"];
		$msg = $_POST["msg"];
		
		$headers = "From: ".$nome."<".$email.">";
		
		mail($para, $assunto, $msg, $headers);
		
?>

<p><b>Mensagem enviada com sucesso!</b></p>
<p>Obrigado pelo seu contato. Sua mensagem será respondida em breve por e-mail ou por telefone. Se preferir, nos ligue!</p>

<p align="center">
(13) 3225-7727
</p>

<?php
	} else {
?>
	<script type="text/javascript">
	alert("Verifique se todos os campos do formulário foram preenchidos corretamente.");
	history.go(-1);
	</script>
<?php
	}
} else {	
?>
<p>Para mais informações, consultas ou sugestões, entre em contato conosco, teremos satisfação em lhe atender.</p>

<p>Preencha o formulário abaixo ou entre em contato em nosso endereço:</p>

<div class="contato">
<form action="/contato" method="post">
	<input type="hidden" name="enviar" value="1">
	
	<label for="nome">Nome</label>
		<input name="nome" type="text"><br />
	<label for="email">E-mail</label>
		<input name="email" type="text"><br />
	<label for="telefone">Telefone</label>
		<input name="telefone" type="text"><br />
	<label for="assunto">Assunto</label>
		<input name="assunto" type="text"><br />

	<label for="msg">Mensagem:</label><br />
		<textarea name="msg" style="width: 300px; height: 200px;"></textarea>
		
	<br />
		
	<input name="enviar" value="Enviar mensagem" type="submit" class="button">
</form>
</div>

<?php 
}
?>

</div>
