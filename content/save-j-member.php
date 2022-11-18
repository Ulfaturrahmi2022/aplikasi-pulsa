<?php
$kd_jenis = $_POST['kd_jenis'];
$jenis = $_POST['jenis'];
$keterangan = $_POST['keterangan'];



include "config/koneksi.php";
//cek data duplikat
$cekdata =mysqli_query($connect, "SELECT * FROM tbl_jenism WHERE kd_jenis='$kd_jenis'");
if(mysqli_num_rows($cekdata)>0){
     echo "<script>alert('data yang dimasukkan sudah ada'); document.location = '?page=j_member';</script>";

}else {
    //query untuk simpan data
$querySave = mysqli_query($connect, "INSERT INTO tbl_jenism VALUES('$kd_jenis', '$jenis', '$keterangan')");

//cek kondisi penyimpanan
if($querySave){
     echo "<script>alert('data berhasil disimpan'); document.location = '?page=j_member';</script>";
}else {
    echo "<script>alert('data gagal disimpan'); document.location = '?page=j_member';</script>";
}
}




?>