<?php
require "function.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
$c_ram = [];
$select = "SELECT * FROM posts";
if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    echo "atgriest ierakstu";
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE content LIKE :nosaukums";
    $c_ram = ["nosaukums" => $search_query];
}
$posts = $db->query($select, $c_ram)->fetchAll();

$pageTitle = "Blog";
$style = "css/style1.css";

require "views/index.view.php";
