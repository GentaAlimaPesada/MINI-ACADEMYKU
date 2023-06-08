<?php 
$koneksi = mysqli_connect("http://minac.c5he2f1isuqn.ap-southeast-1.rds.amazonaws.com","admin
","miniacademy7!","Mini_Academy");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi Lu Gagal Mas Bro :) : " . mysqli_connect_error();
}

 
?>