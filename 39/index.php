<?php
$db = new mysqli("localhost", "root", "", "userdata");

if (mysqli_connect_errno()) {
    echo "Connection Failed....";
    exit();
} else {
    echo "Connection Successful....";
}

$sql = "select name,skill from tbl_user order by id";

$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($name, $skill);

while ($stmt->fetch()) {
    echo "<pre>";
    echo $skill . " -> " . $name;
    echo "</pre>";
}