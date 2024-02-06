<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Produk Baru</title>
<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gn8cHtUGuVJdZ3C8iK6NtHjL5x99NhN28Lv/KyviHZfVklvQDQTXTQpYjgVi/v+71b00NUarDT8F8z1mGBJj3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 20px;
    background-image: url('background.jpg');
    background-color: #f5f5f5;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: orange; /* Adjust the alpha channel for transparency */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
    border: 2px solid #3498db;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    background-color: #ecf0f1;
    color: #333;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    background-color: blue;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: blue;
}

</style>
</head>
<body>

<form action="proses_tambah_produk.php" method="POST">
    <h2>Tambah Produk</h2>

    <label for="nama_produk">Nama Produk:</label>
    <input type="text" id="nama_produk" name="nama_produk">
    
    <label for="harga">Harga:</label>
    <input type="text" id="harga" name="harga">
    
    <label for="stok">Stok:</label>
    <input type="text" id="stok" name="stok">
    
    <button type="submit"><i class="fas fa-save"></i> Simpan</button>
</form>

</body>
</html>
