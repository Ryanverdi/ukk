<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Pelanggan Baru</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background-image: url('background.jpg');
    background-size: cover; /* Sesuaikan ukuran latar belakang */
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  form {
    max-width: 400px;
    width: 100%;
    background-color: orange; /* Gunakan alpha untuk transparansi */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  h2 {
    text-align: center;
    color: white;
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

<form action="proses_tambah_pelanggan.php" method="POST">
  <h2>Menambahkan Pelangggan</h2>
  <label for="id_pelanggan">ID Pelanggan:</label>
  <input type="text" id="id_pelanggan" name="id_pelanggan">
  
  <label for="nama_pelanggan">Nama Pelanggan:</label>
  <input type="text" id="nama_pelanggan" name="nama_pelanggan">
  
  <label for="alamat">Alamat:</label>
  <input type="text" id="alamat" name="alamat">
  
  <label for="nomor_telepon">Nomor Telepon:</label>
  <input type="text" id="nomor_telepon" name="nomor_telepon">
  
  <button type="submit">Tambah Pelanggan</button>
</form>

</body>
</html>
