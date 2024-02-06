<?php
// Mulai atau lanjutkan sesi
session_start();

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Gantilah 'path/to/your/image.jpg' dengan path gambar Anda */

            background-color: #f4f4f4;
        }

        #header {
          
            color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%;
            margin-bottom: 20px;
        }

        #welcome {
            font-size: 24px;
        }

        #menu-container {
            text-align: center;
            margin-top: 20px;
        }

        #menu {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #menu a {
            margin: 10px 0;
            padding: 12px 24px;
            text-decoration: none;
            background-color: #2ecc71;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 16px;
            border: 2px solid #27ae60;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        #menu a.logout {
            background-color: #e74c3c;
            border-color: #c0392b;
        }

        #menu a:hover {
            background-color: #27ae60;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div id="header">
        <div id="welcome">
            <h2>Aplikasi Kasir</h2>
        </div>
    </div>

    <div id="menu-container">
        <div id="menu">
            <a href="pembelian.php">Pembelian</a>
            <a href="stok_barang.php">Stok Barang</a>
            <a href="detail_penjualan.php">Detail Penjualan</a>
            <?php
            if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
                echo '<a href="data_petugas.php">Data Petugas</a>';
            }
            ?>
            <a href="logout.php" class="logout">Keluar</a>
        </div>
    </div>

</body>

</html>
