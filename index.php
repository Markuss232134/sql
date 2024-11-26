<?php
echo "Strada";

$connection = new mysqli("localhost", "root", "root", "sipols");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();
var_dump($data);

echo "<form>";










echo "</form>";


