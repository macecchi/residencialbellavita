<?php
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
$scriptNameArray = array_values($scriptName);

for($i= 0; $i < sizeof($scriptNameArray); $i++) {
	if ($requestURI[$i] == $scriptName[$i]) {
		unset($requestURI[$i]);
	}
}

$url = array_values($requestURI); //$url[0]

$pagina = "inc.home.php";

if ($url[0] != "") {
	$pag = $url[0];
	
	switch ($pag) {
		case "home":
			$pagina = "inc.home.php";
			$act[0] = " class=\"active\"";
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
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if (isset($title)) echo $title . " - "; ?>Residencial para idosos Bella Vita - Santos, São Paulo - Reabilitação, moradia, day care e pós-operatório</title>
<meta name="description" content="O Residencial Bella Vita é a melhor opção para o idoso na cidade de Santos. Reabilitação, moradia, day care e pós-operatório." /> 
<style type="text/css">
@import url('/site/style.css');
@import url('/site/lightbox.css');
</style>
</head>

<body>

<div id="header">
	<h1><img src="/site/images/logo.png" alt="Residencial Bella Vita" /></h1>
	<p class="dir">
		Entre em contato <a href="/contato/">clicando aqui</a><br />
		ou nos ligue: (13) 3225-7727<br />
		Rua Carlos Gomes, nº 226<br />
		Marapé, Santos – SP
	</p>
</div>

<div id="wrapper">
<ul id="menu">
	<li<?=$act[0]?>><a href="/home">Home</a></li>
	<li<?=$act[1]?>><a href="/missao">Missão</a></li>
	<li<?=$act[2]?>><a href="/servicos">Serviços</a></li>
	<li<?=$act[3]?> style="width: 130px"><a href="/diferenciais">Diferenciais</a></li>
	<li<?=$act[4]?> style="width: 130px"><a href="/instalacoes">Instalações</a></li>
	<li<?=$act[5]?>><a href="/localizacao">Localização</a></li>
	<li<?=$act[6]?>><a href="/contato">Contato</a></li>
</ul>

<?php
include($pagina);
?>

<div style="clear: both"></div>

<br />

</div>

<div id="footer">
Residencial Bella Vita - &copy; 2011~<?php echo date('Y'); ?> - <a href="/contato">Entre em contato</a>

</body>
</html>
