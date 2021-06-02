<?php
include "koneksi.php";
$judul = $_POST['title'];
$penulis = $_POST['author'];
$kategori = $_POST['kategori'];
$konten = $_POST['konten'];
$time = date("d M Y, H:i");
$kategori = str_replace('\r\n', '<br>', $kategori);
$konten = str_replace('\r\n', '<br>', $konten);
$query = "INSERT INTO artikel (judul,penulis,kategori,konten,waktu) values('$judul','$penulis','$kategori','$konten','$time')";
$result = mysqli_query($koneksi, $query);
if ($result) {
    echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
    echo "<A href=\"tampil_artikel.php\">List</A>";
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
?>