<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}
include "koneksi.php";

$id_mhs = $_GET["id"];
$query_mhs = "SELECT * FROM tbl_mhs WHERE id_mhs = $id_mhs";
$result_mhs = mysqli_query($conn, $query_mhs);
$row_mhs = mysqli_fetch_assoc($result_mhs);

if (isset($_POST["submit"])) {

    $nm_mhs = $_POST["nm_mhs"];
    $npm = $_POST["npm"];
    $jk = $_POST["jk"];
    $id_kls = $_POST["id_kls"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE tbl_mhs SET 
    nm_mhs = '$nm_mhs',
    npm = '$npm',
    jk = '$jk',
    nm_mhs = '$nm_mhs',
    id_kls = '$id_kls',
    alamat = '$alamat'
    WHERE id_mhs = $id_mhs";
    $update = mysqli_query($conn, $query);

    if ($update) {
        echo " <script>
        alert('Data Berhasil disimpan....!');
        document.location.href = 'mhs.php';
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

    <title>Edit Data Mahasiswa</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row pt-2">
            <div class="col bg-primary py-5">
                <h1 class="text-center text-white">Edit Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <?php include "menu.php" ?>

            <div class="col-lg-9 bg-white">
                <h2 class="mt-2">Update Data Mahasiswa</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adip
                    isicing elit. Blanditiis mollitia accusamus ipsa dolor vero necessi
                    tatibus! Rerum odit eligendi dolorem porro dignissimos dolorum voluptatum, p
                    ossimus nisi.</p>

                <div class="mb-5">
                    <form method="POST" target="">

                        <div class="mb-3">
                            <label for="nm_mhs" class="form-label">Nama Kelas :</label>
                            <input type="text" class="form-control" name="nm_mhs" id="nm_mhs" value="<?php echo $row_mhs["nm_mhs"]  ?>" placeholder="Nama Lengkap anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM :</label>
                            <input type="number" class="form-control" name="npm" id="npm" value="<?php echo $row_mhs["npm"]  ?>" placeholder="Nomor Pokok Mahasiswa" required>
                        </div>

                        <div class="mb-3">
                            <label>Jenis Kelamin :</label> <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki" <?php if ($row_mhs["jk"] == 'Laki-laki') echo 'checked' ?>>
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan" <?php if ($row_mhs["jk"] == 'Perempuan') echo 'checked' ?>>
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                            <div class="mb-3">
                                <label for="id_kls">Kelas :</label>
                                <select class="form-select" id="id_kls" name="id_kls" required>
                                    <?php
                                    $query_kls = "SELECT * FROM tbl_kls";
                                    $result_kls = mysqli_query($conn, $query_kls);
                                    while ($row_kls = mysqli_fetch_assoc($result_kls)) {
                                    ?>
                                        <option value="<?php echo $row_kls["id_kls"] ?>" <?php if (!(strcmp($row_kls["id_kls"], htmlentities($row_mhs["id_kls"], ENT_COMPAT, 'utf-8')))) {
                                                                                                echo "SELECTED";
                                                                                            } ?>><?php echo $row_kls["nm_kls"] ?></option>
                                        <option value="2">4B</option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="alamat">Alamat :</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat lengkap" id="alamat"><?php echo $row_mhs["alamat"]  ?></textarea>

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