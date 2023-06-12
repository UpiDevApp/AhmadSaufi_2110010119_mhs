<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}
include "koneksi.php";

$query_mhs = "SELECT K.nm_kls, M.* FROM tbl_kls K, tbl_mhs M WHERE K.id_kls = M.id_kls ORDER BY M.id_mhs DESC;";
$result_mhs = mysqli_query($conn, $query_mhs);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon " href="images/logo.png" type="image/x-icon">

    <title>Data Mahasiswa</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row pt-2">
            <div class="col bg-primary py-5">
                <h1 class="text-center text-white">Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <?php include "menu.php" ?>

            <div class="col-lg-9 bg-white">
                <h2 class="mt-2">Data Mahasiswa</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adip
                    isicing elit. Blanditiis mollitia accusamus ipsa dolor vero necessi
                    tatibus! Rerum odit eligendi dolorem porro dignissimos dolorum voluptatum, p
                    ossimus nisi.</p>
                <a href="mhs-create.php" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="table-responsive mb-5">
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Alamat</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row_mhs = mysqli_fetch_assoc($result_mhs)) { ?>
                                <tr>
                                    <td>
                                        <a href="mhs-update.php?id=<?php echo $row_mhs["id_mhs"] ?>" class="btn btn-sm btn-success">Update</a>
                                        <a href="mhs-delete.php?id=<?php echo $row_mhs["id_mhs"] ?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah anda ingin menghapus data ini..')">Delete</a>
                                    </td>

                                    <td><?php echo $row_mhs["nm_mhs"] ?></td>
                                    <td><?php echo $row_mhs["npm"] ?></td>
                                    <td><?php echo $row_mhs["jk"] ?></td>
                                    <td><?php echo $row_mhs["nm_kls"] ?></td>
                                    <td><?php echo $row_mhs["alamat"] ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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