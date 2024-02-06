<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stock Barang</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Tambahkan link untuk ikon Font Awesome -->
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background-image: url('background.jpg');
    background-color: #f0f0f0;
}

h2 {
    text-align: center;
    color: white;
}

.button {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-bottom: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #2980b9;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: rgba(255, 255, 255, 0.8);
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: orange;
    color: white;
}

td a {
    color: orange;
    text-decoration: none;
}

td a:hover {
    text-decoration: underline;
}

.edit-btn,
.delete-btn {
    display: inline-block;
    margin-right: 5px;
    color: #3498db;
    cursor: pointer;
}

.edit-btn:hover,
.delete-btn:hover {
    text-decoration: underline;
}

.edit-icon,
.delete-icon {
    font-size: 16px;
}
</style>
</head>
<body>

<h2>Stock Barang</h2>
<!-- Tambahkan tombol kembali ke dashboard -->
<button onclick="location.href='dashboard.php'"><i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama</button>
<!-- Tombol untuk menambah data baru -->
<button onclick="location.href='tambah_produk.php'"><i class="fas fa-plus"></i> Tambah Produk Baru</button>

<table border="1">
  <tr>
    <th>ProdukID</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
  </tr>
  
  <?php
session_start();
include 'config.php';
   // Query untuk menampilkan barang dari tabel produk
   $sql = "SELECT ProdukID, NamaProduk, Harga, Stok FROM produk";
   $result = mysqli_query($conn, $sql);
 
   // Tampilkan hasil query
   if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
           echo "<tr>";
           echo "<td>" . $row["ProdukID"] . "</td>";
           echo "<td>" . $row["NamaProduk"] . "</td>";
           echo "<td>" . $row["Harga"] . "</td>";
           echo "<td>" . $row["Stok"] . "</td>";
           // Tambahkan tautan untuk mengedit dan menghapus data dengan ikon Font Awesome
           echo "<td>";
           echo "<a href='edit_produk.php?id=" . $row["ProdukID"] . "' title='Edit'><i class='fas fa-edit'></i></a>&nbsp;|&nbsp;";
           echo "<a href='hapus_produk.php?id=" . $row["ProdukID"] . "' title='Hapus'><i class='fas fa-trash-alt'></i></a>";
           echo "</td>";
           echo "</tr>";
       }
   } else {
       echo "<tr><td colspan='5'>0 hasil</td></tr>";
   }
 
   // Tutup koneksi
   mysqli_close($conn);
   ?>
 </table>

</body>
</html>
