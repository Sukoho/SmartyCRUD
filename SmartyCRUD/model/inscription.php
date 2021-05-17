<?php

require_once "libs/Smarty.class.php";
include 'tout.php';


$smarty = new Smarty();
$smarty->assign("titre", "Inscription");
$smarty->assign("css", "../css/style.css");
$smarty->display('../template/inscription.tpl');