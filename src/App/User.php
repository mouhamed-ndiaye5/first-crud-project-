<?php
namespace App;

Use PDO;
Use PDOException;

// la calse utilisateur
class User {
private $pdo;
    public function __construct( $pdo){
       $this->pdo =  $pdo ;
    }
   public function Email_exist($email){
  $sql = "SELECT * FROM CRUD_TABLE2 WHERE EMAIL = ? ";
   $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
 return (bool) $stmt->fetch();
    }

    public function Inscrire($nom, $prenom, $email, $password){
        $sql = "INSERT INTO CRUD_TABLE2(NOM, PRENOM, EMAIL, MOT_DE_PASSE) VALUES(?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
       return $stmt->execute([$nom, $prenom, $email, $password]);
    }

    public function Connexion($email){
  $sql = "SELECT * FROM CRUD_TABLE2 WHERE EMAIL = ? ";
   $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
 return $stmt->fetch();
    }
     public function getID($id){
  $sql = "SELECT * FROM CRUD_TABLE2 WHERE ID = ? ";
   $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
 return $stmt->fetch();
    }
}