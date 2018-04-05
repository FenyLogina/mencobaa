<?php
include ("../library/koneksi.php");
include ("../library/jenis.php");
$aksi = $_GET['aksi'];
if($aksi == "tambah")
{
	$ID_JA =$_POST ["txtid"];
	$jenis =$_POST ["txtjenis"];
	$batas =$_POST ["txtbatas"];
	$proses = jenisTambah($ID_JA,$jenis,$batas);
	if($proses)
	{
		header("location:list_jenisabsen.php");

	}
	else
	{
		header("location :tambah_jenis.php");
	}

}
elseif ($aksi == "hapus")
 {
	$ID_JA = $_GET["id"];
	$proses = jenisHapus($ID_JA);
	if($proses)
		{
		echo "<script>alert('data jenis absen berhasil dihapus')</script>";

		echo ("<script>url:location='list_jenisabsen.php'</script>");
	}
		
	
	else
	{
		echo "<script>alert('data jenis absen berhasil dihapus')</script>";
		echo ("<script>url:location='list_jenisabsen.php'</script>");
}
  }
  elseif ($aksi == "update")
   {
  	$ID_JA = $_POST["txtid"];
  	$jenis = $_POST["txtjenis"];
  	$batas = $_POST["txtbatas"];
  	$proses = jenisUpdate($ID_JA,$jenis,$batas);
  	if($proses){
		echo "<script>alert('edit data berhasil')</script>";
		echo "<script>url:location='list_jenisabsen.php'</script>";
	}
	else
	{
		echo "<script>alert('edit data gagal');</script>";
		echo "<script>url:location='edit_jenis.php?id=$ID_JA'</script>";
}
  }
  ?>