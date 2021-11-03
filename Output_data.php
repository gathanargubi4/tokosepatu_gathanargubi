<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <!-- <?php echo validation_errors(); ?> -->

	<center>
        <h1>Data Hasil Pembelian</h1>
	</center>
	<center>
         <table style="margin:30px auto;">
            <tr>
                <td>Nama Pembeli :</td>
                <td>
					<?= $nama; ?>
                </td>
            </tr>

            <tr>
                <td>Nomor HP :</td>
                <td>
                    <?= $nhp; ?>
                </td>
             </tr>

            <tr>
				<td>Merk sepatu	:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>

            <tr>
                <td>Ukuran sepatu :</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>

            <tr>
				<td>Harga :</td>
                <td>
                     <?= $harga; ?>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
					<hr>
					<a href="<?php base_url('tokosepatu'); ?>">Kembali</a>
                </td>
            </tr>
         </table>
	</center>
	<center>
		<h5>--Terimakasih Telah Berbelanja Di Toko Kami!!!--</h5>
	</center>
</body>
</html>
