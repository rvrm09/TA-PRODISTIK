<?php
// Hubungkan ke database
include 'koneksi.php';

// Ambil data dari tabel (contoh: tabel 'berita')
$query = "SELECT * FROM galeri ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>