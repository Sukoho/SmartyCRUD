<?php

require_once "libs/Smarty.class.php";
include 'tout.php';

session_start();

$smarty = new Smarty();

$smarty->assign("titre", "Modifier");
$smarty->assign("id", $_SESSION['user']->id_user);
$smarty->assign("nom", strtoupper($_SESSION['user']->nom));
$smarty->assign("prenom", ucwords(strtolower($_SESSION['user']->prenom)));
$smarty->assign("email", $_SESSION['user']->mail);
$smarty->assign("titre", "Profil");

$smarty->assign("css", "../css/style.css");
$smarty->display('../template/validModif.tpl');