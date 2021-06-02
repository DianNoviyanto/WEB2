<?php
include "koneksi.php";
$idartikel = $_GET['idartikel'];
// Query satu record artikel dari tabel sesuai nilai $idartikel
$perintah = "SELECT * FROM artikel WHERE idartikel =\"$idartikel\"";
$hasil = mysqli_query($koneksi, $perintah);
$row = mysqli_fetch_array($hasil);
$time = date("d M Y, H:i");
?>
<h1>Form Berita</h1>
<form name=artikel method=post action=update_artikel.php>
    <input type="hidden" name="ID" value="<?php echo "$row[idartikel]" ?>">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="18%">Judul</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="title" size="50" class="masukan" value="<?php echo "$row[judul]" ?>"></td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type="text" name="author" size="50" class="masukan" value="<?php echo "$row[penulis]" ?>"></td>
        </tr>
        <tr valign="top">

            <td>Kategori</td>
            <td>:</td>
            <td><input type="text" name="kategori" size="50" class="masukan" value="<?php echo "$row[kategori]" ?>"></td>
        </tr>
        <tr valign="top">
            <td>Konten</td>
            <td>:</td>
            <td><textarea name="konten" rows="4" cols="50">
 <?php echo "$row[konten]" ?></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <input type="submit" name="masuk" value="Update" class="tombol">
                <input type="reset" name="hapus" value="Cancel" class="tombol">
            </td>
        </tr>
    </table>
</form>