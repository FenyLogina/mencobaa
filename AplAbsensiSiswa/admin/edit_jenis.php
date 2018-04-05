<!DOCTYPE html>
<html>
<head>
	<title>Edit Jenis</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include ("../library/koneksi.php");
	include ("../library/jenis.php");
	include ("../library/fungsi_jenis.php");
	?>
</head>
<body class="b"><center>
	<form action="proses_jenis.php?aksi=update" method="post">
		<?php
		$ID_JA = $_GET["id"];
		$data = jenisEdit($ID_JA);
		foreach ($data as $value)
		 {
			?>
		
			<pre>
				Id jenis 	   = <input type="text" name="txtid" value="<?php echo $value["ID_JA"]?>">

				Jenis Absen	   = <input type="text" name="txtjenis" value="<?php echo $value["NM_JA"]?>">

				Batas Waktu	   = <input type="text" name="txtbatas" value="<?php echo $value["BATASAN"]?>">

				<input type="submit" value="SAVE" class="button">
			</pre>
			<?php
		}
		?>
	</form>
</body></center>
</html>