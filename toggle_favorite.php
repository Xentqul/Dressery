<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_date = $_POST['published_date'];

    // Check if the article is already in the user's favorites
    $stmt = $conn->prepare("SELECT * FROM saved_articles WHERE user_id = ? AND article_id = ?");
    $stmt->bind_param("ii", $user_id, $article_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If the article is already a favorite, remove it
        $stmt = $conn->prepare("DELETE FROM saved_articles WHERE user_id = ? AND article_id = ?");
        $stmt->bind_param("ii", $user_id, $article_id);
        $stmt->execute();
    } else {
        // If the article is not a favorite, add it
        $stmt = $conn->prepare("INSERT INTO saved_articles (user_id, article_id, title, author, published_date) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $user_id, $article_id, $title, $author, $published_date);
        $stmt->execute();
    }

    header("Location: fav.php");
    exit();
}
?>