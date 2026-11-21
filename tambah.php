<?php
include("koneksi.php");

if (isset($_POST['submit'])) {

    $kategori   = $_POST['kategori'];
    $nama       = $_POST['nama'];
    $gambar     = $_POST['gambar'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok       = $_POST['stok'];

    $sql = "INSERT INTO data_barang
            (kategori, nama, gambar, harga_beli, harga_jual, stok)
            VALUES
            ('$kategori', '$nama', '$gambar', '$harga_beli', '$harga_jual', '$stok')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>

<body>

<h1>Tambah Barang</h1>

<form method="post">

    <p>
        <label>Kategori</label><br>
        <input type="text" name="kategori" required>
    </p>

    <p>
        <label>Nama Barang</label><br>
        <input type="text" name="nama" required>
    </p>

    <p>
        <label>Gambar</label><br>
        <input type="text" name="gambar">
    </p>

    <p>
        <label>Harga Beli</label><br>
        <input type="number" name="harga_beli" required>
    </p>

    <p>
        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual" required>
    </p>

    <p>
        <label>Stok</label><br>
        <input type="number" name="stok" required>
    </p>

    <p>
        <input type="submit" name="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </p>

</form>

</body>
</html>