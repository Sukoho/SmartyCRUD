<?php
    include "../model/tout.php";

//redirection à l'index
if (empty($_POST)) {
    header("location: ../index.php");
    exit();
}

	// -----------------INSCRIPTION-----------------

if(isset($_POST['inscription'])){
        //verifie si les champs sont remplis
        $error = User::checkData($_POST);

        if (!empty($error)){
                session_start();
                $_SESSION['error'] = $error;
                header("location: ../model/errorIns.php?error=1");
                exit;
        }
        //verifie si les données correspondent aux critères
        if(empty($error)){
        	$error[] = User::checkstrNom($_POST["nom"]);
        	$error[] = User::checkstrPrenom($_POST["prenom"]);
        	$error[] = User::checkForcePwd($_POST["pwd"]);
        	$error[] = User::checkEmail($_POST["email"]);
            $error[] = User::existEmail($_POST["email"]);
            if($_POST["pwd"] != $_POST["pwd2"]){
                $error[] = "Les deux mots de passes doivent être identiques !";
            }

        //vide le tableau des champs vide
		$last = array_filter($error);

            if (!empty($last)){
                session_start();
                $_SESSION['error'] = $last;
                header("location: ../model/errorIns.php?error=1");
                exit;
            }
            //s'il n'y a pas d'erreurs, création de l'instance User
        	if (empty($last)){
            $newUser = User::build(strtoupper($_POST['nom']), ucwords(strtolower($_POST['prenom'])), $_POST['email'], password_hash($_POST['pwd'],PASSWORD_BCRYPT));

                //envoie de l'instance dans la BDD
                if($newUser->AddUser()){
                    session_start();
                    $_SESSION['user'] = $newUser;
                    header("location:../model/profil.php");
                    exit();
                }
            }
        }
}

// 	-----------------CONNEXION-----------------

if(isset($_POST["connexion"])){

    //verifie si les champs sont remplis
	$error = User::checkDataCo($_POST);

    if (!empty($error)){
        session_start();
        $_SESSION['error'] = $error;
        header("location: ../model/errorCo.php?error=1");
        exit;
    }

    //verifie si les données correspondent aux critères
    if(empty($error)){
    	$error[] = User::checkForcePwd($_POST["pwd"]);
    	$error[] = User::checkEmail($_POST["email"]);
        $error[] = User::existEmailCo($_POST["email"]);
    }

    //vide le tableau des champs vide
    $last = array_filter($error);

    if (!empty($last)){
        session_start();
        $_SESSION['error'] = $last;
        header("location: ../model/errorCo.php?error=1");
    }

    //s'il n'y a pas d'erreurs, vérification des données envoyées et stockées = correspondance 
    if(empty($last)){
    	$verif = User::getUser($_POST["email"], $_POST["pwd"]);
    		if (empty($verif)) {
                $iden = array_filter($verif);
                session_start();
                $iden[] = "Vos identifints sont incorrects !";
                $_SESSION['error'] = $iden;
    			header("location: ../model/errorCo.php?error=1");        
    		}else{
    			session_start();
    			$_SESSION["user"] = $verif;
    			header("location: ../model/profil.php");
        
    		}
    }
}

//  -----------------MODIFIER-----------------

if(isset($_POST['modifier'])){

    // verification de la construction du mail et s'il existe
    if (!empty($_POST["email"])) {
        $error[] = User::checkEmail($_POST["email"]);
        $error[] = User::existEmail($_POST["email"]);        
    }

    // verification de la construction du nom
    if (isset($_POST["nom"])) {
        $error[] = User::checkstrNom($_POST["nom"]);        
    }

    // verification de la construction du prénom
    if (isset($_POST["prenom"])) {
        $error[] = User::checkstrPrenom($_POST["prenom"]);        
    }

    // verification de la construction du mot de passe et la confirmation
    if($_POST["pwd"] != $_POST["pwd2"]){
            $error[] = "Les deux mots de passes doivent être identiques !";
        if (!empty($_POST["pwd"]) && !empty($_POST["pwd2"])) {
            $error[] = User::checkForcePwd($_POST["pwd"]);  
        }
    }

    //vide le tableau des champs vide
    $end = array_filter($error);

    //s'il existe des erreurs, renvoyer le tableau d'erreur pour afficher
    if (!empty($end)) {
        session_start();
        $_SESSION['error'] = $end;
        $verif = User::getUserByID($_POST["id"]);
        $_SESSION['user'] = $verif;
        header("location: ../model/errorModif.php?error=1");
        exit;
    }else{
        // modification du prenom
        if (isset($_POST["prenom"])) {
        User::modifUserPrenom($_POST["id"], ucwords(strtolower($_POST["prenom"])));
        }
        // modification du nom
        if (isset($_POST["nom"])) {
        User::modifUserNom($_POST["id"], strtoupper($_POST["nom"]));
        }
        // modification du mail
        if (!empty($_POST["email"])) {
        User::modifUserMail($_POST["id"], $_POST["email"]);
        }
        // modification du mot de passe
        if (!empty($_POST["pwd"]) && !empty($_POST["pwd2"])) {
        User::modifUserPwd($_POST["id"], password_hash($_POST['pwd'],PASSWORD_BCRYPT));
        }

    }

    //vide le tableau des champs vide
    $last = array_filter($error);

    //réaffichage des données Users
    if(empty($last)){
        $verif = User::getUserByID($_POST["id"]);
        session_start();
        $_SESSION['user'] = $verif;
        header("location: ../model/validModif.php");
        exit;
    }
} 