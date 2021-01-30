<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nim = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jk'];
  $harga = $_POST['harga'];
  $hp = $_POST['hp'];
  
	$query = "INSERT INTO DECAL (ID,NAMA,ALAMAT,JK,HARGA,HP) VALUES ('".$nim."','".$nama."','".$alamat."','".$jk."','".$harga."','".$hp."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data konsumen berhasil ditambahkan'); 
	window.location.href='konsumen.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data konsumen gagal ditambahkan');
	window.location.href='konsumen.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: konsumen.php'); 
}