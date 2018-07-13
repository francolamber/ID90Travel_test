<?php

	/**
	 *	 Función de logout, detruye la session y retorna al login
	 **/

	session_start();
	session_destroy();
	header("Location: login.php");

?>