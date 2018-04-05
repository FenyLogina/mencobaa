<!DOCTYPE html>
<html>
<head>
	<title>Jurusan</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<?php
include ("../library/koneksi.php");
include ("../library/jurusan.php");
?>
</head>
<body><center>
		<form action="list_jurusan.php" method="get">
			<input type="text" name="txtcari">
			<input type="submit" value="cari">
		</form><br>

		<table border="1">
			<tr>
				<th>Id Jurusan</th>
				<th>Nama Jurusan</th>
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
		$data = jurusanlist("$search");
		if($data !=false)
		{
			foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value["ID_JURUSAN"] ?></td>
					<td><?php echo $value["NM_JURUSAN"] ?></td>
					<td>

				<a href="detail_jurusan.php?id=<?php echo $value["ID_JURUSAN"]?>">detail</a>
				<a href="edit_jurusan.php?id=<?php echo $value["ID_JURUSAN"]?>">edit</a>
						<a href="proses_jurusan.php?aksi=hapus&id=<?php echo($value)["ID_JURUSAN"] ?>">delete</a>
</td>
		</tr>

		<?php
	}
		}
		?>
		</table>
		<a href="tambah_jurusan.php" class="button"><button>tambah</button></a>
	</body></center>
</html>