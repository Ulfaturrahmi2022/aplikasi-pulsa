<?php 
ob_start();
session_start();
$username = $_POST['username'];
$sandi = $_POST['sandi'];


include "../config/koneksi.php";
$query = mysqli_query($connect, "SELECT * FROM tbl_user WHERE username='$username' AND password ='$sandi'");

//cek akun user

if (mysqli_num_rows($query)> 0){
    $_SESSION['username'] = $username;
    
    $_SESSION['status'] = "login";
    header("location:../index.php ");

}else {
    echo "<script>alert(username atau Password Anda salah !) document.location = 'login.php';</script>";
}
?>