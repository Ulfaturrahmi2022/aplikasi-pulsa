<?php
include "config/koneksi.php";
$kode = $_GET['kd_jenis'];
//query delete
$querydelete =mysqli_query($connect, "DELETE from tbl_jenism WHERE kd_jenis='$kode'");
//pesan
if($querydelete){
    echo "<script>alert('data berhasil dihapus'); document.location = '?page=pulsa';</script>";
    
}else{
    echo "<script>alert('data gagal dihapus'); document.location = '?page=pulsa';</script>";
}
?>