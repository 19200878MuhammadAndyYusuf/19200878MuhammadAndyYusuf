<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        FORM INPUT DATA MAHASISWA
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align='center'>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <td align='center'>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td align='center'>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <td align="center">Usia</td>
                    <td>:</td>
                    <td>
                        <select name="usia" id="usia">
                            <option value="">- Usia -</option>
                            <option value="2">17</option>
                            <option value="3">18</option>
                            <option value="4">19</option>
                            <option value="4">20</option>
                            <option value="4">21</option>
                            <option value="4">22</option>
                            <option value="4">23</option>
                            <option value="4">24</option>
                            <option value="4">25</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                    <td colspan="3" align="left">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>