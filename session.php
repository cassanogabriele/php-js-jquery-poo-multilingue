<?php
// Démarrage de la session.
session_start();

if($_SESSION['lang']=='') $_SESSION['lang']="FR";

// Permet à l'utilisateur de choisir la langue dans laquelle il veut consulter le site.
switch($_GET['lang'])
{
	case "FR":
		$_SESSION['lang'] = "FR";
		break;				
	case "EN" :
		$_SESSION['lang'] = "EN";				
}
?>
