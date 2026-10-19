<?php
session_start();
include 'koneksi1.php';

$id=$_GET['id'];

$sql = "SELECT * FROM galeri WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hari Buruh</title>
        <style>
        *{
         margin: 0;
         padding: 0;
        }
        .body {
          font-family: Arial, sans-serif;
          margin: 0;
          background: rgb(189, 189, 189);
          padding: 0 10px;
        }
        .navbar {
         background: #19c922c4;
         padding: 0 10px; /* atur tinggi & jarak dalam */
         margin: 0; /* hilangkan margin luar */
         display: flex;
         justify-content: space-between;
         align-items: center;
         font-size: 15px;
         width:99%; /* biar full ke samping */
         height: 70px; /* atur tinggi navbar */
         }
        .navbar .menu {
          display: flex;
          gap: 10px;   
        }
        .navbar a {
          text-decoration: none;
          font-weight: bold;
          color: black;
        }
        .section-berita2 {
          padding: 20px;
          text-align: center;
          background-color: #d1d1d1c4;
        }
        .section-berita2 .p {
          margin-bottom: 20px;
          text-align: center   ;
        }
        .berita2 h1{
            padding: 20px;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 10px;
            display: flex;
            font-size: 30px;
        }

        .berita2{
            margin-top: 20px;
            font-size: 18px;
            text-align: justify;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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
      <a href="/TA 2025 NEW/Laman Login/Berita.php">Berita</a>
      <a href="/TA 2025 NEW/Laman Login/profile.php">Profile</a>
      <a href="/TA 2025 NEW/Dashboard/Login.php">Account</a>
    </nav>
        </header>
        <section class="section-berita2">
          <div class="berita2">
            <h1><?php echo $data['judul']; ?></h1>
            <img src="../Dashboard/images/<?php echo $data['foto']; ?>" 
            alt="Gambar Berita" style="width: 300px; height: auto; margin-top: 20px; border-radius: 8px; justify-content: center; align-items: center; display: flex;">
            <p class="p"><?php echo nl2br ($data['berita']); ?></p>
          </div>

</body>
</html>
