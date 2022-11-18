<?php
$id_member = $_POST['id'];
$nama_member = $_POST['nama_member'];
$kode_pulsa = $_POST['kode_pulsa'];
$jenis = $_POST['jenis'];


include "config/koneksi.php";
//cek data duplikat
$cekdata =mysqli_query($connect, "SELECT * FROM tbl_member WHERE id_member='$id_member'");
if(mysqli_num_rows($cekdata)>0){
     echo "<script>alert('data yang dimasukkan sudah ada'); document.location = '?page=member';</script>";

}else {
    //query untuk simpan data
$querySave = mysqli_query($connect, "INSERT INTO tbl_member VALUES('$id_member', '$nama_member', '$kode_pulsa', '$jenis')");

//cek kondisi penyimpanan
if($querySave){
     echo "<script>alert('data berhasil disimpan'); document.location = '?page=member';</script>";
}else {
    echo "<script>alert('data gagal disimpan'); document.location = '?page=member';</script>";
}
}




?>