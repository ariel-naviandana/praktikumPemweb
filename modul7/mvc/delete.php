<?php
include 'koneksiMVC.php';

if (isset($_GET['id'])) {
    global $mysqli;
    $stmt = $mysqli->prepare("DELETE FROM proker WHERE nomorProgram = ?");
    $stmt->bind_param("i", $_GET['id']);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}

$mysqli->close();
?>
