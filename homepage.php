<?php include 'data.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tech News</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <h1>Tech News</h1>
        <?php foreach ($articles as $article): ?>
            <div class="article">
                <h2><a href="article.php?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['title']) ?></a></h2>
                <p class="date"><?= $article['date'] ?></p>
                <p><?= substr($article['content'], 0, 100) ?>...</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
