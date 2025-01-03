<?php

include("Classes/Admin.php");
include("Classes/Categories.php");
session_start();
function inscriptionAction(){
    require_once("Views/Authentification/login.php");
}
function registrationAction(){
    require_once("Views/Authentification/register.php");
}
function HomeViwe(){
    require_once("Views/Membre/home.php");
}
function ArticleView(){
    require_once("Views/Membre/article.php");
}
function ProfileView(){
    require_once("Views/Membre/profile.php");
}
function SettingsView(){
    require_once("Views/Membre/settings.php");
}
function AuthorSettingsView(){
    require_once("Views/Author/settings.php");
}
function likedArticles(){
    require_once("Views/Membre/likedArticles.php");
}
function addArticle(){
    require_once("Views/Author/addArticle.php");
}
function editArticle(){
    require_once("Views/Author/editeArticle.php");
}
function articles(){
    require_once("Views/Author/articles.php");
}
function articleList(){
    require_once("Views/Admin/articlesList.php");
}
function categoriesList(){
    $categorie = new Categories(Database::getConnection());
    $result= $categorie->afficherCategories();
    require_once("Views/Admin/categoriesList.php");
}
function authorsList(){
    require_once("Views/Admin/AuthorsList.php");
}
function memebersList(){
    require_once("Views/Admin/MemebersList.php");
}
function login(){
    if(isset($_POST["email"],$_POST["password"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
       $user = new User(null,null,$email,$password,null,null,null,Database::getConnection());
      

      $result =  $user->seConnecter();
      $_SESSION['user'] = $result;
      $dir  = $_SESSION['user']['role'];
      $dir[0] = strtoupper($dir[0]);
        require_once("Views/$dir/settings.php");
    
    }
}
function SignUp(){
    if(isset($_POST["name"])){
        $email = $_POST["email"];
        $role = $_POST["role"];
        $nom = $_POST["name"];
        $prenom = $_POST["prenom"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $registrationDate = date("Y-m-d");
       $user = new $role($nom,$prenom,$email,$password,$phone,$role,$registrationDate,Database::getConnection());
       $user->Inscription();
    }
}
function addCategorie(){
    if(isset($_POST["categorie"])){
        $categorie = $_POST["categorie"];
       $admin = new Admin($_SESSION['user']['nom'],$_SESSION['user']['prénom'],$_SESSION['user']['email'],$_SESSION['user']['password'],$_SESSION['user']["phone"],null,$_SESSION['user']["registrationdate"],null);
       $admin->creeCategorie($categorie);
    }
}
