<html>
	<head>
		<title>contoh Penggunaan IF</title>
		<style>
		#hasil{font-weight:bold;color:#f00;}
		</style>
	</head>
	<body>

		<?php
			
			if(isset($_POST['total_beli']))
			{
				$total_beli = $_POST['total_beli'];
				$diskon = 0;
				if($total_beli >= 200000)
				{
					$diskon = 0.1;
					$persentaseDiskon = 10;
					$nominalDiskon = $diskon * $total_beli;
					$total_bayar = $total_beli - $nominalDiskon;
				}
				else if($total_beli >= 100000)
				{
					$diskon = 0.05;
					$persentaseDiskon = 5;
					$nominalDiskon = $diskon * $total_beli;
					$total_bayar = $total_beli - $nominalDiskon;
				}
				else
				{
					$diskon = 0.01;
					$persentaseDiskon = 1;
					$nominalDiskon = $diskon * $total_beli;
					$total_bayar = $totalBeli - $nominalDiskon;
				}		

			}

			?>

		<form action="" method="post">
			Besar Pembelian :
			<input type="text" name="total_beli" required/><br><br>
			<input type="submit" value="Tentukan Diskon!">
			<div id="hasil">
				Total Pembelian = Rp <?php echo @$total_beli;?>
				<br>
				Diskon : <?php echo @$persentaseDiskon;?> % / <?php echo @$diskon;?>
				<br>
				Pembayaran = Rp <?php echo @$total_bayar;?>
			</div>
			
		</form>
	</body>
</html>