<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gn8cHtUGuVJdZ3C8iK6NtHjL5x99NhN28Lv/KyviHZfVklvQDQTXTQpYjgVi/v+71b00NUarDT8F8z1mGBJj3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            background-image: url('background.jpg');
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        form {
            max-width: 300px; /* Lebar form disesuaikan */
            width: 100%;
            background-color: orange;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:hover,
        input[type="text"]:focus {
            border-color: #2980b9;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <?php
    session_start();
    include 'config.php';
    // Pastikan parameter id produk dikirimkan melalui URL
    if(isset($_GET["id"])) {
        $produk_id = $_GET["id"];

        // Query untuk mendapatkan informasi produk berdasarkan ID
        $sql = "SELECT * FROM produk WHERE ProdukID = $produk_id";
        $result = mysqli_query($conn, $sql);

        // Tampilkan formulir untuk edit produk
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <form action="proses_edit_produk.php" method="POST">
            <h2>Edit Produk</h2>
                <input type="hidden" name="produk_id" value="<?php echo $row['ProdukID']; ?>">
                <label for="nama_produk">Nama Produk:</label>
                <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $row['NamaProduk']; ?>"><br>
                <label for="harga">Harga:</label>
                <input type="text" id="harga" name="harga" value="<?php echo $row['Harga']; ?>"><br>
                <label for="stok">Stok:</label>
                <input type="text" id="stok" name="stok" value="<?php echo $row['Stok']; ?>"><br>
                <button type="submit"><i class="fas fa-save"></i> Simpan</button>
            </form>
            <?php
        } else {
            echo "Produk tidak ditemukan.";
        }

        // Tutup koneksi
        mysqli_close($conn);
    } else {
        echo "ID Produk tidak ditemukan.";
    }
    ?>

</body>
</html>
