<?php
// fetch_article_data.php
require_once("Database.php");
require_once("Articles.php");
require_once("Avis.php");

$id = $_GET["id"];

$article = new Articles(Database::getConnection());
$avis = new Avis(Database::getConnection());

$articleData = $article->afficherArticle($id);
$avisData = $avis->afficherAvis($id);

$response = [
    'article' => $articleData,
    'avis' => $avisData
];

header('Content-Type: application/json');
echo json_encode($response);
?>