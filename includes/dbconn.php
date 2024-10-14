<?php

include_once 'config.php';   
$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
