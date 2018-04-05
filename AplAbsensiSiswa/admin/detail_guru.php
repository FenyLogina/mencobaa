<!DOCTYPE html>
<html>
<head>
	<title>detail data guru</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include("../library/koneksi.php");
	include("../library/guru.php");
	?>
</head>
<body class="b"><center>
	<?php
	$id = $_GET["id"];
	$data = guruDetail($id);
	foreach ($data as $value) {
		?>
		<pre>
			<br>ID GURU =<?php echo $value["ID_GURU"]; ?>
			<br>Nama    =<?php echo $value["NAMA"]; ?>


			<a href="list_guru.php" class="a"><button>back</button></a>
		</pre>
		<?php
	}
	?>

</body></center>
</html>