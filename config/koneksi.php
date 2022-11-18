<?php
$connect = mysqli_connect('localhost', 'root', '', 'pulsa');
if(!$connect){
    echo "Database Gagal terkoneksi";
}
?>