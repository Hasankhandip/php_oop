<?php

$dsn  = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection fail........" . $e->getMessage();
}

$name  = "Arik Khan";
$email = "arikkhan@gmail.com";
$skill = "GoodBoy";
$age   = 8;

$sql  = "insert into tbl_user(name,email,skill,age) values(:name,:email,:skill,:age)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':skill', $skill);
$stmt->bindValue(':age', 8);
$stmt->execute();
