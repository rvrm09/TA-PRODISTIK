<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        *{
         margin: 0;
         padding: 0;
        }
        .body {
            background: #ffffff;
            font-family: Arial, sans-serif;
         margin: 0;
         padding: 0; /* biar header nempel full */
        }
           .navbar {
            background: #19c922c4;
           padding: 0 10px; /* atur tinggi & jarak dalam */
            margin: 0; /* hilangkan margin luar */
           display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            width: 99%; /* biar full ke samping */
            height: 70px; /* atur tinggi navbar */
            }
           .navbar .menu {
            display: flex;
            gap: 15px;
            }
            .navbar a {
            text-decoration: none;
            font-weight: bold;
            color: black;
            }
            .section-berita1 {
              padding: 20px;
              text-align: center;
            }
            .section-berita1 h2 {
              margin-bottom: 20px;
            }
            .card-link {
              text-decoration: none;
              color: inherit;
              display: inline-block;
            }
            .card { 
              background: #949494d3;
              border: 1px solid #ddd;
              border-radius: 8px;
              width: 300px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              transition: transform 0.3s, box-shadow 0.3s;
              margin: 10px;
              padding: 15px;
              text-align: left;
              display: flex;
              justify-content: center; /* tengah horizontal */
              flex-wrap: wrap; /* biar turun ke bawah kalau terlalu banyak */
              gap: 20px; /* jarak antar card */
              margin: 20px;
              float: left;
            }
            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(138, 130, 130, 0.33);
                cursor: pointer;
             }
            .card1 .a img {
              width: 100%;
              height: auto;
              border-radius: 1px 1px 0 0;
              justify-content: center;
              align-items: center;
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
      <a href="/TA 2025 NEW/Dashboard/Login.php">Account</a>

    </nav>
        </header>

        <section class="section-berita1">
            <h2>Berita Terbaru</h2>
            <div class="berita-cards">
               <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="card">
          <a class="card-link" href="/TA 2025 NEW/Laman Login/detail.php?id=<?= $row['id']; ?>">
        <img src="images/<?= $row['foto']; ?>" width="150">

        <p><?= substr($row['berita'], 0, 100); ?>...</p>

        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id']; ?>" 
           onclick="return confirm('Yakin ingin menghapus berita ini?')">
           Hapus
        </a>
               </div>
<?php } ?>
            </div>
</body>
</html>