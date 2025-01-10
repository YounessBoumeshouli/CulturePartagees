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
	label)
	VALUES (:label)");
    $stmt->bindParam(":label",$nom);
    $stmt->execute();
    }
    public function creeTag($tag){
        $stmt = $this->pdo->prepare("INSERT INTO public.tags(
	label_tag)
	VALUES (:label_tag)");
    $stmt->bindParam(":label_tag",$tag);
    $stmt->execute();
    }
    public function DescriptionCategorie($id,$discription){
        $stmt = $this->pdo->prepare("UPDATE public.categories
	SET description =  :description where id = :id");
    $stmt->bindParam(":description",$description);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    }
    
    
    public function DeleteComment($id) {
        try {
            // Validate input
            if (!is_numeric($id) || $id <= 0) {
                throw new InvalidArgumentException("Invalid comment ID");
            }
    
            // Prepare and execute the SQL query
            $stmt = $this->pdo->prepare("DELETE FROM public.avis WHERE id_comment = :id_comment");
            $stmt->bindParam(":id_comment", $id, PDO::PARAM_INT);
            $stmt->execute();
    
            // Check if any rows were affected
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            // Log the error (optional)
            error_log("Error deleting comment: " . $e->getMessage());
    
            // Return false to indicate failure
            return false;
        } catch (InvalidArgumentException $e) {
            // Log the error (optional)
            error_log("Invalid input: " . $e->getMessage());
    
            // Return false to indicate failure
            return false;
        }
    }
    public function ChangeStatus($id){
        $search = $this->pdo->prepare("SELECT * from public.users   where id_user =:id_user ");
        $search->bindParam(":id_user",$id);
        $search->execute();
       if( $result = $search->fetch(PDO::FETCH_ASSOC)){
        if($result["status"] == "safe"){
            $status = "baned";
            $stmt = $this->pdo->prepare("UPDATE public.users set status = :status  where id_user =:id_user ");
            $stmt->bindParam(":status",$status);
            $stmt->bindParam(":id_user",$id);
            $stmt->execute();
        }else{
            $status = "safe";
            $stmt = $this->pdo->prepare("UPDATE public.users set status = :status  where id_user =:id_user ");
            $stmt->bindParam(":status",$status);
            $stmt->bindParam(":id_user",$id);
            $stmt->execute();
        }
        
       }
       

    }
    public function AcceptArticlebyID($id,$status){
  
        $stmt = $this->pdo->prepare("UPDATE public.articles SET status=:status WHERE id_article = :id");
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function ReffuseArticlebyID($id,$status){
  
        $stmt = $this->pdo->prepare("UPDATE public.articles SET status=:status WHERE id_article = :id");
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    
}