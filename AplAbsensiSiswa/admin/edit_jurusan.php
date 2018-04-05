<!DOCTYPE html>
<html>
<head>
	<title>EDIT JURUSAN</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include ("../library/koneksi.php");
	include ("../library/jurusan.php");
	include ("../library/fungsi.php");
	?>
</head>
<body class="b"><center>
	<form action="proses_jurusan.php?aksi=update" method="post">
		<?php
		$ID_JURUSAN =$_GET["id"];
		$data =  jurusanEdit($ID_JURUSAN);
		foreach ($data as $value)
		 {
			?>
		
			<pre>
				Id Jurusan =<input type="text" name="txtid" value="<?php echo $value["ID_JURUSAN"]?>">

				Nama Jurusan =<input type="text" name="txtnama" value="<?php echo $value["NM_JURUSAN"]?>">


				<input type="submit" value="SAVE" class="button">
			</pre>
			<?php 
		}
		?>
	</form>
</body></center>
</html>