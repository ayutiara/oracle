<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jk'];
  $harga = $_POST['harga'];
  $hp = $_POST['hp'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  decal  SET NAMA ='".$nama."', ALAMAT ='".$alamat."', JK ='".$jk."', HARGA ='".$harga."', HP ='".$hp."' WHERE ID = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data konsumen berhasil diubah'); window.location.href='konsumen.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data konsumen gagal diubah'); window.location.href='konsumen.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: konsumen.php'); 
}