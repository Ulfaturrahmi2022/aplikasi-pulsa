<div class="col-md-12">
    <h1 class="text-center">Data Pulsa</h1>
    <hr>
    <a href="?page=form-pulsa" class="btn btn-primary btn-sm mb-5">[+] Tambah Data</a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pulsa</th>
                                        <th>Nama Operator</th>
                                        <th>Nominal</th>
                                        <th>Harga Jual</th>
                                        <th>Aksi</th>
                                    </tr>
        </thead>
            <tbody>
                <?php
                include "config/koneksi.php";
                $no =1;
                $querypulsa = mysqli_query($connect,"SELECT * FROM tbl_pulsa ORDER BY nominal ASC");
                foreach ($querypulsa as $row) :
              
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kode_pulsa']; ?></td>
                    <td><?= $row['nama_operator']; ?></td>
                    <td>Rp <?= number_format($row['nominal']); ?></td>
                    <td>Rp <?= number_format($row['harga_jual']); ?></td>
                    <td>
                        <a href="?page=edit-pulsa&kode_pulsa=<?=$row['kode_pulsa']; ?>" class="btn btn-warning btn-sm"> <i class="bi bi-pencil-square"></i> Edit</a> |
                        
                        <a href="?page=del-pulsa&kode_pulsa=<?=$row['kode_pulsa'];?>" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</div>