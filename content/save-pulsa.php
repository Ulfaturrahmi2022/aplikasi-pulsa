<?php
$kode = $_POST['kode'];
$nama_opt = $_POST['nama_opt'];
$nominal = $_POST['nominal'];
$harga_jual = $_POST['harga_jual'];


include "config/koneksi.php";
//cek data duplikat
$cekdata =mysqli_query($connect, "SELECT * FROM tbl_pulsa WHERE kode_pulsa='$kode'");
if(mysqli_num_rows($cekdata)>0){
     echo "<script>alert('data yang dimasukkan sudah ada'); document.location = '?page=pulsa';</script>";

}else {
    //query untuk simpan data
$querySave = mysqli_query($connect, "INSERT INTO tbl_pulsa VALUES('$kode', '$nama_opt', '$nominal', '$harga_jual')");

//cek kondisi penyimpanan

if($querySave){
     echo "<script>alert('data berhasil disimpan'); document.location = '?page=pulsa';</script>";
}else {
    echo "<script>alert('data gagal disimpan'); document.location = '?page=pulsa';</script>";
}
}



?>