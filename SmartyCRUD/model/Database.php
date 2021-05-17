<?php

Class Database {

		// variables
		static $host = 'localhost';
		static $dbname = 'user';
		static $dbuser = 'root';
		static $dbpwd = '';
		static $port = 3308;

		static $bdd;

        static function cobdd(){
			try {
                self::$bdd = new PDO('mysql:host=' . self::$host . ';port='.self::$port.';dbname=' . self::$dbname . ';charset=utf8' , self::$dbuser, self::$dbpwd);
                self::$bdd->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
                return self::$bdd;
        	}
        	catch (PDOException $e) {
				echo "Erreur: ".$e->getMessage()."<br/>" ;
				die() ;
			}
        }

}