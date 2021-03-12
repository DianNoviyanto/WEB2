<html lang="en">
<head>
<title>Kalkulator Sederhana</title>
<style>
		body {
		  color: white;
		  font: 500 18px/1.6 "Source Sans Pro",sans-serif;
		  margin: 0;
		  padding: 5em 0 2em;
		  text-align: center;
		}
		#kalk {
		  background: -webkit-linear-gradient(bottom, #2f008c,#120036);
		  border-radius: 8px;
		  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
		  height: 200px;
		  margin: 6rem auto 8.1rem auto;
		  width: 700px;
		  }
		#btn {
		  background: -webkit-linear-gradient(top, #ffffff, #2f008c);
		  border: none;
		  border-radius: 21px;
		  box-shadow: 0px 1px 8px #0a8bc2;
		  cursor: pointer;
		  color: white;
		  font-family: "Raleway SemiBold", sans-serif;
		  height: 42.3px;
		  margin: 0 auto;
		  margin-top: 10px;
		  transition: 0.25s;
		  width: 153px;
		}
		#hasil{
		  font-size:30px;
		}
		#cr {
		  color: #2f008c;
		  font-family: "Raleway", sans-serif;
		  font-size: 10pt;
		  margin-top: 60px;
		  text-align: center;
		}
		
		
</style>

</head>
<body>
<center>
	<?php

	if(isset($_POST['nilai1']) && ($_POST['nilai2']) && ($_POST['operator']))
	{
		$nilaiSatu = $_POST['nilai1'];
		$nilaiDua = $_POST['nilai2'];
		if($_POST['operator'] == "+")
		{
			$hasil = $nilaiSatu + $nilaiDua;
		}
		else if($_POST['operator'] == "-")
		{
			$hasil = $nilaiSatu - $nilaiDua;
		}
		else if($_POST['operator'] == "*")
		{
			$hasil = $nilaiSatu * $nilaiDua;
		}
		else if($_POST['operator'] == "/")
		{
			$hasil = $nilaiSatu / $nilaiDua;
		}
		else
		{
			echo "Operator Salah";
		}
	}
	else
	{
		echo " ";
	}
	
	?>
	<div id="kalk">
	<h2> KALKULATOR SEDERHANA AJA </h2>

	<form action="#" method="post">
	<input type="text" name="nilai1" placeholder="Masukkan nilai di sini" />
	<select name="operator">
		 <option> + </option>
		 <option> - </option>
		 <option> * </option>
		 <option> / </option>
	</select>
	<input type="text" name="nilai2" placeholder="Masukkan nilai di sini"/>
	<input id="btn1" type="submit" value="submit" />
	<div id="hasil">
	
		<?php echo @$hasil;?>
	</div>
	<div id="cr">
	 Created By Dian Noviyanto</div>
	</form>
	
</body>
</html>