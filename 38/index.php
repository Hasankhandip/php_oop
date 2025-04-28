<?php

$db = new mysqli("localhost", "root", "", "userdata");

if (mysqli_connect_errno()) {
    echo "Connection Failed....";
    exit();
} else {
    echo "Connection Successful....";
}

$sql = "select * from tbl_user";
// $sql = "update tbl_user SET skill='Java, Php' where id='1'";

$result = $db->query($sql);

while ($data = $result->fetch_object()) {
    echo "<pre>";
    echo $data->skill;
    echo "</pre>";
}