<?php
include ("../library/koneksi.php");
include ("../library/guru.php");
$aksi = $_GET['aksi'];//urlparameter
if ($aksi == "tambah")
{
	$id_guru =$_POST ["txtid"];
	$nama = $_POST ["txtname"];
	$proses = guruTambah($id_guru,$nama);

	if($proses)
	{
		header("location:list_guru.php");

	}
	else
	{
		header("location :tambah_guru.php");
	}

}
elseif($aksi == "hapus")
{
	$id_guru = $_GET["id"];
	$proses = guruHapus($id_guru);
	if($proses)
		{
		echo "<script>alert('data guru berhasil dihapus')</script>";

		echo ("<script>url:location='list_guru.php'</script>");
	}
		
	
	else
	{
		echo "<script>alert('data guru berhasil dihapus')</script>";
		echo ("<script>url:location='list_guru.php'</script>");

	}
}
elseif ($aksi == "update")
 {
	$id_guru = $_POST["txtid"];
	$nama= $_POST["txtname"];
	$proses = guruUpdate($id_guru,$nama);
	if($proses){
		echo "<script>alert('edit data berhasil')</script>";
		echo "<script>url:location='list_guru.php'</script>";
	}
	else
	{
		echo "<script>alert('edit data gagal');</script>";
		echo "<script>url:location='edit_guru.php?id=$id_guru'</script>";
}

}
?>
