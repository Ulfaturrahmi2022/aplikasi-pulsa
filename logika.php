<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trnsaksi</title>
</head>
<body>
    <h1>Form Transaksi</h1>
    <hr>
    <form action="detail.php" method="POST">
        <table>
            <tr>
                <td>Kode Transaksi</td>
                <td>:</td>
                <td><input type="text" name="kode_transaksi"></td>
            </tr>
            <tr>
                <td>Member</td>
                <td>:</td>
                <td><input type="text" name="member"></td>
            </tr>
            <tr>
                <td>Pilih Member</td>
                <td>:</td>
                <td>
                    <select name="member" id="">
                    <option value="">Pilih Member</option>
                    <option value="member">Member</option>
                    <option value="non_member">Non Member</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Kode Pulsa</td>
                <td>:</td>
                <td><input type="text" name="kode_pulsa"></td>
            </tr>
            <tr>
                <td>Harga Pulsa</td>
                <td>:</td>
                <td><input type="text" name="harga_pulsa"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Proses Transaksi</button></td>
            </tr>
        </table>
    </form>
</body>
</html>


