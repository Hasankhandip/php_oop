<?php

$dsn  = "mysql:dbname=userdata;host:localhost;";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection fail........" . $e->getMessage();
}

// with(id=?)
$id   = 5;
$sql  = "select * from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

while ($data = $stmt->fetch()) {
    echo "Name :" . $data['name'] . "<br>";
    echo "Skill :" . $data['skill'] . "<br>";
}
// with(id=?)

// with(id=:id)
$id   = 5;
$sql  = "select * from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

while ($data = $stmt->fetch()) {
    echo "Name :" . $data['name'] . "<br>";
    echo "Skill :" . $data['skill'] . "<br>";
}
// with(id=:id)

// with(id=?)
$id   = 1;
$sql  = "select * from tbl_user where id=?";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $id);
$stmt->execute();

while ($data = $stmt->fetch()) {
    echo "Name :" . $data['name'] . "<br>";
    echo "Skill :" . $data['skill'] . "<br>";
}
// with(id=?)

// with(id=:id)
$id   = 1;
$sql  = "select * from tbl_user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

while ($data = $stmt->fetch()) {
    echo "Name :" . $data['name'] . "<br>";
    echo "Skill :" . $data['skill'] . "<br>";
}
// with(id=:id)