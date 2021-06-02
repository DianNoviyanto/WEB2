<?php
include "koneksi.php";
$ID = $_POST['ID'];
$title = $_POST['title'];
$author = $_POST['author'];
$kategori = $_POST['kategori'];
$konten = $_POST['konten'];
$time = date("d M Y, H:i");
//$kategori = str_replace("\r\n","<br>",$kategori);
//$konten= str_replace("\r\n","<br>",$konten);
$update = "UPDATE artikel SET judul='$title', penulis='$author',
kategori='$kategori',
konten='$konten', waktu='$time' WHERE idartikel ='$ID'";
$hasil = mysqli_query($koneksi, $update);
if ($hasil) {
    echo "Artikel berhasil di update<br>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "Artikel gagal di update";
}
?>