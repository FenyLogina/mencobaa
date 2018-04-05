<?php
include ("../library/koneksi.php");
include ("../library/ket_absen.php");
$aksi = $_GET['aksi'];
if($aksi == "tambah")
{
	$ID_KA =$_POST ["txtid"];
	$NM_KA =$_POST ["txtnama"];
	$proses = ketTambah($ID_KA,$NM_KA);
	if($proses)
	{
		header("location:list_ket.php");

	}
	else
	{
		header("location :tambah_ket.php");
	}

}
elseif ($aksi == "hapus")
 {
	$ID_KA= $_GET["id"];
	$proses = ketHapus($ID_KA);
	if($proses)
		{
		echo "<script>alert('data keterangan berhasil dihapus')</script>";

		echo ("<script>url:location='list_ket.php'</script>");
	}
	else
	{
		echo "<script>alert('data keterangan berhasil dihapus')</script>";
		echo ("<script>url:location='list_ket.php'</script>");
}
	}
elseif ($aksi == "update")
{
	$ID_KA = $_POST["txtid"];
	$NM_KA = $_POST["txtnama"];
	$proses = ketUpdate($ID_KA,$NM_KA);
	if($proses){
		echo "<script>alert('edit data berhasil')</script>";
		echo "<script>url:location='list_ket.php'</script>";
	}
	else
	{
		echo "<script>alert('edit data gagal');</script>";
		echo "<script>url:location='edit_ket.php?id=$ID_KA'</script>";
}
	}
	?>