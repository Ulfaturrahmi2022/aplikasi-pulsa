<?php
$kd_jenis =$_GET['kd_jenis'];

//masukkan query
include "config/koneksi.php";
$query = mysqli_query($connect, "SELECT * FROM tbl_jenism WHERE kd_pulsa='$kd_jenis'");

foreach($query as $data){
    $kd_jenis = $data['kd_jenis'];
    $jenis = $data['jenis'];
    $keterangan = $data['keterangan'];
}

?>








<div class="col-md12">
    <h1 class="text-center">Form Edit Jenis Member</h1>
    <hr>
 <div class="card">
    <div class="card-body">
        <form action="?page=update-j-member" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kode Jenis</label>
                <input type="text" name="kd_jenis" class="form-control"  VALUE="<?= $kd_jenis; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Masukkan jenis</label>
                <input type="text" name="jenis" class="form-control"  VALUE="<?= $jenis; ?>">
            </div>
               
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Masukkan Keterangan</label>
                <input type="text" name="keterangan" class="form-control"  VALUE="<?= $keterangan; ?>">
            
            </div>
            <div class="mb-3">
                <a href="" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Batal</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save"></i> Update</button>
            </div>
        </form>
    
    </div>
 </div>
</div>