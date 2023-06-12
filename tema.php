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
                <h2 class="mt-2">Input Data Mahasiswa</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adip
                    isicing elit. Blanditiis mollitia accusamus ipsa dolor vero necessi
                    tatibus! Rerum odit eligendi dolorem porro dignissimos dolorum voluptatum, p
                    ossimus nisi.</p>
                <img src="images/campus.jpg" alt="campus" class="img-fluid mb-2" width="800px">
                <div class="mb-5">
                    <form method="POST" target="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama :</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama lengkap tanpa gelar" required>
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin :</label> <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki" checked>
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                            <div class="mb-3">
                                <label for="kelas">Kelas :</label>
                                <select class="form-select" id="kelas" name="kelas" required>
                                    <option selected>Pilih Kelas..</option>
                                    <option value="1">4A</option>
                                    <option value="2">4B</option>
                                    <option value="3">4O</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat">Alamat :</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat lengkap" id="alamat"></textarea>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary" name="submid">Simpan</button>
                        <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cencel</button>
                    </form>
                </div>
                <hr>
                <h2 class="mt-2">Data Mahasiswa</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adip
                    isicing elit. Blanditiis mollitia accusamus ipsa dolor vero necessi
                    tatibus! Rerum odit eligendi dolorem porro dignissimos dolorum voluptatum, p
                    ossimus nisi.</p>
                <div class="table-responsive mb-5">
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="update.php" class="btn btn-sm btn-success">Update</a>
                                    <a href="update.php" class="btn btn-sm btn-warning">Delete</a>
                                </td>

                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>

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