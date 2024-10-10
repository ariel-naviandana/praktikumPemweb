<!DOCTYPE html>
<html>
<body>
    <h5>Login</h5>
    <form action="" method="post">
        <label for="">Username:
            <br>
            <input type="text" name="username">
        </label>
        <br>
        <br>
        <label for="">Password:
            <br>
            <input type="password" name="password">
        </label>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>


    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            setcookie("username", $_POST["username"]);
            setcookie("password", $_POST["password"]);
            header("Location: Lat3_4a.php");
        } else {
            echo "<script>alert('Username or Password invalid');</script>";
        }
    }
    ?>
</body>
</html>