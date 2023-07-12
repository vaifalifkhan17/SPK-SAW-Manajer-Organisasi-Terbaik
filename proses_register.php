<?php

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5 ($_POST['password']);

    // Koneksi ke database
    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $database = "spksawmaster";

    $conn = new mysqli($servername, $usernameDB, $passwordDB, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Lakukan penyimpanan data pengguna ke tabel
    $stmt = $conn->prepare("INSERT INTO saw_register (name, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $username, $password);
    $stmt->execute();
    $stmt->close();


    // Berikan konfirmasi kepada pengguna
    echo "Registrasi berhasil. Silakan login.";

    $conn->close();
} else {
    echo "Tidak ada data yang dikirimkan.";
}
?>
