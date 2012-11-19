<?php
	session_start();

	if ($_SESSION["autenticado"]!="1") { 
		header("Location: login.php");
	} elseif (time()-$_SESSION["horainiciosesion"]>60*60) {
		header("Location: login.php");
	} else {


		// Fecha en el pasado
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

		// siempre modificado
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");



		// HTTP/1.1
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);		
		header("Pragma: no-cache"); 

		$_SESSION["horainiciosesion"]=time();
	}
?>