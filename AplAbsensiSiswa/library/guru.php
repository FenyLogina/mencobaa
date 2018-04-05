<?php
function guruList($filter){
	global $koneksi;
	if($filter == "")
	{
		$sql="SELECT * FROM guru";
	}
	else{
		$sql="SELECT * FROM guru WHERE ID_GURU like '%$filter%' OR NAMA like '%$filter%' ";
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

function guruDetail($x)
{
	global $koneksi;
	$sql ="SELECT * FROM guru WHERE ID_GURU ='$x'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[]=$data;
	}
	return $hasil;
}
function guruHapus($ID_GURU){
	global $koneksi;
	$sql = "DELETE FROM guru WHERE ID_GURU ='$ID_GURU'";
	$query= mysqli_query($koneksi, $sql);
 	if($query){
 		return true;
 	}
}
function guruTambah($id,$nama){
	global $koneksi;
	$sql = "INSERT INTO guru Values ('$id','$nama')";
	$query = mysqli_query($koneksi,$sql);
	if($query){
		return true;
	}
}
function guruEdit($filter)
{
	global $koneksi;
	$sql ="SELECT * FROM guru WHERE ID_GURU ='$filter'";
	$query = mysqli_query($koneksi,$sql);
	while ($data = mysqli_fetch_array($query))
	{
		$hasil[""]=$data;
	}
	return $hasil;
}
function guruUpdate($ID_GURU, $NAMA){
	global $koneksi;
	$sql= "UPDATE guru set nama = '$NAMA' WHERE ID_GURU = '$ID_GURU'";
	$query = mysqli_query($koneksi, $sql);
 if($query){
 	return true;
 }

}
?>