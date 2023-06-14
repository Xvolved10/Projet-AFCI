<?php
$listeArticle = new Sujets();

$numberPage = $listeArticle->numberPage();
$numberDePage =ceil($numberPage["nbPage"]);
$currentPage;

if(isset($_GET["page"]) && !empty($_GET["page"])){
    $pages = intval($_GET["page"]);
    if(is_int($pages)){
    $currentPage = htmlspecialchars(intval($_GET["page"]));
    }
} else {
    $currentPage =1;
}
$offset = ($currentPage - 1) * 8;
// var_dump($offset);
$listeArticle->setOffset($offset);
$liste = $listeArticle->affichage();
// var_dump($numberDePage);
if (isset($_POST["NouveauSujet"])) {
    header("Location:index.php?NouveauSujet");
    exit(); 
}