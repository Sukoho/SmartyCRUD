<?php

require_once "libs/Smarty.class.php";
include 'tout.php';

session_start();

if (!empty($_GET['error']) and $_GET['error'] == 1 and !empty($_SESSION['user']->id_user)){
		if(isset($_SESSION['error'])){
			$tab = $_SESSION['error'];
		}else{
			$tab = null;
		}
$smarty = new Smarty();

$smarty->assign("titre", "Modifier");
$smarty->assign("id", $_SESSION['user']->id_user);
$smarty->assign("nom", strtoupper($_SESSION['user']->nom));
$smarty->assign("prenom", ucwords(strtolower($_SESSION['user']->prenom)));
$smarty->assign("email", $_SESSION['user']->mail);
$smarty->assign("titre", "Profil");

$smarty->assign("error", $tab);
$smarty->assign("css", "../css/style.css");
$smarty->display('../template/errorModif.tpl');
}else{
	header("location: ../index.php");
	exit;
}