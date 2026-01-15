<?php
require_once __DIR__.'/../autoload.php';
require_once __DIR__.'/../error.php';
Use App\Database;
Use App\User;
$db = Database::getInstance();
$utilisateur = new User($db->getPDO());

if (isset($_POST['inscrire'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if ($utilisateur->Email_exist($email)){
        header("Location: index.php?exist");
    } else
{ 
    $utilisateur->Inscrire($nom,$prenom,$email,$password);
    header("Location: index.php?success");
}   

}
if (isset($_POST['connecter'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $utilisateur->Connexion($email);
    $MOT_DE_PASSE =$user['MOT_DE_PASSE'];
    if (password_verify($password, $MOT_DE_PASSE)){
        if (session_status() === PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['NOM'] = $user['NOM'];
        $_SESSION['PRENOM'] = $user['PRENOM'];
        $_SESSION['EMAIL'] = $user['EMAIL'];
        header("Location: panel.php?ID=".$_SESSION['ID']);
    } else{
         header("Location: login.php?error");
    }
}
if (isset($_POST['deconnecter'])){
     if (session_status() === PHP_SESSION_NONE){
            session_start();
        }
        unset($_SESSION['ID']);
        session_destroy();
        header("Location: login.php");
}