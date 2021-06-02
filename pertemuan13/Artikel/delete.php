<?php
include "koneksi.php";
$idartikel = $_GET['idartikel'];
$perintah = "DELETE FROM artikel WHERE idartikel =\"$idartikel\"";
$hasil = mysqli_query($koneksi, $perintah);
if ($hasil) {
    echo "Artikel berhasil dihapus<br>";
    echo "<a href=\"tampil_artikel.php\">Back</a>";
} else {
    echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi
 ke database MySQL.";
}
?>