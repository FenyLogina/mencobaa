<?php
function jenislist($filter){
	global $koneksi;
	if($filter == "")
	{
		$sql="SELECT * FROM jenis_absen";
	}

		else
	{
		$sql="SELECT * FROM jenis_absen WHERE ID_JA like '%$filter%' OR NM_JA like '%$filter%' OR BATASAN like '%$filter%'";
	}
	$query = mysqli_query($koneksi,$sql);
	$total = mysqli_num_rows($query);
	if($total>0)
	{
		while ($data = mysqli_fetch_array($query)){
			$hasil[]=$data;
		}
		return $hasil;
	}
	else{
		echo"<script>alert('data tidak diketahui')</script>";
		return false;
	}
}
function jenisDetail($x)
{
	global $koneksi;
	$sql = "SELECT * FROM jenis_absen WHERE ID_JA ='$x'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[]=$data;
	}
	return $hasil;
}
function jenisHapus($ID_JA)
{
	global $koneksi;
	$sql = "DELETE FROM jenis_absen WHERE ID_JA ='$ID_JA'";
	$query =mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function jenisEdit($filter)
{
	global $koneksi;
	$sql ="SELECT * FROM jenis_absen WHERE ID_JA = '$filter'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[""]=$data;
	}
	return $hasil;
}
function jenisUpdate($ID_JA, $NM_JA ,$BATASAN)
{
	global $koneksi;
	$sql="UPDATE jenis_absen set NM_JA = '$NM_JA' , BATASAN= '$BATASAN' WHERE '$ID_JA'= '$ID_JA'";
		$query = mysqli_query($koneksi, $sql);
 if($query){
 	return true;
}
	}
function jenisTambah($ID_JA, $jenis,$batas)
{
	global $koneksi;
	$sql = "INSERT INTO jenis_absen values ('$ID_JA' , '$jenis','$batas')";
	$query = mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
	
		}
?>