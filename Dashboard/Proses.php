<?php
include 'koneksi.php';

if (isset($_POST['upload'])) {

    $judul  = $_POST['name'];
    $berita = $_POST['teks'];   // kolom baru
    $foto   = $_FILES['foto']['name'];
    $tmp    = $_FILES['foto']['tmp_name'];

    // lokasi folder penyimpanan
    $folder = "images/";

    // pindahkan gambar ke folder
    if (move_uploaded_file($tmp, $folder . $foto)) {

        // Query insert (SESUAI kolom yang ada di tabel Anda!!)
        $sql = "INSERT INTO galeri (judul, foto, berita)VALUES ('$judul', '$foto', '$berita')";

        if ($koneksi->query($sql) === TRUE) {
            echo "<script>
                    alert('Berita dan Foto Berhasil Diupload');
                    window.location.href = 'edit&delete.php';
                  </script>";
        } else {
            echo "Gagal insert database: " . $koneksi->error;
        }

    } else {
        echo "Upload foto gagal!";
    }
}
?>