<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login</h3>
    <form action="index.php?action=login" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="index.php?action=register">Daftar</a></p>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>