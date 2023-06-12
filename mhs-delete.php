<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}
include "koneksi.php";

$id_mhs = $_GET["id"];

$query = "DELETE FROM tbl_mhs WHERE id_mhs = $id_mhs";
$delete = mysqli_query($conn, $query);

if ($delete) {
    echo " <script>
        alert('Data Berhasil dihapus....!');
        document.location.href = 'mhs.php';
        </script>";
}
