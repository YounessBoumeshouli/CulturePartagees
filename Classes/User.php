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
    public function viewProfile($id){
      $stmt = $this->pdo->prepare("SELECT u.* , count(v.article_id) as comments , count(a.auteur_id) as articles   from users u left join articles a  on a.auteur_id = u.id_user left join avis v on v.article_id = a.id_article where id_user = :id_user  group by u.id_user ");
      $stmt->bindParam(":id_user",$id);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
  }
    
  public function UpdateProfile($id,$imageData){
   $stmt = $this->pdo->prepare("UPDATE public.users
SET  nom=:nom, prénom = :prenom, email=:email, password=:password, phone=:phone ,profile_image = :profile_image
WHERE id_user=:id");
   $stmt->bindParam(":nom",$this->nom);
   $stmt->bindParam(":prenom",$this->prenom);
   $stmt->bindParam(":email",$this->email);
   $stmt->bindParam(":password",$this->password);
   $stmt->bindParam(":phone",$this->phone);
   $stmt->bindParam(":profile_image",$imageData,PDO::PARAM_LOB);
   $stmt->bindParam(":id",$id);
   $stmt->execute();

}
 }

 //session_start();

// After login
// $_SESSION['user'] = serialize($user); // Store the object in the session

// On the settings page
// session_start();
// $user = unserialize($_SESSION['user']);