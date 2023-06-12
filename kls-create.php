<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}
include "koneksi.php";

if (isset($_POST["submit"])) {

    $nm_kls = $_POST["nm_kls"];
    $query = "INSERT INTO tbl_kls VALUES ('','$nm_kls')";
    $create = mysqli_query($conn, $query);

    if ($create) {
        echo " <script>
        alert('Data Berhasil disimpan....!');
        document.location.href = 'kls.php';
        </script>";
    } else {
        echo " <script>
        alert('Data Gagal disimpan....!');
        history.go(-1);
                </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon " href="images/logo.png" type="image/x-icon">

    <title>Tambah Data Kelas</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row pt-2">
            <div class="col bg-primary py-5">
                <h1 class="text-center text-white">Tambah Data Kelas</h1>
            </div>
        </div>
        <div class="row">
            <?php include "menu.php" ?>

            <div class="col-lg-9 bg-white">
                <h2 class="mt-2">Input Data Kelas</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adip
                    isicing elit. Blanditiis mollitia accusamus ipsa dolor vero necessi
                    tatibus! Rerum odit eligendi dolorem porro dignissimos dolorum voluptatum, p
                    ossimus nisi.</p>

                <div class="mb-5">
                    <form method="POST" target="">
                        <div class="mb-3">
                            <label for="nm_kls" class="form-label">Nama Kelas :</label>
                            <input type="text" class="form-control" name="nm_kls" id="nm_kls" placeholder="Nama Kelas" required>
                        </div>



                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cencel</button>
                    </form>
                </div>
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