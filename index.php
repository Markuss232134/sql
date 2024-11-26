<?php
echo "Strada";

$connection = new mysqli("localhost", "root", "", "sipols");
$result = $connection->query("SELECT * FROM users");
$data = $result->fetch_assoc();
var_dump($data);

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

$sql = "INSERT INTO users
        (username, pass)
        VALUES
        ('$username', '$password');
";
$connection->query($sql);   
}

echo "<form method='POST'>";
    echo " <label>Lietotājvārds: <input name='username' placeholder='Lietotajvārds' /><label/><br>";
    echo "<label>Parole: <input type='password' name='password' placeholder='Parole'/><label/><br>";
    echo "<input type='submit' value='Reģistrēties'/>";
echo "</form>";


