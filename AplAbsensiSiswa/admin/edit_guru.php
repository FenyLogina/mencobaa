<!DOCTYPE html>
<html>
<head>
	<title>Edit Guru</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include("../library/koneksi.php");
	include("../library/guru.php");
	include("../library/fungsi.php");
	?>
</head>
<body class="a"><center>
	<form action ="proses.php?aksi=update" method="post">
		<?php
		$ID_GURU = $_GET["id"];
		$data = guruEdit($ID_GURU);
		foreach ($data as $value)
		{
			?>
			<pre>
				ID GURU    =<input type="text" name="txtid" value="<?php echo $value["ID_GURU"]?>">
				Nama 	   = <input type="text" name="txtname" value="<?php echo $value["NAMA"]?>">
						<input type="submit" value="Save" class="button">
			</pre>
			<?php
		}
		?>
	</form>

</body></center>
</html>