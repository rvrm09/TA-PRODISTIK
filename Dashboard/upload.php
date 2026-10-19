<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tulalit Info</title>
    <style>
       * {
    margin: 0;
    padding: 0;
}

body {
    background: #e6dede80;
    font-family: Arial, sans-serif;
}
.navbar {
    background: #19c922c4;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 15px;
    width: 100%;
    height: 65px;
    box-sizing: border-box;
}

.navbar .menu {
    display: flex;
    gap: 15px;
    white-space: nowrap;
}

.navbar a {
    text-decoration: none;
    font-weight: bold;
    color: black;
}
.form-container {
    width: 60%;
    margin: 40px auto;  /* Jarak dari header + center otomatis */
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.form-container label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
}

/* Input dan Textarea */
.form-container input[type="text"],
.form-container input[type="file"],
.form-container textarea {
    width: 99%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-top: 5px;
    margin-bottom: 15px;
    font-size: 14px;
    resize: vertical;
}

/* Tombol */
.form-container button {
    padding: 20px;
    background-color: #28a745;
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.form-container button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>
          <header class="navbar">
    <div class="logo">
       <img src="https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Logo%20Smamsa.png" alt="Gambar Logo smam" style="width: 51px;
      height: 60px; object-fit: contain;">
       <img src="https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Logo-Ikatan-Pelajar-Muhammadiyah-Resmi.png" alt="Gambar Logo ipm" style="width: 51px;
      height: 60px; object-fit: contain;">
    </div>
    <div><b>PR IPM SMAMSATU GRESIK</b></div>
    <nav class="menu">
      <a href="/TA 2025 NEW/Laman Login/berita.php">Berita</a>
      <a href="/TA 2025 NEW/Laman Login/profile.php">Profile</a>
      <a href="Login.php">Author</a>
      <a href="edit&delete.php">Edit</a>
    </nav>
        </header>
        <form class="form-container" action='Proses.php' method="POST"enctype="multipart/form-data">
            <label>Judul Foto:</label>
            <input type="text" name="name" required><br><br>
            <label>Masukkan Teks Berita:</label>
            <textarea name="teks" required></textarea><br><br>
            <label>Pilih Foto:</label>
            <input type="file" name="foto"required><br><br>
            <button type="submit" name="upload">Upload</button>
        </form>
</body>
</html>