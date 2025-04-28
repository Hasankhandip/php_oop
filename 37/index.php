<?php

$db = new mysqli("localhost", "root", "", "userdata");

if (mysqli_connect_errno()) {
    echo "Connection Failed....";
    exit();
} else {
    echo "Connection Successful....";
}