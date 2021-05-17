<?php

require_once "libs/Smarty.class.php";
include 'tout.php';

if (!empty($_GET['error']) and $_GET['error'] == 1){
session_start();
if(isset($_SESSION['error'])){
	$tab = $_SESSION['error'];
} else {
	$tab = null;
}

	if(!empty($tab)){
		session_destroy();
	}
$smarty = new Smarty();
$smarty->assign("titre", "Inscription");
$smarty->assign("error", $tab);
$smarty->assign("css", "../css/style.css");
$smarty->display('../template/errorIns.tpl');
}else{
	header("location: inscription.php");
	exit;
}