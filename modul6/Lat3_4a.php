<?php
if (!isset($_COOKIE["username"]) || !isset($_COOKIE["password"])) {
    echo "<script>alert('Redirect to halaman login');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit();
}

if (isset($_POST['logout'])) {
    setcookie("username", "", time() - 3600);
    setcookie("password", "", time() - 3600);
    header("Location: login.php");
    exit();
}

if (isset($_COOKIE['cd_order'])) {
    $cdorder = $_COOKIE['cd_order'];
}else{
    $cdorder = 0;
}

if (isset($_COOKIE['dvd_order'])) {
    $dvdorder = $_COOKIE['dvd_order'];
}else{
    $dvdorder = 0;
}

?>

<html>

<head>
    <title>Order Form</title>
</head>

<body>
    <form action="Lat3_4b.php" method="post">
        <p> Order CD, amount:
            <?php
            echo '<input type="text" name="cd_order" value="' . $cdorder . '" size="2" maxlength="2">';
            ?>
            </p>
        <p> Order DVD, amount:
            <?php
            echo '<input type="text" name="dvd_order" value="'. $dvdorder .'" size="2" maxlength="2">';
            ?>
        </p>
        <input type="submit" value="Add To Cart" name="submit">
    </form>
    <form action="" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>

</html>