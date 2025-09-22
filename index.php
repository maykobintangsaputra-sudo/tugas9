<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Sepatu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-orange-600 mb-6">📦 Data Sepatu</h1>
        <a href="tambah.php" class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow hover:bg-orange-600 transition">+ Tambah Data</a>
        <div class="mt-6 overflow-x-auto">
            <table class="w-full border border-gray-200 bg-white rounded-lg shadow">
                <thead class="bg-orange-500 text-white">
                    <tr>
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Merk Sepatu</th>
                        <th class="py-3 px-4">Stok</th>
                        <th class="py-3 px-4">Kategori</th>
                        <th class="py-3 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM sepatu");
                while($data = mysqli_fetch_array($sql)){
                    echo "<tr class='border-b hover:bg-orange-50'>
                        <td class='py-2 px-4'>".$data['id_sepatu']."</td>
                        <td class='py-2 px-4'>".$data['merk_sepatu']."</td>
                        <td class='py-2 px-4'>".$data['stok']."</td>
                        <td class='py-2 px-4'>".$data['kategori']."</td>
                        <td class='py-2 px-4'>
                            <a href='ubah.php?id=".$data['id_sepatu']."' class='bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600'>Ubah</a>
                            <a href='hapus.php?id=".$data['id_sepatu']."' onclick=\"return confirm('Yakin hapus?');\" class='bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2'>Hapus</a>
                        </td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
