<?php

function inscriptionAction(){
    require_once("Views/Authentification/login.php");
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
    require_once("Views/Admin/categoriesList.php");
}
