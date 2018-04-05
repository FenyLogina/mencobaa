<!DOCTYPE html>
<html>
<head>
	<title>detail Jurusan</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include("../library/koneksi.php");
	include("../library/jurusan.php");
	?>
</head>
<body class="b"><center>
	<?php
	$id = $_GET["id"];
	$data = jurusanDetail($id);
	foreach ($data as $value) {
		?>
		<pre>
			<br>ID JURUSAN =<?php echo $value["ID_JURUSAN"]; ?>
			<br>Nama JURUSAN =<?php echo $value["NM_JURUSAN"]; ?>


			<a href="list_jurusan.php" class="button"><button>back</button></a>
		</pre>
		<?php
	}
	?>
</body></center>
</html>