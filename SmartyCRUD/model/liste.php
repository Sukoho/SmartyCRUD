<?php
require_once "libs/Smarty.class.php";
include 'tout.php';

session_start();

if ($_SESSION["user"]->mail != "admin@admin.admin"){
	header("location: ../index.php");
	}

$smarty = new Smarty();

$smarty->assign("id", $_SESSION["user"]->id_user);
$smarty->assign("titre", "Liste");
$smarty->assign("css", "../css/style.css");
$smarty->assign("liste", User::getAll());
$smarty->display("../template/liste.tpl");
