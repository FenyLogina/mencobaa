<!DOCTYPE html>
<html>
<head>
	<title>Angkatan</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
include ("../library/koneksi.php");
include ("../library/angkatan.php");
?>
</head>
<body>
		<form action="list_angkatan.php" method="get">
			<input type="text" name="txtcari">
			<input type="submit" value="cari">
		</form><br>

		<table border="1">
			<tr>
				<th>Id Angkatan</th>
				<th>Nama Angkatan</th>
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
		$data = angkatanlist("$search");
		if($data !=false)
		{
			foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value["ID_ANGKATAN"] ?></td>
					<td><?php echo $value["NM_ANGKATAN"] ?></td>
					<td>

				<a href="detail_angkatan.php?id=<?php echo $value["ID_ANGKATAN"]?>">detail</a>
				<a href="edit_angkatan.php?id=<?php echo $value["ID_ANGKATAN"]?>">edit</a>
						<a href="proses_angkatan.php?aksi=hapus&id=<?php echo($value)["ID_ANGKATAN"] ?>">delete</a>
</td>
		</tr>

		<?php
	}
		}
		?>
		</table>
		<a href="tambah_angkatan.php" class="button"><button>tambah</button></a>
	</body>
</html>