<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION["login"])) {
    header("Location: home.php");
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION["nama"] = $row["nama"];
            header("Location: home.php");
            exit;
        }
    }
    $error = true;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon " href="images/logo.png" type="image/x-icon">

    <title>App Data Mahasiswa</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row pt-2">
            <div class="col bg-primary py-5">
                <h1 class="text-center text-white">Aplikasi Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <?php include "menu.php" ?>

            <div class="col-lg-9 bg-white">
                <h2 class="mt-2">Login Admin</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adip
                    isicing elit. Blanditiis mollitia accusamus ipsa dolor vero necessi
                    tatibus! Rerum odit eligendi dolorem porro dignissimos dolorum voluptatum, p
                    ossimus nisi.</p>
                <?php
                if (isset($error)) { ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                        Username atau password Salah..!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <div class="mb-5">
                    <form method="POST" target="">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username :</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col bg-info py-2">
                <p class="text-center text-white">Copyright &copy; Saufi <?php echo date("Y") ?></p>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>