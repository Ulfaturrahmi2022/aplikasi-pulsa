<?php
include "../config/koneksi.php";

    $baca= mysqli_query($connect, "select * from tbl_pulsa where kode_pulsa='".$_POST["md"]. "'");
    foreach($baca as $pulsa) :
?>
    <option name="harga" value="<?php echo $pulsa["harga_jual"] ?>"><?php echo $pulsa["harga_jual"]; ?></option>
    <?php endforeach; ?>