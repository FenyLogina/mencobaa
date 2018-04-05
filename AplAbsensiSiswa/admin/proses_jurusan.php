<?php
include ("../library/koneksi.php");
include ("../library/jurusan.php");
$aksi = $_GET['aksi'];
if($aksi == "tambah")
{
	$ID_JURUSAN =$_POST ["txtid"];
	$NM_JURUSAN =$_POST ["txtnama"];
	$proses = jurusanTambah($ID_JURUSAN,$NM_JURUSAN);
	if($proses)
	{
		header("location:list_jurusan.php");

	}
	else
	{
		header("location :tambah_jurusan.php");
	}

}
elseif ($aksi == "hapus")
 {
	$ID_JURUSAN= $_GET["id"];
	$proses = jurusanHapus($ID_JURUSAN);
	if($proses)
		{
		echo "<script>alert('data jurusan berhasil dihapus')</script>";

		echo ("<script>url:location='list_jurusan.php'</script>");
	}
	else
	{
		echo "<script>alert('data jurusan berhasil dihapus')</script>";
		echo ("<script>url:location='list_jurusan.php'</script>");
}
	}
elseif ($aksi == "update")
{
	$ID_JURUSAN = $_POST["txtid"];
	$NM_JURUSAN = $_POST["txtnama"];
	$proses = jurusanUpdate($ID_JURUSAN,$NM_JURUSAN);
	if($proses){
		echo "<script>alert('edit data berhasil')</script>";
		echo "<script>url:location='list_jurusan.php'</script>";
	}
	else
	{
		echo "<script>alert('edit data gagal');</script>";
		echo "<script>url:location='edit_jurusan.php?id=$ID_JURUSAN'</script>";
}
	}
	?>