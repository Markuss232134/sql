<?php

require "Validator.php";

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];
    $category_id = isset($_POST["category_id"]) ? $_POST["category_id"] : 0;

    if(!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Ieveidojiet atbilstošu Bloga Iearkstu";
    }
    if($category_id !== "0" && !Validator::number($_POST["category_id"])){
        $errors["content"] = "Izvēlieties atbilstošu kategoriju!";
    }
    elseif(empty($errors)){
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"],];
        $posts = $db->query($sql, $params)->fetchAll();
        header("Location: /"); 
        exit();
    }
 

}








$pageTitle = "Izveidot";
require "views/posts/create.view.php";