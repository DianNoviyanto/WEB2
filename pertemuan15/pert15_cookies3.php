<?php 
// set the expiration date to one hour ago 
setcookie ("username", "", time() - 3600); setcookie ("namalengkap", "", time() - 3600); echo "<h1>Cookie Berhasil dihapus.</h1>"; 
echo "<h2>Klik <a href='pert15_cookies1.php'>di sini</a> untuk penciptaan cookies</h2>"; 
echo "<h2>Klik <a href='pert15_cookies2.php'>di sini</a> untuk pemeriksaan cookies</h2>"; 
?>