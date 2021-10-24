<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('sepatu/cetak'); ?>" method="post">
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
                    <td align='center'>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td align='center'>No HP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nohp" id="nohp">
                    </td>
                </tr>
                <tr>
                    <td align="center">Merk</td>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">- Merk -</option>
                            <option value="Nike - Rp.375.000">Nike</option>
                            <option value="Adidas - Rp.300.000">Adidas</option>
                            <option value="Kickers - Rp.250.000">Kickers</option>
                            <option value="Eiger - Rp.275.000">Eiger</option>
                            <option value="Bucherri - Rp.400.000">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center">Ukuran</td>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option value="">- Ukuran -</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
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