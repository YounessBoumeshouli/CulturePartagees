<?php
include("User.php");

class Membre extends User{
    public function __construct( $nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo) {
        parent::__construct( $nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo);
        }
    public function consulter(){
        $stmt = $this->pdo->prepare("select * from public.articles ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function Inscription(){
        $stmt = $this->pdo->prepare("INSERT INTO public.users(
	 nom, prénom, email, password, phone, role, registrationdate)
	VALUES ( :nom, :prenom,:email ,:password, :phone, :role, :registrationdate);");
    $stmt->bindParam(":nom",$this->nom);
    $stmt->bindParam(":prenom",$this->prenom);
    $stmt->bindParam(":email",$this->email);
    $stmt->bindParam(":password",$this->password);
    $stmt->bindParam(":phone",$this->phone);
    $stmt->bindParam(":role",$this->role);
    $stmt->bindParam(":registrationdate",date("Y-m-d"));
    $stmt->execute();
    echo "is succes";
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function UpdateProfile(){
        $stmt = $this->pdo->prepare("UPDATE public.users
	SET  nom=:nom, prénom=:prénom, email=:email, password=:password, phone=:phone
	WHERE id=:id");
        $stmt->bindParam(":nom",$this->nom);
        $stmt->bindParam(":prénom",$this->prenom);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":password",$this->password);
        $stmt->bindParam(":phone",$this->phone);
        $stmt->execute();

    }
    public function addComment($id , $comment , $article){
        $stmt = $this->pdo->perpare("INSERT INTO public.avis(
	react, comment, rating, article_id , membre_id)
	VALUES (:react, :comment, :rating, :article_id , :membre_id)");
        $stmt->bindParam(":react",$react);
        $stmt->bindParam(":comment",$comment);
        $stmt->bindParam(":rating",$rating);
        $stmt->bindParam(":article_id",$article_id);
        $stmt->bindParam(":membre_id",$membre_id);
        $stmt->execute();

    }
    public function EditComment($id , $comment , $avis){
        $stmt = $this->pdo->perpare("INSERT INTO public.avis(
	react, comment, rating, article_id)
	VALUES (:react, :comment, :rating, :article_id) where id =:id ");
        $stmt->bindParam(":react",$react);
        $stmt->bindParam(":comment",$comment);
        $stmt->bindParam(":rating",$rating);
        $stmt->bindParam(":article_id",$id);
        $stmt->execute();

    }
    public function DeleteComment($id){
        $stmt = $this->pdo->perpare("DELETE from public.aviswhere id =:id ");
        $stmt->bindParam(":article_id",$id);
        $stmt->execute();

    }

    public function viewProfile($id){
        $stmt = $this->pdo->prapare("SELECT * from public.users where id = :id");
        $stmt->bindParam(":id",$id);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}