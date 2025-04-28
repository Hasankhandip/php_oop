<?php
$db = new mysqli("localhost", "root", "", "oop_blob_test");

if (mysqli_connect_errno()) {
    echo "Connection Failed....";
    exit();
}

// upload img start
// $sql = "insert into images(image) values(?)";

// $stmt = $db->prepare($sql);
// $stmt->bind_param("b", $image);
// $image = file_get_contents('1.jpg');
// $stmt->send_long_data('0', $image);
// $stmt->execute();
// upload img end

// show img start
$sql = "select image from images where id=?";

$stmt = $db->prepare($sql);
$stmt->bind_param("i", $id);
$id = 1;
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
header("content-type:jpg");
echo '<img src="data:image/jpg;base64,' . base64_encode($image) . '">';
// show img end