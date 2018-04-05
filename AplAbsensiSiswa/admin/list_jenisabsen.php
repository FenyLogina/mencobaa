<!DOCTYPE html>
<html>
<head>
	<title>Jenis absen</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
	include ("../library/koneksi.php");
	include ("../library/jenis.php");
	?>
</head>
<body><center>
	<form action="list_jenisabsen.php" method="get">
		<input type="text" name="txtcari">
		<input type="submit" value="cari">
	</form><br>

	<table border="1">
		<tr>
			<th>ID Jenis</th>
			<th>Jenis Absen</th>
			<th>batas waktu</th>
			<th>opsi</th>
		</tr>
		<?php
		if(isset($_GET['txtcari']))
		{
			$search=$_GET['txtcari'];
		}
		else{
			$search="";
		}
		$data = jenislist("$search");
		if($data !=false)
		{
			foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value["ID_JA"] ?></td>
					<td><?php echo $value["NM_JA"] ?></td>
					<td><?php echo $value["BATASAN"] ?></td>
					<td>

			<a href="detail_jenis.php?id=<?php echo $value["ID_JA"]?>">detail</a>
						<a href="edit_jenis.php?id=<?php echo $value["ID_JA"]?>">edit</a>
						<a href="proses_jenis.php?aksi=hapus&id=<?php echo($value)["ID_JA"] ?>">delete</a>
</td>
</tr>

<?php
	}
}
?>
</table>
<a href="tambah_jenis.php" class="button"><button>tambah</button></a>


		</body></center>
	</HTML>
