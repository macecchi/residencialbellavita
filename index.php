<?php
date_default_timezone_set('America/Sao_Paulo');	
$path = current(array_filter(explode('/', $_SERVER['REQUEST_URI'])));

$pagina = "inc.home.php";

if (empty($path)) {
	$pagina = "inc.home.php";
	$act[0] = " class=\"active\"";
} else {
	switch (@$path) {
		case "home":
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: /");
			exit;
			break;
		case "missao":
			$pagina = "inc.missao.php";
			$title = "Missão";
			$act[1] = " class=\"active\"";
			break;
		case "servicos":
			$pagina = "inc.servicos.php";
			$title = "Serviços";
			$act[2] = " class=\"active\"";
			break;
		case "diferenciais":
			$pagina = "inc.diferenciais.php";
			$title = "Diferenciais";
			$act[3] = " class=\"active\"";
			break;
		case "instalacoes":
			$pagina = "inc.instalacoes.php";
			$title = "Instalações";
			$act[4] = " class=\"active\"";
			break;
		case "localizacao":
			$pagina = "inc.localizacao.php";
			$title = "Localização";
			$act[5] = " class=\"active\"";
			break;
		case "contato":
			$pagina = "inc.contato.php";
			$title = "Contato";
			$act[6] = " class=\"active\"";
			break;
		default: 
			http_response_code(404);
			header("Location: /");
			exit;
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if (isset($title)) echo $title . " - "; ?>Residencial para idosos Bella Vita - Santos, São Paulo - Reabilitação, moradia, day care e pós-operatório</title>
	<meta name="description" content="O Residencial Bella Vita é a melhor opção para o idoso na cidade de Santos. Reabilitação, moradia, day care e pós-operatório.">
	<link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/lightbox.css">
</head>

<body>

	<div id="header">
		<h1><img src="/images/logo.png" alt="Residencial Bella Vita"></h1>
		<p class="dir">
			Entre em contato <a href="/contato/">clicando aqui</a><br>
			ou nos ligue: (13) 3225-7727<br>
			Rua Carlos Gomes, nº 226<br>
			Marapé, Santos – SP
		</p>
	</div>

	<div id="wrapper">
	<ul id="menu">
		<li<?=@$act[0]?>><a href="/home">Home</a></li>
		<li<?=@$act[1]?>><a href="/missao">Missão</a></li>
		<li<?=@$act[2]?>><a href="/servicos">Serviços</a></li>
		<li<?=@$act[3]?> style="width: 130px"><a href="/diferenciais">Diferenciais</a></li>
		<li<?=@$act[4]?> style="width: 130px"><a href="/instalacoes">Instalações</a></li>
		<li<?=@$act[5]?>><a href="/localizacao">Localização</a></li>
		<li<?=@$act[6]?>><a href="/contato">Contato</a></li>
	</ul>

	<?php
	include($pagina);
	?>

	<div style="clear: both"></div>

	<br>

	</div>

	<div id="footer">
		Residencial Bella Vita - &copy; 2011~<?php echo date('Y'); ?> - <a href="/contato">Entre em contato</a>
	</div>
</body>
</html>