<?php
	require_once("ControllerCadastro.php");

	$controller = new ControllerCadastro();
	$resultado = $controller->excluir($_GET['id']);

?>