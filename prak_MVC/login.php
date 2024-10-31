<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengurus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login Pengurus</h2>

    <div class="card">
        <form action="index.php?login" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="button create-button">Login</button>
            <button type="button" class="button" onclick="location.href='register.php'">Registrasi</button>
        </form>
    </div>
</body>
</html>
