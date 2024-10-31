<?php
session_start();

if(!isset($_SESSION['nim'])){
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Program Kerja BEM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Program Kerja BEM</h2>
    <?php if (isset($_SESSION['jabatan']) && $_SESSION["jabatan"] == "Kepala Departemen"): ?>
    <button class="button create-button" onclick="location.href='create.php'">Create Program</button>
    <?php endif; ?>
      <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Program Kerja</th>
                <th>Surat Keterangan</th>
                <?php if (isset($_SESSION['jabatan']) && $_SESSION['jabatan'] == "Kepala Departemen"): ?>
                <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($proker)): ?>
                <tr>
                    <td colspan="4" style="text-align:center; color: gray;">
                        Tidak ada data program kerja. Silakan tambah data baru.
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach($proker as $row): ?>
                    <tr>
                        <td><?php echo $row['nomorProgram']; ?></td>
                        <td><?php echo $row['namaProgram']; ?></td>
                        <td><?php echo $row['suratKeterangan']; ?></td>
                        <?php if (isset($_SESSION['jabatan']) && $_SESSION['jabatan'] == "Kepala Departemen"): ?>
                        <td>
                            <button class='button edit-button' onclick="location.href='create.php?id=<?php echo $row['nomorProgram']; ?>'">Edit</button>
                            <button class='button delete-button' onclick="confirm('Are you sure you want to delete this program?') ? location.href='delete.php?id=<?php echo $row['nomorProgram']; ?>' : ''">Delete</button>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <button class="button logout-button" onclick="location.href='logout.php'">Logout</button>
</body>
</html>
