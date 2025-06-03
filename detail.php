<?php
include 'inc/db.php';
$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM blog WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $row['title'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#gallery">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="index.html#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section id="blog">
    <h2><?= $row['title'] ?></h2>
    <div class="blog-container">
        <article style="width: 100%;">
            <p><?= nl2br($row['content']) ?></p>
        </article>
    </div>
</section>

<footer>
    <p>&copy; 2025 Alya Lumombo. Semua hak dilindungi.</p>
</footer>

</body>
</html>