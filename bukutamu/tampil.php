<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku Tamu</title>
</head>
<body>
	<h2>DATA BUKU TAMU</h2>

	<?php
	$con = mysqli_connect("localhost","root",""); //koneksi 
			mysqli_select_db($con, "bukutamu");
	// sql menampilkan record
	$sql = "SELECT id, nama, email, nohp, pesan, tanggal FROM tamu";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
    // output data setiap baris
    while($row = $result->fetch_assoc()) {

  	echo "<br>".
  	"id: ". $row["id"]. "<br>".
  	"Nama: ". $row["nama"]. "<br>".
  	"Email: ". $row["email"]. "<br>".
 	"No. Handphone: ". $row["nohp"]. "<br>".
  	"Pesan: ". $row["pesan"]. "<br>".
  	"Waktu: ". $row["tanggal"]. "<br>";
    }
} else {
    echo "0 results";
}
$con->close()
?>

</body>
</html>