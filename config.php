<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "college_chatbot";
$conn = new mysqli($host, $user, $pass, $dbname);
$conn->set_charset("utf8mb4");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
function isLoggedIn() { return isset($_SESSION['student_id']); }
?>