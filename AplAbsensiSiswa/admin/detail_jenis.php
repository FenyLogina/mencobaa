<!DOCTYPE html>
<html>
<head>
	<title>detail jenis absen</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include("../library/koneksi.php");
	include("../library/jenis.php");
	?>
</head>
<body class="b"><center>
	<?php
	$id = $_GET["id"];
	$data = jenisDetail($id);
	foreach ($data as $value) {
		?>
		<pre>
		<br>
		<br>
				<br>ID Jenis Absen =<?php echo $value["ID_JA"]; ?>
				<br>Jenis Absen	   =<?php echo $value["NM_JA"]; ?>
		<br>Batas Waktu    =<?php echo $value["BATASAN"]; ?>


				<a href="list_jenisabsen.php" class="button"><button>back</button></a>
			</pre>
			<?php

	}
	?>

</body></center>
</html>