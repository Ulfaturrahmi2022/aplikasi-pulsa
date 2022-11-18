<?php
$id_member = $_POST['id'];
$nama_member = $_POST['nama_member'];
$no_hp = $_POST['no_hp'];
$jenis = $_POST['jenis'];


include "config/koneksi.php";
//query untuk update
$queryupdate = mysqli_query($connect, "UPDATE tbl_member SET nama_member = '$nama_member', no_hp = '$no_hp', jenis = '$jenis' WHERE id_member = '$id_member'");
//cek update
if($queryupdate){
     echo "<script>alert('data berhasil diubah'); document.location = '?page=member';</script>";
}else {
    echo "<script>alert('data gagal diubah'); document.location = '?page=member';</script>";
}


?>