<html>
<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Daftar Program Kerja BEM</h2>
        <?php if (isset($_SESSION['jabatan']) && $_SESSION["jabatan"] == "Kepala Departemen"): ?>
        <a href="v_add.php" class="btn btn-primary my-3">Tambah Proker</a>
        <?php endif ?>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Program Kerja</th>
                    <th>Surat Keterangan</th>
                    <?php if (isset($_SESSION['jabatan']) && $_SESSION["jabatan"] == "Kepala Departemen"): ?>
                    <th>Edit</th>
                    <th>Delete</th>
                    <?php endif ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // Pastikan variabel $proker berisi hasil query
                if (!empty($proker)) {
                    foreach ($proker as $row) {
                ?>
                        <tr>
                            <td class="align-middle"><?php echo $row['nomorProgram'] ?></td>
                            <td class="align-middle"><?php echo $row['namaProgram'] ?></td>
                            <td class="align-middle"><?php echo $row['suratKeterangan'] ?></td>
                            <?php if (isset($_SESSION['jabatan']) && $_SESSION["jabatan"] == "Kepala Departemen"): ?>
                            <td class="align-middle"><a href="v_edit.php?edit=<?php echo $row['nomorProgram'] ?>" class="btn btn-warning">Edit</a></td>
                            <td class="align-middle"><a href="index.php?delete=<?php echo $row['nomorProgram'] ?>" class="btn btn-danger">Delete</a></td>
                            <?php endif ?>
                        </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="5">Tidak ada data program kerja.</td></tr>';
                }
                ?>
            </tbody>
        </table>
        <button class="btn btn-danger" onclick="location.href='index.php?logout'">Logout</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
