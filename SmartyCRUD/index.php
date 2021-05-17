<?php

require_once "model/libs/Smarty.class.php";
include 'model/tout.php';

$smarty = new Smarty();
$smarty->assign("titre", "Bienvenue");
$smarty->assign("css", "css/style.css");
$smarty->display('template/index.tpl');