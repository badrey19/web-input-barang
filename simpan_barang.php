<?php
// Mengambil nilai input dari form
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$harga_pasar = $_POST['harga_pasar'];

// Menyambungkan ke database MySQL di XAMPP
$servername = "localhost";
$username = "root";
$password = ""; // Password default kosong pada XAMPP
$dbname = "barang";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Menyimpan data ke dalam tabel barang
$sql = "INSERT INTO tabel1 (nama_barang, harga_barang, harga_pasar) VALUES ('$nama_barang', '$harga_barang', '$harga_pasar')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Data barang berhasil disimpan.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
