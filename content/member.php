<div class="col-md-12">
    <h1 class="text-center">Data Member</h1>
    <hr>
    <a href="?page=form-member" class="btn btn-primary btn-sm mb-5">[+] Tambah Data</a>
    <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Nama_Member</th>
                                        <th>No_HP</th>
                                        <th>Jenis</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
             <?php
                include "config/koneksi.php";
                $no =1;
                $querypulsa = mysqli_query($connect,"SELECT tbl_member.id_member, tbl_member.nama_member, tbl_member.no_hp, tbl_member.jenis, tbl_jenism.jenis FROM tbl_member JOIN tbl_jenism ON tbl_member.jenis=tbl_jenism.kd_jenis");
                foreach ($querypulsa as $row) :
              
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    
                    <td><?= $row['nama_member']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td>
                        <a href="?page=edit-member&id_member=<?=$row['id_member']; ?>" class="btn btn-warning btn-sm"> <i class="bi bi-pencil-square"></i> Edit</a> |
                        <a href="?page=del-member&id_member=<?=$row['id_member'];?>" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
                                   
                                    </tbody>
                                    </table>
</div>