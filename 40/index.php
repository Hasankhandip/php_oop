<?php
$db = new mysqli("localhost", "root", "", "userdata");

if (mysqli_connect_errno()) {
    echo "Connection Failed....";
    exit();
} else {
    echo "Connection Successful....";
}

$sql = "insert into tbl_user(name,email,skill) values(?,?,?)";

$stmt = $db->prepare($sql);
$stmt->bind_param("sss", $name, $email, $skill);

$name  = "Dip Khan";
$email = "dip@gmail.com";
$skill = "Php";
$stmt->execute();
$stmt->close();
$db->close();