<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Petugas</title>
<link rel="stylesheet" href="styles.css"> <!-- Sesuaikan dengan nama file CSS Anda -->
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
    max-width: 300px; /* Mengurangi lebar form */
    width: 100%;
    background-color: orange;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: white;
}

input[type="text"],
select,
input[type="submit"] {
    width: 100%;
    padding: 10px; /* Mengurangi padding */
    margin-bottom: 15px; /* Mengurangi margin-bottom */
    border: 1px solid #3498db;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px; /* Mengurangi font-size */
    transition: border-color 0.3s ease;
}

input[type="text"]:hover,
input[type="text"]:focus,
select:hover,
select:focus {
    border-color: #2980b9;
}

input[type="submit"] {
    background-color: #3498db;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}
</style>
</head>
<body>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM petugas WHERE id_petugas=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>
<form action="proses_edit_petugas.php" method="post">
<h2>Edit Petugas</h2>
  <input type="hidden" name="id" value="<?php echo $row['id_petugas']; ?>">
  <label for="nama_petugas">Nama Petugas:</label>
  <input type="text" id="nama_petugas" name="nama_petugas" value="<?php echo $row['nama_petugas']; ?>">
  
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">
  
  <label for="level">Level:</label>
  <select id="level" name="level">
    <option value="admin" <?php if ($row['level'] == 'admin') echo 'selected'; ?>>Admin</option>
    <option value="user" <?php if ($row['level'] == 'user') echo 'selected'; ?>>Petugas</option>
  </select>
  
  <input type="submit" name="submit" value="Submit">
</form>
<?php
    } else {
        echo "Petugas tidak ditemukan.";
    }
} else {
    echo "Invalid request.";
}
mysqli_close($conn);
?>

</body>
</html>
