<html>

<head>
    <title>Tampil Data Pembelian Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    TAMPIL DATA PEMBELIAN SEPATU
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('sepatu');
                                ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>