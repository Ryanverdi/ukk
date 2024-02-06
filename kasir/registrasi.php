<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Gantilah 'path/to/your/image.jpg' dengan path gambar Anda */

            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #register-box {
            width: 300px;
            padding: 20px;
            background-color: orange;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div id="register-box">
        <h2>Registrasi</h2>
        <form action="register_process.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="text" name="nama_panjang" placeholder="Nama Panjang" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <label for="level">Level:</label>
            <select name="level" id="level">
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select><br>
            <input type="submit" value="Daftar">
        </form>
    </div>

</body>

</html>
