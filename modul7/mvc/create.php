<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_GET['id']) ? 'Edit' : 'Tambah'; ?> Program Kerja BEM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><?php echo isset($_GET['id']) ? 'Edit' : 'Tambah'; ?> Program Kerja BEM</h2>

    <?php
    // Include the database connection
    include 'koneksiMVC.php';

    // Initialize variables
    $nomor = $nama = $surat = '';

    // Check if editing an existing record
    if (isset($_GET['id'])) {
        global $mysqli;
        $stmt = $mysqli->prepare("SELECT * FROM proker WHERE nomorProgram = ?");
        $stmt->bind_param("i", $_GET['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nomor = $row['nomorProgram'];
            $nama = $row['namaProgram'];
            $surat = $row['suratKeterangan'];
        }
        $stmt->close();
    }

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $surat = $_POST['surat'];

        if (isset($_GET['id'])) { // If editing
            $stmt = $mysqli->prepare("UPDATE proker SET namaProgram = ?, suratKeterangan = ? WHERE nomorProgram = ?");
            $stmt->bind_param("ssi", $nama, $surat, $nomor);
        } else { // If creating
            $stmt = $mysqli->prepare("INSERT INTO proker (nomorProgram, namaProgram, suratKeterangan) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $nomor, $nama, $surat);
        }

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Program kerja berhasil " . (isset($_GET['id']) ? "diperbarui" : "ditambahkan") . ".</p>";
            header("Location: index.php");
            exit();
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }
    ?>

    <div class="card">
        <form action="" method="POST">
            <label for="nomor">Nomor Program:</label>
            <input type="number" id="nomor" name="nomor" value="<?php echo $nomor; ?>" required>
            
            <label for="nama">Nama Program:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            
            <label for="surat">Surat Keterangan:</label>
            <input type="text" id="surat" name="surat" value="<?php echo $surat; ?>" required>
            
            <button type="submit" class="button create-button"><?php echo isset($_GET['id']) ? 'Perbarui' : 'Simpan'; ?></button>
            <button type="button" class="button back-button" onclick="location.href='index.php'">Kembali</button>
        </form>
    </div>
</body>
</html>
