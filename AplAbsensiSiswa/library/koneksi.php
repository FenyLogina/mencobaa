<?php
$host="localhost";
 $user ="root";
 $pass="";
 $db ="aplabsensisiswa";

 $koneksi= mysqli_connect($host,$user,$pass,$db);
 if (!$koneksi){
 	echo "<script>alert('koneksi gagal')</script>";

 }
 ?>