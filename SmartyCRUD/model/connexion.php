<?php

require_once "libs/Smarty.class.php";
include 'tout.php';

session_start();

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";


if(!empty($_SESSION) and !empty($_SESSION['user']->id_user)){
	header("location: profil.php");
	exit;
}

	$smarty = new Smarty();

$smarty->assign("titre", "Connexion");
$smarty->assign("css", "../css/style.css");
$smarty->display('../template/connexion.tpl');