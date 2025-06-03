<?php include 'inc/db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog - Alya</title>
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
    <h2>Artikel</h2>
    <div class="blog-container">
    <?php
    $index = 1;
    $result = $conn->query("SELECT * FROM blog ORDER BY created_at DESC");
    while($row = $result->fetch_assoc()) {
    echo "<article>";
    echo "<img src='Artikel{$index}.jpg' alt='artikel'>";
    echo "<p><a href='{$row['link']}' target='_blank'>{$row['title']}</a></p>";
    echo "</article>";
    $index++;
}
?>

    </div>
</section>

<footer>
    <p>&copy; 2025 Alya Lumombo. Semua hak dilindungi.</p>
</footer>

</body>
</html>