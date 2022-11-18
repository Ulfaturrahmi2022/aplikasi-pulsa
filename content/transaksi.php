<div class="col-md-12">
    <h1 class="text-center">Data Transaksi</h1>
    <hr>
    <a href="" class="btn btn-primary btn-sm mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">[+] Tambah Data</a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>No Hp</th>
                                        <th>Kode Pulsa </th>
                                        <th>Harga Jual</th>
                                        <th>Diskon</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
        </thead>
            <tbody>
                <?php
                include "config/koneksi.php";
                $no =1;
                $querytransaksi = mysqli_query($connect,"SELECT * FROM tbl_transaksi ORDER BY tgl_transaksi DESC");
                foreach($querytransaksi as $row) :
              
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['id_transaksi']; ?></td>
                    <td><?= $row['tgl_transaksi']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td><?= $row['kode_pulsa']; ?></td>
                    <td>Rp <?= number_format($row['harga_jual']); ?></td>
                    <td><?= $row['diskon']; ?></td>
                    <td>Rp <?= number_format($row['jumlah_bayar']); ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a href="?page=edit-pulsa&kode_pulsa=<?=$row['kode_pulsa']; ?>" class="btn btn-warning btn-sm"> <i class="bi bi-pencil-square"></i> Edit</a> |
                        
                        <a href="?page=del-transaksi&id_transaksi=<?=$row['id_transaksi'];?>" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action=" ?page=detail-transaksi" method="POST">
      <div class="modal-body">
        <div class="col-md-12">
           
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Status Member</label>
                        <select name="status" id="kps" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Ya">Member</option>
                            <option value="Tidak">Non Member</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Pulsa</label>
                        <?php
                            include "config/koneksi.php";
                            $query = mysqli_query($connect, "SELECT * FROM tbl_pulsa ");
                        ?>
                        <select name="kd_pulsa" id="kd_pulsa" class="form-control">
                            <option value="">Pilih Kode Pulsa</option>
                            <?php foreach($query as $m): ?>
                                <option value="<?= $m['kode_pulsa']; ?>"><?=$m['kode_pulsa']."-".$m['nama_operator']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Status">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3" id="nonmember">
                        <label for="" class="form-label" >NO Handphone</label>
                        <input type="text" class="form-control" name="no_hp" id="" placeholder="Masukkan No HP">
                    </div>
                    <div class="mb-3" id="seri">
                        <label for="" class="form-label">NO Handphone Member</label>
                        <?php
                        include "config/koneksi.php";
                        $querymember = mysqli_query($connect, "SELECT * FROM tbl_member");
                        ?>
                        <select name="no_member" id="" class="form-control">
                            <option value="">Pilih Nomor</option>
                            <?php
                                foreach($querymember as $m): ?>
                                <option value="<?= $m['no_hp']; ?>"><?=$m['no_hp']."-".$m['nama_member']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
                        <select name="harga_jual" id="harga" class="form-control"></select>
                    </div>
            </div>
        
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
          $("#seri").hide();
          $("#kps").change(function() {
            var kps = $("#kps").val();
            if (kps == "Ya") {
                $("#seri").show(0);
                $("#nonmember").hide(0);
            }else {
                $("#nonmember").show(0);
                $("#seri").hide(0);
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
    $("#kd_pulsa").change(function(){

        var id_md = $("#kd_pulsa").val();
        $.ajax({
            type: "POST",
            dataType : "html",
            url :"content/ambil-harga.php",
            data : "md="+id_md,
            success : function(msg){
                
                    if (msg == ''){
                        alert('Tidak ada Data Pulsa');

                    }else {
                        $("#harga").html(msg);
                    }
                }
            
        

        
        });
    });
});
</script>