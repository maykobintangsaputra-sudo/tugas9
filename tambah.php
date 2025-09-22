<?php
include "koneksi.php";

if(isset($_POST['simpan'])){
    $merk = $_POST['merk_sepatu'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO sepatu (merk_sepatu, stok, kategori) VALUES ('$merk', '$stok', '$kategori')";
    if(mysqli_query($koneksi, $sql)){
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Sepatu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-bold text-orange-600 mb-6">Tambah Data Sepatu</h2>
        <form method="post" class="bg-white p-6 rounded-lg shadow w-96">
            <label class="block mb-2 font-semibold">Merk Sepatu</label>
            <input type="text" name="merk_sepatu" required class="w-full border rounded px-3 py-2 mb-4 focus:ring-2 focus:ring-orange-400">

            <label class="block mb-2 font-semibold">Stok</label>
            <input type="number" name="stok" required class="w-full border rounded px-3 py-2 mb-4 focus:ring-2 focus:ring-orange-400">

            <label class="block mb-2 font-semibold">Kategori</label>
            <input type="text" name="kategori" required class="w-full border rounded px-3 py-2 mb-4 focus:ring-2 focus:ring-orange-400">

            <button type="submit" name="simpan" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition">Simpan</button>
            <a href="index.php" class="ml-3 text-gray-600 hover:underline">Kembali</a>
        </form>
    </div>
</body>
</html>
