<!DOCTYPE html>
<html>
<head>
	<title>detail Keterangan</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include("../library/koneksi.php");
	include("../library/ket_absen.php");
	?>
</head>
<body class="b"><center>
	<?php
	$id = $_GET["id"];
	$data = ketDetail($id);
	foreach ($data as $value) {
		?>
		<pre>
			<br>ID Keterangan =<?php echo $value["ID_KA"]; ?>
			<br>Nama Keterangan =<?php echo $value["NM_KA"]; ?>


			<a href="list_ket.php" class="button"><button>back</button></a>
		</pre>
		<?php
	}
	?>
</body></center>
</html>