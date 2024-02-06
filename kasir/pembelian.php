<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('background.jpg');
            background-color: #f8f8f8;
            color: #333;
        }

        h2 {
            text-align: center;
            color: white; /* Hitam */
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: orange;/* Warna putih dengan tingkat transparansi 0.8 */
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

    
        

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: white;
        }

        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"%3E%3Cpath d="M7 10l5 5 5-5z" /%3E%3C/svg%3E');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
        }

        a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: white;
            margin-top: 10px;
        }

        button {
            background-color: blue;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: green;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Data Pembelian</h2>

        <form action="tambah_pembelian.php" method="POST">
            <label for="pelanggan">Pelanggan:</label><br>
            <select id="pelanggan" name="pelanggan">
                <?php
                include 'config.php';
                $sql = "SELECT PelangganID, NamaPelanggan FROM pelanggan";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['PelangganID'] . "'>" . $row['NamaPelanggan'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Tidak ada pelanggan</option>";
                }

                mysqli_close($conn);
                ?>
            </select>
            <a href="tambah_pelanggan.php">Tambah Pelanggan Baru</a><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>
