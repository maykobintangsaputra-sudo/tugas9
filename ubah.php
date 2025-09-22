<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM sepatu WHERE id_sepatu='$id'");
$data = mysqli_fetch_array($sql);

if(isset($_POST['update'])){
    $merk = $_POST['merk_sepatu'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE sepatu SET merk_sepatu='$merk', stok='$stok', kategori='$kategori' WHERE id_sepatu='$id'";
    if(mysqli_query($koneksi, $query)){
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
    <title>Ubah Data Sepatu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h2 class="text-2xl font-bold text-orange-600 mb-6">Ubah Data Sepatu</h2>
        <form method="post" class="bg-white p-6 rounded-lg shadow w-96">
            <label class="block mb-2 font-semibold">Merk Sepatu</label>
            <input type="text" name="merk_sepatu" value="<?php echo $data['merk_sepatu']; ?>" required class="w-full border rounded px-3 py-2 mb-4 focus:ring-2 focus:ring-orange-400">

            <label class="block mb-2 font-semibold">Stok</label>
            <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required class="w-full border rounded px-3 py-2 mb-4 focus:ring-2 focus:ring-orange-400">

            <label class="block mb-2 font-semibold">Kategori</label>
            <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required class="w-full border rounded px-3 py-2 mb-4 focus:ring-2 focus:ring-orange-400">

            <button type="submit" name="update" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Update</button>
            <a href="index.php" class="ml-3 text-gray-600 hover:underline">Kembali</a>
        </form>
    </div>
</body>
</html>
