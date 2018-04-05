<!DOCTYPE html>
<html>
<head>
	<title>EDIT ANGKATAN</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include ("../library/koneksi.php");
	include ("../library/angkatan.php");
	include ("../library/fungsi.php");
	?>
</head>
<body class="a">
	<form action="proses_angkatan.php?aksi=update" method="post">
		<?php
		$ID_ANGKATAN =$_GET["id"];
		$data =  angkatanEdit($ID_ANGKATAN);
		foreach ($data as $value)
		 {
			?>
		
			<pre>
				Id Angkatan =<input type="text" name="txtid" value="<?php echo $value["ID_ANGKATAN"]?>">

				Nama Angkatan =<input type="text" name="txtnama" value="<?php echo $value["NM_ANGKATAN"]?>">


				<input type="submit" value="SAVE" class="button">
			</pre>
			<?php 
		}
		?>
	</form>
</body>
</html>