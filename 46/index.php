<?php

$dsn  = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection fail........" . $e->getMessage();
}

// update table
$id  = 2;
$age = 22;

$sql  = "update tbl_user set age=:age where id=:id";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $id);
$stmt->bindValue(':age', $age);
$stmt->execute();

while ($data = $stmt->fetch()) {
    echo "Name :" . $data['name'] . "<br>";
    echo "Skill :" . $data['skill'] . "<br>";
}
// update table

// delete table
// $id   = 6;
// $sql  = "delete from tbl_user where id=?";
// $stmt = $pdo->prepare($sql);
// $stmt->bindValue(1, $id);
// $stmt->execute();
// delete table

$id   = 6;
$sql  = "delete from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();