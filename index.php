<?php

header('Location: inscription.php');

//function chargerClasse($classe)
//{
//    require 'class/' . $classe . '.php';
//}
//
//spl_autoload_register('chargerClasse');
//
//
//$manager = new UserManager($db);
//
//$user1 = new User(['pseudo' => 'test', 'pass' => 'test', 'prenom' => 'test', 'nom' => 'test']);
//
//$manager->add($user1);
//
//print_r($user1);
//
//session_start();
//
//require_once('modele/connexionBD.php');
//require_once('modele/connexion/connexionUser.php');
//require_once('controleur/procedureConnexion.php');
//
//spl_autoload_register('chargerClasse');
//
//if (isset($_SESSION['user'])) {
//	//echo "1--------------";
//	header('location: projet/');
//}
//elseif (isset($_COOKIE['pseudo']) && isset($_COOKIE['pass'])) {
//	//echo "2--------------";
//	$resultat = connexionUser($_COOKIE['pseudo'], $_COOKIE['pass']);
//	if ($resultat) {
//		//echo "2.1----------";
//		echo print_r($_COOKIE);
//		procedureConnexion($resultat);
//		header('location: projet/');
//	}
//	else {
//		//echo "2.2------------";
//		include_once('controleur/connexion.php');
//	}
//	
//}
//elseif (!isset($_COOKIE['pseudo']) OR $_COOKIE['pseudo'] == '') {
//	//echo "3--------------";
//	include_once('controleur/connexion/connexion.php');	
//}
//elseif (!isset($_GET['section']) OR $_GET['section'] == 'index') {
//	include_once('controleur/connexion/connexion.php');
//}
//else {
//	include_once('controleur/connexion/connexion.php');
//}