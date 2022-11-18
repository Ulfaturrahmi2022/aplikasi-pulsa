<?php
$username = $_POST['username'];
$sandi = $_POST['sandi'];
$nama_lengkap = $_POST['nama_lengkap'];



include "../config/koneksi.php";
//cek data duplikat
$cekdata =mysqli_query($connect, "SELECT * FROM tbl_user WHERE username='$username'");
if(mysqli_num_rows($cekdata)>0){
     echo "<script>alert('data yang dimasukkan sudah ada'); document.location = '?page=register';</script>";

}else {
    //query untuk simpan data
$querySave = mysqli_query($connect, "INSERT INTO tbl_user VALUES('$username', '$sandi', '$nama_lengkap')");

//cek kondisi penyimpanan

if($querySave){
     echo "<script>alert('Akun berhasil diBuat'); document.location = 'login.php';</script>";
}else {
    echo "<script>alert('Akun gagal dibuat'); document.location = 'register.php';</script>";
}
}
?>