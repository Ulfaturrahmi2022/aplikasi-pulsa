<?php
include "config/koneksi.php";
$kode = $_GET['id_member'];
//query delete
$querydelete =mysqli_query($connect, "DELETE from tbl_member WHERE id_member='$kode'");
//pesan
if($querydelete){
    echo "<script>alert('data berhasil dihapus'); document.location = '?page=pulsa';</script>";
    
}else{
    echo "<script>alert('data gagal dihapus'); document.location = '?page=pulsa';</script>";
}
?>