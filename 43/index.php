<?php

$dsn  = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection fail........" . $e->getMessage();
}

$name  = "Abid Khan";
$email = "abidkhan@gmail.com";
$skill = "Gamer";
$age   = 12;

$sql  = "insert into tbl_user(name,email,skill,age) values(?,?,?,?)";
$stmt = $pdo->prepare($sql);
$arr  = [$name, $email, $skill, $age];
$stmt->execute($arr);

/*
$sql  = "insert into tbl_user(name,email,skill,age) values(:name,:email,:skill,:age)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':skill', $skill);
$stmt->bindParam(':age', $age);
$stmt->execute();
*/