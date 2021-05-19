<?php
require_once "Autoloader.php";
Autoloader::Register();

class User
{
        private $nom;
        private $prenom;
        private $mail;
        private $pwd;

        public static function build( $nom,  $prenom,  $mail,  $pwd){
            $obj = new static;
            $obj->nom = $nom;
            $obj->prenom = $prenom;
            $obj->mail = $mail;
            $obj->pwd = $pwd;
            return $obj;
        }

        //fonction GETTER récupération
	public function __get($attr){
			return $this->$attr;
		}

		//fonction SETTER modification
	public function __set($attr, $value){
			$this->$attr = $value;
		}

    public function AddUser(){
            $bdd = Database::cobdd();

            $sql = "INSERT INTO`user`(nom, prenom, mail, pwd) VALUES (:nom, :prenom, :mail, :pwd);";
            $req = $bdd->prepare($sql);
            $req->bindValue(":nom", $this->nom);
            $req->bindValue(":prenom", $this->prenom);
            $req->bindValue(":mail", $this->mail);
            $req->bindValue(":pwd", $this->pwd);
            return $req->execute();
		}

	public static function checkData($data){
            $error = array();
            if(empty($data['nom'])){
                $error[] = "Le nom est obligatoire";
            }
            if(empty($data['prenom'])){
                $error[] = "Le prénom est obligatoire";
            }           
            if(empty($data['email'])){
                $error[] = "L'adresse email est obligatoire";
            }
            if(empty($data['pwd'])){
                $error[] = "Le mot de passe est obligatoire";
            }
            return $error;
        }

    public static function checkDataCo($data){
            $error = array();       
            if(empty($data['email'])){
                $error[] = "L'adresse email est obligatoire";
            }
            if(empty($data['pwd'])){
                $error[] = "Le mot de passe est obligatoire";
            }
            return $error;
        }

    public static function checkstrNom($str){
		if(empty($str)){
			return "chaine vide";
		}else if(strlen($str) > 30){
			return "chaine trop longue";
		}else if(!preg_match("/^[a-zA-Z-éàçèùïî]*$/", $str)){
			return "Caractère interdit dans le nom";
		} 
		return "";
	}

    public static function checkstrPrenom($str){
        if(empty($str)){
            return "chaine vide";
        }else if(strlen($str) > 30){
            return "chaine trop longue";
        }else if(!preg_match("/^[a-zA-Z-éàçèùïî]*$/", $str)){
            return "Caractère interdit dans le prénom";
        } 
        return "";
    }

	public static function checkForcePwd($str){
		/*
		au moins une majuscule
		au moins une minuscule
		au moins un chiffre
		au moins un caractère spécial
		au moins 8 caractères
		*/
		if(strlen($str) < 8){
			return "Le mot de passe est trop court";
		}
		$maj = false;
		$min = false;
		$num = false;
		$spe = false;

		$strToArray = str_split($str);
		foreach($strToArray as $lettre){
			if(is_numeric($lettre)){
				$num = true;
			}
			if(preg_match("/^[a-z]*$/", $lettre)){
				$min = true;
			}
			if(preg_match("/^[A-Z]*$/", $lettre)){
				$maj = true;
			}
			if(!preg_match("/^[a-zA-Z0-9]*$/", $lettre)){
				$spe = true;
			}
		}

		if(!$maj || !$min || !$num || !$spe){
			return "Le mot de passe ne respecte pas les règles suivantes : <br>- au moins une majuscule<br>- au moins une minuscule<br>- au moins un chiffre<br>- au moins un caractère spécial<br>- au moins 8 caractères";
		}
		return "";
	}

	public static function checkEmail($str){
		if(!filter_var($str, FILTER_VALIDATE_EMAIL)){
		return "email mal formé";
		} return "";
	}

	public static function existEmail($mail){
		try {
            $bdd = Database::cobdd();
            $sql = "SELECT `mail` FROM user WHERE mail=:mail;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":mail", $mail);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
            $result = $req->fetch(PDO::FETCH_OBJ); 
            if (!empty($result)) {
                return "L'adresse Email est déjà utilisée !";
            }else{
                return "";
            } 
        }
    	catch (PDOException $e) {
			echo "Erreur: ".$e->getMessage()."<br/>" ;
			die() ;
		}
	}

