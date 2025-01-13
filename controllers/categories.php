<?php


$config = require("config.php");

$db = new Database($config["database"]);
$c_ram = [];
$select = "SELECT * FROM categories";
if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    echo "atgriest ierakstu";
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE :nosaukums";
    $c_ram = ["nosaukums" => $search_query];
}
$posts = $db->query($select, $c_ram)->fetchAll();

$pageTitle = "idk";
$style = "css/style1.css";

require "views/categories.view.php";