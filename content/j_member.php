<div class="col-md-12">
    <h1 class="text-center">Data Member</h1>
    <hr>
    <a href="?page=form-j-member" class="btn btn-primary btn-sm mb-5">[+] Tambah Data</a>
    <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>KD_Jenis</th>
                                        <th>Jenis</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
             <?php
                include "config/koneksi.php";
                $no =1;
                $querypulsa = mysqli_query($connect,"SELECT * FROM tbl_jenism");
                foreach ($querypulsa as $row) :
              
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kd_jenis']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                   
                    <td>
                        <a href="?page=edit-j-member&kd_jenis=<?=$row['kd_jenis']; ?>" class="btn btn-warning btn-sm"> <i class="bi bi-pencil-square"></i> Edit</a> |
                        <a href="?page=del-jmember&kd_jenis=<?=$row['kd_jenis'];?>" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
                                   
                </tbody>
                </table>
</div>