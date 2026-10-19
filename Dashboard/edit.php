<?php
session_start();
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $query = mysqli_query($koneksi, "SELECT * FROM galeri WHERE id='$id'");
    $row = mysqli_fetch_assoc($query);
}

if (isset($_POST['update'])) {
    $id_update = $_POST['id'];
    $judul  = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $berita = mysqli_real_escape_string($koneksi, $_POST['berita']);

    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp  = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmp, "images/" . $foto);

        $sql = "UPDATE galeri SET judul='$judul', foto='$foto', berita='$berita' WHERE id='$id_update'";
    } else {
        $sql = "UPDATE galeri SET judul='$judul', berita='$berita' WHERE id='$id_update'";
    }

    if (mysqli_query($koneksi, $sql)) {
        echo "<script> alert('Data berhasil diupdate!');
              window.location='edit&delete.php'; </script>";
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>
<html>
<head>
    <title>Edit Berita</title>
<style>
        *{
         margin: 0;
         padding: 0;
        }
        body {
            background: rgb(174, 245, 180);
            font-family: Arial, sans-serif;
        }
        .navbar {
            background: #19c922c4;
            padding: 0 10px; 
            margin: 0; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            width: 100%;
            height: 70px;
            box-sizing: border-box;
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
        .form-container {
            width: 60%;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(1, 2, 2, 0.1);
        }
        .form-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }
        .form-container input[type="text"],
        .form-container input[type="file"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 5px;
            margin-bottom: 15px;
            font-size: 14px;
            resize: vertical;
            box-sizing: border-box;
        }
        .form-container button {
            padding: 15px 30px;
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
        .current-img {
            margin-bottom: 10px;
            display: block;
            max-width: 200px;
            border-radius: 4px;
        }
</style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
           <img src="https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Logo%20Smamsa.png" alt="Logo" style="width: 51px; height: 60px; object-fit: contain;">
           <img src="https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Logo-Ikatan-Pelajar-Muhammadiyah-Resmi.png" alt="Logo" style="width: 51px; height: 60px; object-fit: contain;">
        </div>
        <div><b>PR IPM SMAMSATU GRESIK</b></div>
        <nav class="menu">
          <a href="/TA 2025 NEW/Dashboard/berita.php">Berita</a>
          <a href="/TA 2025 NEW/Laman Login/profile.php">Profile</a>
          <a href="/TA 2025 NEW/Dashboard/Login.php">Account</a>
        </nav>
    </header>

    <div class="form-container">
        <h2>Edit Data Galeri</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            
            <label>Judul</label>
            <input type="text" name="judul" value="<?= htmlspecialchars($row['judul']); ?>" required>
            
            <label>Isi Berita</label>
            <textarea name="berita" rows="10" required><?= htmlspecialchars($row['berita']); ?></textarea>
            
            <label>Foto Saat Ini</label>
            <img src="images/<?= $row['foto']; ?>" class="current-img" alt="Foto">
            
            <label>Ganti Foto (opsional)</label>
            <input type="file" name="foto">
            
            <div style="text-align: right;">
                <button type="submit" name="update">Update Data</button>
            </div>
        </form>
    </div>
</body>
</html>