<?php
include("koneksi.php");

$id = $_GET['id'];

$sql = "SELECT * FROM data_barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

    $kategori   = $_POST['kategori'];
    $nama       = $_POST['nama'];
    $gambar     = $_POST['gambar'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok       = $_POST['stok'];

    $sql = "UPDATE data_barang SET
            kategori='$kategori',
            nama='$nama',
            gambar='$gambar',
            harga_beli='$harga_beli',
            harga_jual='$harga_jual',
            stok='$stok'
            WHERE id_barang='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal mengubah data.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Barang</title>
</head>

<body>

<h1>Ubah Barang</h1>

<form method="post">

    <p>
        <label>Kategori</label><br>
        <input type="text" name="kategori"
               value="<?= $data['kategori']; ?>" required>
    </p>

    <p>
        <label>Nama Barang</label><br>
        <input type="text" name="nama"
               value="<?= $data['nama']; ?>" required>
    </p>

    <p>
        <label>Gambar</label><br>
        <input type="text" name="gambar"
               value="<?= $data['gambar']; ?>">
    </p>

    <p>
        <label>Harga Beli</label><br>
        <input type="number" name="harga_beli"
               value="<?= $data['harga_beli']; ?>" required>
    </p>

    <p>
        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual"
               value="<?= $data['harga_jual']; ?>" required>
    </p>

    <p>
        <label>Stok</label><br>
        <input type="number" name="stok"
               value="<?= $data['stok']; ?>" required>
    </p>

    <p>
        <input type="submit" name="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </p>

</form>

</body>
</html>