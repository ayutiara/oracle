<?php 
 
//membangun koneksi
$username="tiara_10061";
$password="tiara_10061";
$database="LOCALHOST/XE";

$conn=oci_connect($username,$password,$database);

if(!$conn){
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	//echo "koneksi berhasil";
}


?>