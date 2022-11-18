<?php
$kode_transaksi = $_POST['kode_transaksi'];
$member = $_POST['member'];
$no_hp = $_POST['no_hp'];
$kode_pulsa = $_POST['kode_pulsa'];
$harga_jual = $_POST['harga_pulsa'];


if ($member == "member") {
    $diskon = $harga_jual*0.05;
}else {
    $diskon = 0;
}
$total_bayar = $harga_jual-$diskon;

echo "<h1>Detail Transaksi</h1>";
echo "<hr>";
echo "<table>
        <tr>
            <td>Kode Transaksi</td>
            <td>:</td>
            <td>$kode_transaksi</td>
        </tr>
        <tr>
            <td>Member</td>
            <td>:</td>
            <td>$member</td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td>$no_hp</td>
        </tr>
        <tr>
            <td>Kode Pulsa</td>
            <td>:</td>
            <td>$kode_pulsa</td>
        </tr>
        <tr>
            <td>harga Jual</td>
            <td>:</td>
            <td>$harga_jual</td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td> (5%) $diskon</td>
        </tr>
        <tr>
            <td>Jumlah Bayar</td>
            <td>:</td>
            <td> $total_bayar</td>
        </tr>



</table>";




?>