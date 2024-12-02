<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
</head>
<body>
    <h1>Recipe List</h1>
    <ul>
        <?php foreach ($recipes as $recipe): ?>
            <li>
                <a href="index.php?action=detail&id=<?= $recipe['id'] ?>">
                    <?= htmlspecialchars($recipe['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
