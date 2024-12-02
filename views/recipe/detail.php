<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($recipe['name']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($recipe['name']) ?></h1>
    <p><strong>Description:</strong> <?= htmlspecialchars($recipe['description']) ?></p>
    <p><strong>Ingredients:</strong> <?= htmlspecialchars($recipe['ingredients']) ?></p>
    <p><strong>Steps:</strong> <?= htmlspecialchars($recipe['steps']) ?></p>
    <p><strong>Cooking Time:</strong> <?= htmlspecialchars($recipe['cooking_time']) ?> minutes</p>
    <img src="/gambar/<?= htmlspecialchars($recipe['image']) ?>" alt="<?= htmlspecialchars($recipe['name']) ?>" style="max-width: 300px;">
    <br>
    <a href="/public/index.php">Back to Recipe List</a>
</body>
</html>
