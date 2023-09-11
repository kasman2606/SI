<?php 
//Koneksi Database
$koneksi = mysqli_connect("localhost","root","","dbcrud_modal");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
	echo "Koneksi database berhasil";
}
 ?>