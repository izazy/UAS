<?php
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db		= "project1";
	
	$conn 	= mysqli_connect($host,$user,$pass,$db);
	if ($conn==false) {
		echo "koneksi server gagal";
		die();
		}
		else 
		{
		//echo "koneksi Berhasil";
		}
?>