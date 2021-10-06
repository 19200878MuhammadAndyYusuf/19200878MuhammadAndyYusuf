<section>
    <center>
        <form action="<?= base_url('web/loginconfirm'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        LOGIN
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align='left'>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" id="username">
                    </td>
                </tr>
                <tr>
                    <td align='left'>Password</td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" id="password">
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td colspan="3" align="center">
                        <input type="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</section>