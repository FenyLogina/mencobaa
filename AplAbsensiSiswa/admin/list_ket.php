<!DOCTYPE html>
<html>
<head>
	<title>Keterangan Absen</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
include ("../library/koneksi.php");
include ("../library/ket_absen.php");
?>
</head>
<body><center>
		<form action="list_ket.php" method="get">
			<input type="text" name="txtcari">
			<input type="submit" value="cari">
		</form><br>

		<table border="1">
			<tr>
				<th>Id Keterangan</th>
				<th>Nama keterangan</th>
				<th>Opsi</th>
			</tr>
			<?php
			if(isset($_GET['txtcari']))
		{
			$search=$_GET['txtcari'];
		}
		else{
			$search="";
		}
		$data = ketlist("$search");
		if($data !=false)
		{
			foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value["ID_KA"] ?></td>
					<td><?php echo $value["NM_KA"] ?></td>
					<td>

				<a href="detail_ket.php?id=<?php echo $value["ID_KA"]?>">detail</a>
				<a href="edit_ket.php?id=<?php echo $value["ID_KA"]?>">edit</a>
						<a href="proses_ket.php?aksi=hapus&id=<?php echo($value)["ID_KA"] ?>">delete</a>
</td>
		</tr>

		<?php
	}
		}
		?>
		</table>
		<a href="tambah_ket.php" class="button"><button>tambah</button></a>
	</body></center>
</html>