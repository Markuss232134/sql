<?php
require "function.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

var_dump(isset($_GET["search_query"]));
if (isset($_GET["search_query"]) && $_GET["search_query"] !=""){
    echo "Atgriest ierakstus";
    $posts =$db->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';")->fetchAll();
}
echo "<h1>Blogs</h1>";


echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklet</button>";
echo "</form>";

echo"<ul>";
foreach($posts as $pos)
{
    echo "<li>" . $pos ["content"] . "</li>";
}
echo"</ul>";