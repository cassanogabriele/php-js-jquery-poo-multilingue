<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=c0secretfacesbio', 'c0sfbio', 'hjvL6S@H');
	$bdd->exec('SET NAMES utf8');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>
