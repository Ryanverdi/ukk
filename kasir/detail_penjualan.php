<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Penjualan</title>
<style>
  body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 20px;
      background-image: url('background.jpg');

      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: white;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
      margin-bottom: 20px;
      background-color: #fff;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: orange;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .button {
      background-color: orange;
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 5px;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

<h2>History Penjualan</h2>

<table>
  <thead>
    <tr>
      <th>NO</th>
      <th>TanggalPenjualan</th>
      <th>NamaProduk</th>
      <th>JumlahProduk</th>
      <th>Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <!-- Isi tabel dengan data dari database menggunakan PHP -->
    <?php
    include 'config.php';
    $sql = "SELECT detailpenjualan.*,produk.NamaProduk, penjualan.TanggalPenjualan FROM detailpenjualan
    LEFT JOIN produk ON detailpenjualan.ProdukID = produk.ProdukID
    LEFT JOIN penjualan ON detailpenjualan.PenjualanID = penjualan.PenjualanID"; 
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['DetailID'] . "</td>";
            echo "<td>" . $row['TanggalPenjualan'] . "</td>";
            echo "<td>" . $row['NamaProduk'] . "</td>";
            echo "<td>" . $row['JumlahProduk'] . "</td>";
            echo "<td>" . $row['Subtotal'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data detail penjualan.</td></tr>";
    }
    mysqli_close($conn);
    ?>
  </tbody>
</table>

<!-- Tombol untuk kembali ke halaman dashboard -->
<a href="dashboard.php" class="button">Kembali ke Dashboard</a>

</body>
</html>
