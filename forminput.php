<!DOCTYPE html>
<html>
    <head>
        <title>Data Pemantauan Covid19</title>
 
    </head>
    <body>
        <h2>Form Input Data Covid19 </h2>
         <form method="post" action="simpan.php">
         <input type="hidden" value="<?php echo $data['id'];?>" name="id_mahasiswa">
            <table>
                <tr><td>NIM : </td><td><input type="text" name="nim"></td></tr>
                <tr><td>Nama Operator :</td><td><input type="text" name="nama"></td></tr> 
                <tr><td>Nama Wilayah :</td><td>
                        <select name="wilayah">
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
							<option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                    </td></tr>
				<tr><td>Jumlah Positif :</td><td><input type="text" name="positif"></td></tr>
				<tr><td>Jumlah Dirawat :</td><td><input type="text" name="dirawat"></td></tr>
				<tr><td>Jumlah Sembuh :</td><td><input type="text" name="sembuh"></td></tr>
				<tr><td>Jumlah Meninggal :</td><td><input type="text" name="meninggal"></td></tr>
            <tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
            </table>
        </form>
     </body>
</html>