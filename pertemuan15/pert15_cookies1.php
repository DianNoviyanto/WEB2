<?php 
$value = 'dian'; 
$value2 = 'dian noviyanto'; setcookie("username", $value); 
setcookie("namalengkap", $value2, time()+3600); /* expire in 1  hour */ 
echo "<h1>Ini halaman pengesetan cookie</h1>"; echo "<h2>Klik <a href='pert15_cookies2.php'>di sini</a> untuk pemeriksaan cookies</h2>"; 
?> 