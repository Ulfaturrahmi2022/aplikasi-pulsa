<?php
include "config/koneksi.php";
$kode_transaksi = $_GET['id_transaksi'];
//query delete
$querydelete =mysqli_query($connect, "DELETE from tbl_transaksi WHERE id_pulsa='$kode_transaksi'");
//pesan
if($querydelete){
    echo "<script>alert('data berhasil dihapus'); document.location = '?page=transaksi';</script>";
    
}else{
    echo "<script>alert('data gagal dihapus'); document.location = '?page=transaksi';</script>";
}
?>