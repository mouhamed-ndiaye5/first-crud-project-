<?php
namespace App;

Use PDO;
Use PDOException;

// definir la classe 
class Database{
    private $host="localhost";
    private $user = "mouhamed";
    private $password = "wampserver!";
    private $dbname = "POO";
    private $charset = "utf8mb4";
    private $pdo;
    private static $Instance;
    private function __construct(){
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        try
        {
            $this->pdo = new PDO($dsn, $this->user, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                      PDO::ATTR_EMULATE_PREPARES => false
            ]);
        } catch (PDOException $error){
            die("Erreur de serveur ".$error->getMessage());
        }
    }
    public static function getInstance(){
        if (self::$Instance === null){
            self::$Instance = new self();
        }
        return self::$Instance;
    }
    public function getPDO(){
        return $this->pdo;
    }
}
