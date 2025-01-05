<?php
require_once("User.php");

class Admin extends User{
    public function __construct($nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo) {
        parent::__construct( $nom, $prenom, $email, $password, $phone, $role, $registrationDate,$pdo);
        $this->role = "admin";
    }
    public function consulter(){
        $stmt = $this->pdo->prepare("select * from public.articles ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function creeCategorie($nom){
        $stmt = $this->pdo->prepare("INSERT INTO public.categories(
	nom)
	VALUES (:nom)");
    $stmt->bindParam(":nom",$nom);
    $stmt->execute();
    }
    public function DescriptionCategorie($id,$discription){
        $stmt = $this->pdo->prepare("UPDATE public.categories
	SET description =  :description where id = :id");
    $stmt->bindParam(":description",$description);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    }
    
    
    public function DeleteComment($id){
        $stmt = $this->pdo->perpare("DELETE from public.avis where id =:id ");
        $stmt->bindParam(":article_id",$id);
        $stmt->execute();

    }
    public function banUser($id){
        $stmt = $this->pdo->perpare("UPDATE public.avis set  where id =:id ");
        $stmt->bindParam(":article_id",$id);
        $stmt->execute();

    }
    public function AcceptArticlebyID($id,$status){
  
        $stmt = $this->pdo->prepare("UPDATE public.articles SET status=:status WHERE id = :id");
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function ReffuseArticlebyID($id,$status){
  
        $stmt = $this->pdo->prepare("UPDATE public.articles SET status=:status WHERE id = :id");
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
}