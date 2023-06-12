<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "retrash";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form registrasi
$username = $_POST['username'];
$password = $_POST['password'];
$no_telp = $_POST['no_telp'];

// Query untuk menyimpan data ke dalam database
$sql = "INSERT INTO users (username, password, no_telp) VALUES ('$username', '$password', '$no_telp')";

if ($conn->query($sql) === TRUE) {
    echo "Registrasi berhasil";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>