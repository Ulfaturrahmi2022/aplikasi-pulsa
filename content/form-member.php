<?php
include "config/koneksi.php";
$query = mysqli_query($connect, "SELECT * FROM tbl_jenism ORDER BY  kd_jenis ASC" );


?>



<div class="col-md12">
    <h1 class="text-center">Form Add Member</h1>
    <hr>
 <div class="card">
    <div class="card-body">
        <form action="?page=save-member" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID Member</label>
                <input type="text" name="id" class="form-control"  placeholder="Masukkan ID Member">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Nama Member</label>
                <input type="text" name="nama_member" class="form-control"  placeholder="Masukkan Nama Member">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> No HP</label>
                <input type="text" name="kode_pulsa" class="form-control"  placeholder="Masukkan No HP">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis member</label>
                <select name="jenis" class="form-control" id="">
                    <option value="">Pilih jenis</option>
                    <?php foreach ($query as $jenis):?>
                        <option value="<?= $jenis['kd_jenis']; ?>"> <?=$jenis['jenis']; ?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
                <a href="" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i> Batal</a>
                <button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save"></i> Simpan</button>
            </div>
        </form>
    </div>
 </div>
</div>