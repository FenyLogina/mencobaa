<?php
function angkatanlist($filter){
	global $koneksi;
	if($filter == "")
	{
		$sql="SELECT * FROM angkatan";
	}
	else{
		$sql="SELECT * FROM angkatan WHERE ID_ANGKATAN like '%$filter%' OR NM_ANGKATAN like '%$filter%'";
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
function angkatanDetail($x)
{
	global $koneksi;
	$sql ="SELECT * FROM angkatan WHERE ID_ANGKATAN='$x'";
	$query= mysqli_query($koneksi, $sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[]=$data;
	}
	return $hasil;
}
 	
function angkatanTambah($id,$nama){
	global $koneksi;
	$sql = "INSERT INTO angkatan values('$id','$nama')";
	$query =  mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function angkatanHapus($ID_ANGKATAN)
{
	global $koneksi;
	$sql = "DELETE FROM angkatan WHERE ID_ANGKATAN ='$ID_ANGKATAN'";
	$query =mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function angkatanEdit($filter)
{
	global $koneksi;
	$sql ="SELECT * FROM angkatan WHERE ID_ANGKATAN='$filter'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[""]=$data;
	}
	return $hasil;
}
function angkatanUpdate($ID_ANGKATAN,$NM_ANGKATAN){
	global $koneksi;
	$sql= "UPDATE angkatan set NM_ANGKATAN ='$NM_ANGKATAN' WHERE ID_ANGKATAN = '$ID_ANGKATAN'";
	$query = mysqli_query($koneksi, $sql);
 if($query){
 	return true;
 }


}
?>