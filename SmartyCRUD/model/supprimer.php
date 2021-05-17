<?php

require_once "Autoloader.php";
Autoloader::register();

if(empty($_SESSION)){
	header("location:../index.php");
}
session_start();
User::deleteUser($_SESSION['user']->id_user);
session_unset();
session_destroy();
header("location:../index.php");