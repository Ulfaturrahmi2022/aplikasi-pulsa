<?php
$id_member =$_GET['id_member'];

//masukkan query
include "config/koneksi.php";
$query = mysqli_query($connect, "SELECT * FROM tbl_member WHERE id_member='$id_member'");

foreach($query as $data){
   $id_member = $data['id_member'];
   $nama_member = $data['nama_member'];
   $no_hp = $data['no_hp'];
   $jenis_member = $data['jenis'];
}
$queryjenis = mysqli_query($connect, "SELECT * FROM tbl_jenism");
?>








<div class="col-md12">
    <h1 class="text-center">Form Edit Member</h1>
    <hr>
 <div class="card">
    <div class="card-body">
         <form action="?page=update-member" method="POST">
            <input type="hidden" name="id_member" value="<?= $id_member; ?>">
               <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID member</label>
         <input type="text" name="id_member" class="form-control"  VALUE="<?= $id_member; ?>" readonly>
            </div>
               <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Masukkan Nama Member</label>
         <input type="text" name="nama_member" class="form-control"  VALUE="<?= $nama_member; ?>">
    </div>
            </div>
               <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"> Masukkan No HP</label>
               <input type="text" name="no_hp" class="form-control"  VALUE="<?= $no_hp; ?>">
          </div>
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label"> Masukkan Jenis</label>
               <select name="jenis" class="form-control" id="">
                    <option value="">Pilih jenis</option>
                    <?php foreach ($queryjenis as $j):?>
                     
                        <option value="<?= $j['kd_jenis']; ?>" <?= ($j['kd_jenis']==$jenis_member) ? 'selected' : '' ;?>> <?= $j['jenis']; ?></option>
                    <?php endforeach;?>
               </select>
          </div>
         
        <div class="mb-3">
            
            <a href="" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save"></i> Update</button>
        </div>
         </form>
    
     </div>
</div>
</div>