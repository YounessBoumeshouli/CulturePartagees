<?php
require_once("Core/config/Database.php");
class Avis {
    
    private $pdo;
    
    public function __construct($pdo){
        $this->pdo = Database::getConnection();
    }
    public function afficherAvis($article_id){
        $stmt = $this->pdo->prepare("select * from public.Avis a left join public.users u on a.membre_id = u.id_user   where article_id = :article_id ");
        $stmt->bindParam(":article_id",$article_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        }

    public function afficherAllComment(){
        $stmt = $this->pdo->prepare("select * from public.Avis a left join public.users u on a.membre_id = u.id_user ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    
}