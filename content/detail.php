<?php
$status = $_POST['status'];
$kd_pulsa = $_POST['kd_pulsa'];
$no_hp = $_POST['no_hp'];
$no_member = $_POST['no_member'];
$harga_jual = $_POST['harga_jual'];

//cek member
if ($status == "Ya"){
    $diskon = $harga_jual * 0.05;
    $total_bayar = $harga_jual - $diskon;
} else {
    $diskon = 0;
    $total_bayar = $harga_jual;
}


//cek member
// if($status == "Ya"){
//     $diskon = $harga_jual * 0.05;
//     $total_bayar = $harga_jual - $diskon;
//     echo "status member : " .$status;
//     echo "No Hp Member : " .$no_member;
//     echo " Kode Pulsa : " .$kd_pulsa;
//     echo "Harga Jual : " .$total_bayar;
// }else {
//     echo "status member : " .$status;
//     echo "No Hp : " .$no_hp;
//     echo " Kode Pulsa : " .$kd_pulsa;
//     echo "Harga Jual : " .$harga_jual;
// }



?>


<div class="col-md-12">
    <form action="?page=save-transaksi" method="POST">
        
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Detail Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Status Member</label>
                        <input type="text" class="form-control" name="status" value="<?= $status; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Pulsa</label>
                        <input type="text" class="form-control" name="kd_pulsa" value="<?= $kd_pulsa; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Diskon</label>
                        <input  name = "diskon " type="text" class="form-control" value="<?= $diskon; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <input type="text" name="status_pulsa" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Status" value="1">
                    </div>
                </div>
                <div class="col-md-6">
                    <?php if($status== "Ya"): ?>
                    <div class="mb-3" id="nonmember">
                        <label for="" class="form-label" >NO Handphone</label>
                        <input type="text" class="form-control" name="no_member" id="" value="<?= $no_member; ?>" readonly>
                    </div>
                    <?php else: ?>
                    <div class="mb-3" id="nonmember">
                        <label for="" class="form-label" >NO Handphone Member</label>
                        <input type="text" class="form-control" name="no_hp"  value="<?= $no_hp; ?>">
                    </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
                        <input type="text" class="form-control" name="harga_jual" value="<?= $harga_jual; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">total bayar</label>
                        <input type="text" class="form-control" name="total_bayar" id="" value="<?= $total_bayar; ?>" readonly>
                    </div>
                    
            </div>
      </div>
      <div class="modal-footer">
        <a href="?page=transaksi"><button type="submit" class="btn btn-danger" ><i class="bi bi-arrow-left-circle"></i> Batalkan</button></a>
         <button type="submit" class="btn btn-primary"><i class="bi bi-coin"></i> Lanjut Bayar</button>
      </div>
    </div>
  
    </form>
</div>