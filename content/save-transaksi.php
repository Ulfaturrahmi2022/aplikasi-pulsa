<?php
$status = $_POST['status'];
$no_hp = $_POST['no_hp'];

$no_member = $_POST['no_member'];
$kd_pulsa = $_POST['kd_pulsa'];
$diskon = $_POST['diskon'];
$harga_jual = $_POST['harga_jual'];
$total_bayar = $_POST['total_bayar'];
$status_pulsa = $_POST['status_pulsa'];


include "config/koneksi.php";
//cek data duplikat
// $cekdata =mysqli_query($connect, "SELECT * FROM tbl_transaksi WHERE id_transaksi='$id_transaksi'");
// if(mysqli_num_rows($cekdata)>0){
//      echo "<script>alert('data yang dimasukkan sudah ada'); document.location = '?page=transaksi';</script>";

// }else {
    //query untuk simpan data
    if($status == "Ya"){
        $querySave = mysqli_query($connect, "INSERT INTO `tbl_transaksi` (`id_transaksi`, `no_hp`, `kode_pulsa`, `harga_jual`, `diskon`, `jumlah_bayar`, `status`) VALUES (NULL, '$no_member', '$kd_pulsa', '$harga_jual', '$diskon', '$total_bayar', '$status_pulsa');");
        if($querySave){
        echo "<script>alert('data berhasil disimpan'); document.location = '?page=transaksi';</script>";
        }else {
            echo "<script>alert('data gagal disimpan'); document.location = '?page=transaksi';</script>";
        }
}else {
    $query = mysqli_query($connect, "INSERT INTO `tbl_transaksi` (`id_transaksi`, `no_hp`, `kode_pulsa`, `harga_jual`, `diskon`, `jumlah_bayar`, `status`) VALUES (NULL, '$no_hp', '$kd_pulsa', '$harga_jual', '$diskon', '$total_bayar', '$status_pulsa');");
        if($query){
        echo "<script>alert('data berhasil disimpan'); document.location = '?page=transaksi';</script>";
        }else {
             echo "<script>alert('data gagal disimpan'); document.location = '?page=transaksi';</script>";
        }
}



//cek kondisi penyimpanan





?>