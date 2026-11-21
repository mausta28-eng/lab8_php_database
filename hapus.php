<?php
include("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM data_barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menghapus data.";
}
?>