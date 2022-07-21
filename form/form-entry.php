<h2>Tambah Data Produk</h2>
<form method="post" action="proses-simpan.php">
<table>
<th bgcolor="#eee" width="50">KODE BARANG</th>
<th bgcolor="#eee" widht="100">NAMA BARANG</th>
<th bgcolor="#eee" widht="100">HARGA</th>

<?php
$jum = $_POST['jum'];
for ($i=1; $i<=$jum; $i++)
{
    echo "<tr>
    <td><input type='text' name='KODE_BARANG[]' size='8'></td>
    <td><input type='text' name='NAMA_BARANG[]' size='25'></td>
    <td><input type='text' name='HARGA[]' size='25'></td>
   </tr>";
}
?>
</table>
<input type="submit" name="simpan" value="simpan"/>
<input type="hidden" name="jum" value="<?php echo $jum ?>"/>
</form>