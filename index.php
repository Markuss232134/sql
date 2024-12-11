<?php
echo "Hello";

require "function.php";
require "Database.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts");

echo"<ul>";
foreach($posts as $pos)
{
    echo "<li>" . $pos ["content"] . "</li>";
}
echo"</ul>";