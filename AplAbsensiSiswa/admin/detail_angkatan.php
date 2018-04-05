<!DOCTYPE html>
<html>
<head>
	<title>detail Angkatan</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">	
	<?php
	include("../library/koneksi.php");
	include("../library/angkatan.php");
	?>
</head>
<body class="a"><center></center>
	<?php
	$id = $_GET["id"];
	$data = angkatanDetail($id);
	foreach ($data as $value) {
		?>
		<pre>
			<br>ID ANGKATAN =<?php echo $value["ID_ANGKATAN"]; ?>
			<br>Nama ANGKATAN  =<?php echo $value["NM_ANGKATAN"]; ?>


			<a href="list_angkatan.php" class="button"><button>back</button></a>
		</pre>
		<?php
	}
	?>
</body></style></center>
</html>