<?php
echo "Hello";

require "function.php";

$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

echo"<ul>";
foreach($posts as $pos)
{
    echo "<li>" . $pos ["content"] . "</;i";
}
echo"</ul>";