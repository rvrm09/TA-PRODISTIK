<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TULALIT</title>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    .body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #ffffffff;
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

    .content h1{
      padding: 20px;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin-top: 10px;
      display: flex;
      font-size: 50px;
      padding: 10px;
    }

    .sectin.column1 {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
      padding: 20px;
      margin: 20px;
      text-align: center;
      justify-content: center;
      align-items: center;
    }

    .sectin.column1 h4 {
      display: flex;
      text-align: center;
      justify-content: center;
      font-size: 60px;
      padding: 1px;
      margin: 0.100px;
    }

    .sectin.column1 img {
      display: center;
      border-radius: 50%;
       display: flex;
      justify-content: center; /* center secara horizontal */
      align-items: center;     /* center secara vertikal */
      margin: 0 auto;          /* center secara horizontal */
      padding:1px;

    }
    .sectin.column1 p {
      font-size: 20px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      text-align: center;
      justify-content: center;
      align-items: center;
      display: flex;
      padding: 10px;
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
      <a href="Berita.php">Berita</a>
      <a href="/TA 2025 NEW/Laman Login/profile.php">Profile</a>
      <a href="/TA 2025 NEW/Dashboard/Login.php">Account</a>
    </nav>
  </header>

  <div class="content">
        <h1>Tulalit Info</h1>
    </div>

  <! -- profile tulalit -- >
  <section class= "grid">
  <div class="sectin column1">
     <img src="https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Tulalit.jpg" alt="Gambar Logo tulalit" style="width:10%">
    <div class="container column1">
      <h4><b></b></h4> 
      <p>Tulalit Adalah kepanjangan dari Tumpukan Laju Literasi yang bertujuan untuk memajukan literasi anak-anak pada zaman sekarang..</p>
    </div>
  </div>

<footer style="text-align: center; padding: 10px; background: #19c921fb; margin-top: 250px;">
    &copy; 2024 PR IPM SMAMSATU GRESIK
    <a href="https://www.instagram.com/tulalit.info?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" style="text-decoration: none; color: black;">Istagram: @tulalit.info</a>
    <p><strong>Instagram : @ipmsmam1gresik</strong></p>
  </footer>
</body>
</html>
