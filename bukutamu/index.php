<html>
</head>
	<title>Buku Tamu</title>
	<style type="text/css">
		body { font-family:tahoma; font-size:12px; }
		#container { width:450px; padding:20px 40px; margin:50px auto; border:0px solid #555; box-shadow:0px 0px 2px #555; }
		input[type="text"] { width:200px; }
		input[type="text"], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; }
		input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
		#error { border:1px solid red; background:#ffc0c0; padding:5px; }
	</style>
</head>
<body>

	<div id="container">
		<h1>Buku Tamu</h1>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>

		<?php
		if(@$_POST['go']){
			$con = mysqli_connect("localhost","root",""); //koneksi 
			mysqli_select_db($con, "bukutamu");

			$nama	= (mysqli_real_escape_string($con,$_POST['nama']));
			$email	= (mysqli_real_escape_string($con,$_POST['email']));
			$nohp	= (mysqli_real_escape_string($con,$_POST['nohp']));
			$pesan	= (mysqli_real_escape_string($con,$_POST['pesan']));
			$tanggal= date("Y-m-d H:i:s");

			if($nama && $email && $pesan){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$in = mysqli_query($con,"INSERT INTO tamu VALUES(NULL, '$tanggal', '$nama', '$email', '$nohp', '$pesan')");
					if($in){
						echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="index.php";</script>';
					}else{
						echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
					}
				}else{
					echo '<div id="error">Uppsss...! Email Anda tidak valid!</div>';
				}
			}else{
				echo '<div id="error">Uppsss...! Lengkapi form!</div>';
			}
		}
		?>

		<form action="" method="post">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama" placeholder="Masukkan Nama Kamu" required /></p>
			<p><b>Email :</b><br><input type="text" name="email" placeholder="ex. dian@gmail.com" required /></p>
			<p><b>No. Handphone :</b><br><input type="text" name="nohp" placeholder="ex. 08383838xxxx" /></p>
			<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Tulis Pesan Kamu Disini!" required></textarea></p>
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form>
	</div>

</body>
</html>