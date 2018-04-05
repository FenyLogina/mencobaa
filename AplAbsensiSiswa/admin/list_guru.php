<!DOCTYPE HTML>
	<HTML>
		<HEAD>
			<title>Daftar Data Guru</title>
			<link rel="stylesheet" type="text/css" href="../css/css.css">
			<?php
			include ("../library/koneksi.php");
			include ("../library/guru.php");
			?>
		</HEAD>
		<body><center>
			<form action="list_guru.php" method="get">
				<input type="text" name="txtcari">
				<input type="submit" value="cari">

			</form><br>
			
			<table border="1">
				<tr>
					<th>Id Guru</th>
					<th>Nama</th>
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
				$Data = gurulist("$search");
				if($Data !=false)
				{
				foreach ($Data as $value) {
					?>
				<tr>
					<td><?php echo $value["ID_GURU"] ?></td>
					<td><?php echo $value["NAMA"] ?></td>
					
					<td>
						<a href="detail_guru.php?id=<?php echo $value["ID_GURU"]?>">detail</a>
						<a href="edit_guru.php?id=<?php echo $value["ID_GURU"]?>">edit</a>
						<a href="proses.php?aksi=hapus&id=<?php echo($value)["ID_GURU"] ?>">delete</a>
</td>
</tr>

<?php
	}
}
?>
</table>
<a href="tambah_guru.php" class="button"><button>tambah</button></a>


		</body></center>
	</HTML>


