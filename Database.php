<?php

class Database {
   public function query(){
        // Data Source Name
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";
        // PHP Data Object 
        $pdo = new PDO($dsn);
        // Sagatavo 1.
        $statement = $pdo->prepare("SELECT * FROM posts");
        // Sagatav0 2.
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
   } 
}