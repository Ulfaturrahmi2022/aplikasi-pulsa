<?php
include "config/koneksi.php";
$kode = $_GET['kode_pulsa'];
//query delete
$querydelete =mysqli_query($connect, "DELETE from tbl_pulsa WHERE kode_pulsa='$kode'");
//pesan
if($querydelete){
    echo "<script>alert('data berhasil dihapus'); document.location = '?page=pulsa';</script>";
    
}else{
    echo "<script>alert('data gagal dihapus'); document.location = '?page=pulsa';</script>";
}
?>