    public static function existEmailCo($mail){
        try {
            $bdd = Database::cobdd();
            $sql = "SELECT `mail` FROM user WHERE mail=:mail;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":mail", $mail);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
            $result = $req->fetch(PDO::FETCH_OBJ); 
            if (empty($result)) {
                return "Vos identifiants sont incorrects !";
            }else{
                return "";
            }  
        }
        catch (PDOException $e) {
            echo "Erreur: ".$e->getMessage()."<br/>" ;
            die() ;
        }
    }

	public static function getUser($mail, $pwd){
		try {
            $bdd = Database::cobdd();
            $sql = "SELECT * FROM user WHERE mail=:mail;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":mail", $mail);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);    

			if(password_verify($pwd, $result->pwd)){
                return $result;
            } else {
                return "";
            }       
            
        }
    	catch (PDOException $e) {
			echo "Erreur: ".$e->getMessage()."<br/>" ;
			die() ;
		}
	}

	public static function getAll(){
		try {
            $bdd = Database::cobdd();
            $sql = "SELECT id_user, nom, prenom, mail FROM user ORDER BY nom;";
            $req = $bdd->query($sql);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
			return $req->fetchAll(PDO::FETCH_OBJ);        
        }
    	catch (PDOException $e) {
			echo "Erreur: ".$e->getMessage()."<br/>" ;
			die() ;
		}
	}

	public static function getUserByID($id){
		try {
            $bdd = Database::cobdd();
            $sql = "SELECT id_user, nom, prenom, mail FROM user WHERE id_user=:id;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":id", $id);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
			return $req->fetch(PDO::FETCH_OBJ);       
        }
    	catch (PDOException $e) {
			echo "Erreur: ".$e->getMessage()."<br/>" ;
			die() ;
		}
	}

	public static function modifUserMail($id, $email){
		try {
            $bdd = Database::cobdd();
            $sql = "UPDATE user SET mail=:email WHERE id_user=:id;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":email", $email);
            $req->bindValue(":id", $id);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
			return true;  
		    }
			catch (PDOException $e) {
				echo "Erreur: ".$e->getMessage()."<br/>" ;
				die() ;
			}
		}

	public static function modifUserNom($id, $nom){
		try {
            $bdd = Database::cobdd();
            $sql = "UPDATE user SET nom=:nom WHERE id_user=:id;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":nom", $nom);
            $req->bindValue(":id", $id);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
			return true;  
		    }
			catch (PDOException $e) {
				echo "Erreur: ".$e->getMessage()."<br/>" ;
				die() ;
			}
		}

	public static function modifUserPrenom($id,$prenom){
		try {
            $bdd = Database::cobdd();
            $sql = "UPDATE user SET prenom=:prenom WHERE id_user=:id;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":prenom", $prenom);
            $req->bindValue(":id", $id);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
			return true;  
		    }
			catch (PDOException $e) {
				echo "Erreur: ".$e->getMessage()."<br/>" ;
				die() ;
			}
		}

	public static function modifUserPwd($id,$pwd){
		try {
            $bdd = Database::cobdd();
            $sql = "UPDATE user SET pwd=:pwd WHERE id_user=:id;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":pwd", $pwd);
            $req->bindValue(":id", $id);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();
			return true;  
		    }
			catch (PDOException $e) {
				echo "Erreur: ".$e->getMessage()."<br/>" ;
				die() ;
			}
		}		

	public static function deleteUser($id){
		try {
            $bdd = Database::cobdd();
            $sql = "DELETE FROM user WHERE id_user=:id;";
            $req = $bdd->prepare($sql);
            $req->bindValue(":id", $id);
            // echo "<pre>";
            // var_dump($req->debugDumpParams());
            // echo "</pre>";
            $req->execute();  
		    }
			catch (PDOException $e) {
				echo "Erreur: ".$e->getMessage()."<br/>" ;
				die() ;
			}
	}
}