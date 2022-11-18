<?php
$kd_jenis = $_POST['kd_jenis'];
$jenis = $_POST['jenis'];
$keterangan = $_POST['keterangan'];


include "config/koneksi.php";
//query untuk update
$queryupdate = mysqli_query($connect, "UPDATE tbl_jenism SET  jenis = '$jenis', keterangan = '$keterangan',  WHERE kd_jenis = '$kd_jenis'");
//cek update
if($queryupdate){
     echo "<script>alert('data berhasil diubah'); document.location = '?page=j_member';</script>";
}else {
    echo "<script>alert('data gagal diubah'); document.location = '?page=j_member';</script>";
}


?>