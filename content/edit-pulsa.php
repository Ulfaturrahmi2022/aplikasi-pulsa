<?php
$kode =$_GET['kode_pulsa'];

//masukkan query
include "config/koneksi.php";
$query = mysqli_query($connect, "SELECT * FROM tbl_pulsa WHERE kode_pulsa='$kode'");

foreach($query as $data){
   $kode_pulsa = $data['kode_pulsa'];
   $opt = $data['nama_operator'];
   $nominal = $data['nominal'];
   $jual = $data['harga_jual'];
}

?>








<div class="col-md12">
    <h1 class="text-center">Form Edit Pulsa</h1>
    <hr>
 <div class="card">
    <div class="card-body">
         <form action="?page=update-pulsa" method="POST">
               <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Pulsa</label>
         <input type="text" name="kode" class="form-control"  VALUE="<?= $kode_pulsa; ?>" readonly>
            </div>
               <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Masukkan Nama Operator</label>
         <input type="text" name="nama_opt" class="form-control"  VALUE="<?= $opt; ?>">
    </div>
            </div>
               <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Masukkan Nominal</label>
         <input type="text" name="nominal" class="form-control"  VALUE="<?= $nominal; ?>">
    </div>
            </div>
               <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Masukkan Harga Jual</label>
         <input type="text" name="harga_jual" class="form-control"  VALUE="<?= $jual; ?>">
    </div>
        <div class="mb-3">
            
            <a href="" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save"></i> Update</button>
        </div>
         </form>
    
     </div>
</div>
</div>