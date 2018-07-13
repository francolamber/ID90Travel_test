<?php

/**
 *	Este script se encarga de redireccionar al usuario en caso de que este o no logiado, en caso de que este 
 *  logueado e ingrese al login, automaticamente lo redireccionara al index, y si el usuario intenta acceder 
 *  al index pero no está logueado lo llevara automaticamente al login, ademas cuenta con la funcion 
 *  de si el usuario no marca la casilla de recordar, el sistema automaticamente despues de 120seg se cerrara sesion automaticamente.
 *  
 *  Ademas activa las variables de session.
 **/

session_start();

if (isset($_SESSION['remember_me'])) {
	if (time() - $_SESSION['tiempo'] > 120) {
	    if($_SESSION['remember_me']==1)
		{
			$_SESSION['tiempo']=time();
			if(basename($_SERVER['PHP_SELF'])=='login.php')
			{
				header("Location: index.php");
				die(); 
			}
		}
		else
		{
			if(basename($_SERVER['PHP_SELF'])!='login.php')
			{
				header("Location: login.php");
			}
			session_destroy();
			die(); 
		}
	} elseif (basename($_SERVER['PHP_SELF'])=='login.php' && $_SESSION['remember_me']==1 ) {
		$_SESSION['tiempo'];
		header("Location: index.php");
		die(); 
	}
}
else
{
	if(basename($_SERVER['PHP_SELF'])!='login.php')
	{
		header("Location: login.php");
		die(); 
	}
}

$airline ="";
$username ="";

if(isset($_SESSION['airline']))
{
	$airline =$_SESSION['airline'];
}

if(isset($_SESSION['username']))
{
	$username =$_SESSION['username'];
}

?>