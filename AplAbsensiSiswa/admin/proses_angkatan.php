<?php
include ("../library/koneksi.php");
include ("../library/angkatan.php");
$aksi = $_GET['aksi'];
if($aksi == "tambah")
{
	$ID_ANGKATAN =$_POST ["txtid"];
	$NM_ANGKATAN =$_POST ["txtnama"];
	$proses = angkatanTambah($ID_ANGKATAN,$NM_ANGKATAN);
	if($proses)
	{
		header("location:list_angkatan.php");

	}
	else
	{
		header("location :tambah_angkatan.php");
	}

}
elseif ($aksi == "hapus")
 {
	$ID_ANGKATAN = $_GET["id"];
	$proses = angkatanHapus($ID_ANGKATAN);
	if($proses)
		{
		echo "<script>alert('data angkatan berhasil dihapus')</script>";

		echo ("<script>url:location='list_angkatan.php'</script>");
	}
	else
	{
		echo "<script>alert('data angkatan berhasil dihapus')</script>";
		echo ("<script>url:location='list_angkatan.php'</script>");
}
	}
elseif ($aksi == "update")
{
	$ID_ANGKATAN = $_POST["txtid"];
	$NM_ANGKATAN = $_POST["txtnama"];
	$proses = angkatanUpdate($ID_ANGKATAN,$NM_ANGKATAN);
	if($proses){
		echo "<script>alert('edit data berhasil')</script>";
		echo "<script>url:location='list_angkatan.php'</script>";
	}
	else
	{
		echo "<script>alert('edit data gagal');</script>";
		echo "<script>url:location='edit_angkatan.php?id=$ID_ANGKATAN'</script>";
}
	}
	?>