<?php
function jurusanlist($filter){
	global $koneksi;
	if($filter == "")
	{
		$sql="SELECT * FROM jurusan";
	}
	else{
		$sql="SELECT * FROM jurusan WHERE ID_JURUSAN like '%$filter%' OR NM_JURUSAN like '%$filter%'";
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
function jurusanDetail($x)
{
	global $koneksi;
	$sql ="SELECT * FROM jurusan WHERE ID_JURUSAN='$x'";
	$query= mysqli_query($koneksi, $sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[]=$data;
	}
	return $hasil;
}
 	
function jurusanTambah($id,$nama){
	global $koneksi;
	$sql = "INSERT INTO jurusan values('$id','$nama')";
	$query =  mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function jurusanHapus($ID_ANGKATAN)
{
	global $koneksi;
	$sql = "DELETE FROM jurusan WHERE ID_JURUSAN ='$ID_JURUSAN'";
	$query =mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function jurusanEdit($filter)
{
	global $koneksi;
	$sql ="SELECT * FROM jurusan WHERE ID_JURUSAN='$filter'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[""]=$data;
	}
	return $hasil;
}
function jurusanUpdate($ID_JURUSAN,$NM_JURUSAN){
	global $koneksi;
	$sql= "UPDATE jurusan set NM_JURUSAN ='$NM_JURUSAN' WHERE ID_JURUSAN= '$ID_JURUSAN'";
	$query = mysqli_query($koneksi, $sql);
 if($query){
 	return true;
 }


}
?>