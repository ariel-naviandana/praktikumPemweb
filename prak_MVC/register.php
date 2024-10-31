<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengurus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Registrasi</h2>

    <div class="card">
        <form action="index.php?register" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="angkatan">Angkatan:</label>
            <input type="number" id="angkatan" name="angkatan" required>

            <label>Jabatan:</label>
            <div class="radio-group">
                <input type="radio" id="Kepala Departemen" name="jabatan" value="Kepala Departemen" required>
                <label for="Kepala Departemen">Kepala Departemen</label>
                <input type="radio" id="Menteri" name="jabatan" value="Menteri" required>
                <label for="Menteri">Menteri</label>
            </div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="button create-button">Daftar</button>
            <button type="button" class="button" onclick="location.href='login.php'">Login</button>
        </form>
    </div>
</body>
</html>
