<?php
require_once("Core/config/Database.php");
 class User{
    protected $nom;
    protected $prenom;
    protected $email;
    protected $password;
    protected $phone;
    protected $role;
    protected $registrationDate;
    protected $pdo;


    public function __construct($nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo) {
        
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->role = $role;
        $this->registrationDate = $registrationDate;
        $this->pdo = Database::getConnection();
    }    
    public function  seConnecter(){
       echo "hello";
       $stmt = $this->pdo->prepare("SELECT * from users where email = :email and password = :password");
       $stmt->bindParam(":email",$this->email);
       $stmt->bindParam(":password",$this->password);
       $stmt->execute();
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result;
    }

    

 }

 //session_start();

// After login
// $_SESSION['user'] = serialize($user); // Store the object in the session

// On the settings page
// session_start();
// $user = unserialize($_SESSION['user']);