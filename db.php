<?php
$servername = "MySQL-8.2";
$username = "root";
$password = "";
$database = "DRESSERY";

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $database);

// Проверяем подключение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>