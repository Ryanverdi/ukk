<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-gn8cHtUGuVJdZ3C8iK6NtHjL5x99NhN28Lv/KyviHZfVklvQDQTXTQpYjgVi/v+71b00NUarDT8F8z1mGBJj3w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #fff;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: orange;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ecf0f1;
        }

        a.button {
            display: inline-block;
            background: linear-gradient(to right, #3498db, #2980b9);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            margin-right: 10px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(52, 152, 219, 0.3);
        }

        a.button:hover {
            background: linear-gradient(to right, #2980b9, #3498db);
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(52, 152, 219, 0.3);
        }

        a.edit-button {
            background: linear-gradient(to right, #2ecc71, #27ae60);
            box-shadow: 0 4px 8px rgba(46, 204, 113, 0.3);
        }

        a.delete-button {
            background: linear-gradient(to right, #e74c3c, #c0392b);
            box-shadow: 0 4px 8px rgba(231, 76, 60, 0.3);
        }
    </style>
</head>

<body>

    <h2>Data Petugas</h2>

    <table>
        <thead>
            <tr>
                <th>ID Petugas</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Level</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM petugas";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_petugas'] . "</td>";
                    echo "<td>" . $row['nama_petugas'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['level'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit_petugas.php?id=" . $row['id_petugas'] . "' class='button edit-button'><i class='fas fa-edit'></i> Edit</a>";
                    echo "<a href='hapus_petugas.php?id=" . $row['id_petugas'] . "' class='button delete-button'><i class='fas fa-trash-alt'></i> Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data petugas.</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>

    <a href="dashboard.php" class='button'><i class='fas fa-arrow-left'></i> Kembali ke Dashboard</a>

    <a href="registrasi.php" class='button'><i class='fas fa-user-plus'></i> Tambah Petugas </a>

</body>

</html>
