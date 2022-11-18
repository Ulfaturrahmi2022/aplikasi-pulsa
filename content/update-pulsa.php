<?php
$kode = $_POST['kode'];
$nama_opt = $_POST['nama_opt'];
$nominal = $_POST['nominal'];
$harga_jual = $_POST['harga_jual'];


include "config/koneksi.php";
//query untuk update
$queryupdate = mysqli_query($connect, "UPDATE tbl_pulsa SET nama_operator = '$nama_opt', nominal = '$nominal', harga_jual = '$harga_jual' WHERE kode_pulsa = '$kode'");
//cek update
if($queryupdate){
     echo "<script>alert('data berhasil diubah'); document.location = '?page=pulsa';</script>";
}else {
    echo "<script>alert('data gagal diubah'); document.location = '?page=pulsa';</script>";
}


?>