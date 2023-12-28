<?php
include_once("inc_koneksi.php"); // Menggunakan koneksi ke database yang telah Anda buat sebelumnya

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $playlist = $_POST['playlist']; // Mengambil nilai playlist dari form

    // Masukkan data komentar beserta playlist ke dalam tabel comments
    $sql = "INSERT INTO comments (name, email, comment, playlist) VALUES ('$name', '$email', '$comment', '$playlist')";

    if (mysqli_query($koneksi, $sql)) {
        // Redirect kembali ke halaman playlist setelah komentar disimpan
        header("Location: playlist-$playlist.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Invalid request"; // Pesan jika ada akses yang tidak valid ke file ini
}
