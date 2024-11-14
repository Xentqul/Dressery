<?php
session_start();
include 'db.php';

// Проверка, что POST запрос существует и пользователь авторизован
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_date = $_POST['published_date'];

    // Подготовка SQL запроса для вставки данных в базу данных
    $stmt = $conn->prepare("INSERT INTO saved_articles (user_id, title, author, published_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $title, $author, $published_date);

    // Выполнение запроса
    if ($stmt->execute()) {
        // Перенаправление пользователя на страницу со списком сохраненных статей
        header('Location: fav.php');
        exit();
    } else {
        echo "<p class='error'>Error: " . $stmt->error . "</p>";
    }
} else {
    echo "<p class='error'>User not authenticated or invalid request</p>";
}
?>