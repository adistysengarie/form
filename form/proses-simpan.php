<?php
if(isset($_POST['simpan'])){
    $koneksi = mysqli_connect("localhost","root","","crud")
    or die(mysqli_connect_error());
    $jum = $_POST['jum'];
    $KODE_BARANG = $_POST['KODE_BARANG'];
    $NAMA_BARANG = $_POST['NAMA_BARANG'];
    $HARGA = $_POST['HARGA'];

    for ($i=0; $i<$jum; $i++)
    {
        mysqli_query($koneksi,"insert into crud values (
        '$KODE_BARANG[$i]', $NAMA_BARANG[$i]','$HARGA[$i]')") or die (mysqli_error($koneksi));
    }
    echo "<script>alert('Data telah tersimpan');
    document.location='index.php'</script>";

}
echo "<script>alert('Data telah tersimpan');
document.location='form-entry.php'</script>";

?>
