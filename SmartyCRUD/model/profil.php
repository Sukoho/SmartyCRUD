<?php
require_once "libs/Smarty.class.php";
include 'tout.php';

session_start();

if(empty($_SESSION) or empty($_SESSION['user']->id_user)){
	header("location: ../index.php");
}

$smarty = new Smarty();

if (!empty($_SESSION['user']->id_user)) {
	$smarty->assign("id", $_SESSION['user']->id_user);
}
$smarty->assign("nom", strtoupper($_SESSION['user']->nom));
$smarty->assign("prenom", ucwords(strtolower($_SESSION['user']->prenom)));
$smarty->assign("email", $_SESSION['user']->mail);
$smarty->assign("titre", "Profil");
$smarty->assign("css", "../css/style.css");

if ($_SESSION["user"]->mail == "admin@admin.admin"){
    $smarty->display('../template/admin.tpl');
}else{
	$smarty->display('../template/profil.tpl');
}