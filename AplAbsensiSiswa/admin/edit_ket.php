<!DOCTYPE html>
<html>
<head>
	<title>EDIT Keterangan</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include ("../library/koneksi.php");
	include ("../library/ket_absen.php");
	include ("../library/fungsi.php");
	?>
</head>
<body class="b"><center>
	<form action="proses_ket.php?aksi=update" method="post">
		<?php
		$ID_KA =$_GET["id"];
		$data =  ketEdit($ID_KA);
		foreach ($data as $value)
		 {
			?>
		
			<pre>
				Id Keterangan =<input type="text" name="txtid" value="<?php echo $value["ID_KA"]?>">

				Nama Keterangan=<input type="text" name="txtnama" value="<?php echo $value["NM_KA"]?>">


				<input type="submit" value="SAVE" class="button">
			</pre>
			<?php 
		}
		?>
	</form>
</body></center>
</html>