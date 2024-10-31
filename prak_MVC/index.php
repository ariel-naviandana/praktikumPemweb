<?php
include_once("c_programKerja.php");
include_once("c_pengurus.php");

$controller = new c_programKerja();

$controllerPengurus = new c_pengurus();

session_start();

if (isset($_GET["register"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jabatan = $_POST["jabatan"];
    $angkatan = $_POST["angkatan"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $controllerPengurus->insert($nim, $nama, $jabatan, $angkatan, $password);
} else if (isset($_GET["login"])) {
    $nim = $_POST["nim"];
    $password = $_POST["password"];

    // Get user details by NIM
    $pengurusByNim = $controllerPengurus->getByNim($nim);

    // Check if user exists and verify password
    if ($pengurusByNim && password_verify($password, $pengurusByNim['password'])) {
        $_SESSION["nim"] = $nim;
        $_SESSION["jabatan"] = $pengurusByNim["jabatan"];
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid NIM or password!";
    }
}
else if(isset($_GET["logout"])){
    session_start();
    session_destroy();
    session_unset();

    header("Location: login.php");
}

else if (isset($_GET['add'])) {
    $nomorProgram = $_POST['nomorProgram'];
    $namaProgram = $_POST['namaProgram'];
    $suratKeterangan = $_POST['suratKeterangan'];
    $controller->insert($nomorProgram, $namaProgram, $suratKeterangan);
} elseif (isset($_GET['edit'])) {
    $num = $_GET['edit'];
    $nama = $_POST['namaProgram'];
    $surat = $_POST['suratKeterangan'];
    $controller->updateAction($num, $nama, $surat);
} elseif (isset($_GET['delete'])) {
    $nomor = $_GET['delete'];
    $controller->deleteAction($nomor);
} else {
    $controller->invoke();
}
?>
