<?php
include 'koneksi.php';

$id = $_GET['id'];

// Ambil nama foto
$data = mysqli_query($koneksi, "SELECT foto FROM galeri WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

// Hapus file foto
if (file_exists("images/".$row['foto'])) {
    unlink("images/".$row['foto']);
}

// Hapus data database
mysqli_query($koneksi, "DELETE FROM galeri WHERE id='$id'");

header("Location: edit&delete.php");
?>
