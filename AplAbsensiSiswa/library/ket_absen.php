<?php
function ketlist($filter){
	global $koneksi;
	if($filter == "")
	{
		$sql="SELECT * FROM keterangan_absen";
	}
	else{
		$sql="SELECT * FROM keterangan_absen WHERE ID_KA like '%$filter%' OR NM_KA like '%$filter%'";
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
function ketDetail($x)
{
	global $koneksi;
	$sql ="SELECT * FROM keterangan_absen WHERE ID_KA='$x'";
	$query= mysqli_query($koneksi, $sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[]=$data;
	}
	return $hasil;
}
 	
function ketTambah($id,$nama){
	global $koneksi;
	$sql = "INSERT INTO keterangan_absen values('$id','$nama')";
	$query =  mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function ketHapus($ID_KA)
{
	global $koneksi;
	$sql = "DELETE FROM keterangan_absen WHERE ID_KA ='$ID_KA'";
	$query =mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function ketEdit($filter)
{
	global $koneksi;
	$sql ="SELECT * FROM keterangan_absen WHERE ID_KA='$filter'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[""]=$data;
	}
	return $hasil;
}
function ketUpdate($ID_KA,$NM_KA){
	global $koneksi;
	$sql= "UPDATE keterangan_absen set NM_KA ='$NM_KA' WHERE ID_KA = '$ID_KA'";
	$query = mysqli_query($koneksi, $sql);
 if($query){
 	return true;
 }


}
?>