<?php
include("koneksi.php");

if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $jk = $_POST["jk"];
    $gaji = $_POST["gaji"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data Pegawai</title>
</head>
<body>
    <h3>Update Data</h3>
    <form action="penyimpanan.php" method="post">
        <table>
        <tr><td>Nama Depan</td><td><input type="text" name="fname"></td></tr>
        <tr><td> Nama Belakang</td><td><input type="text" name="lname"></td></tr>
        <tr><td> Tanggal Lahir</td><td><input type="date" name="tgl_lahir"></td></tr>
        <tr><td> Alamat</td><td><textarea name="alamat" rows="3" cols="20"></textarea></td></tr>
        <tr><td>Jenis Kelamin</td><td><input type="text" name="jk"></td></tr>
        <tr><td>Gaji</td><td><input type="number" name="gaji"></td></tr>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>
    <?php 
    $kon = 'SELECT * FROM pegawai';
    $query = mysqli_query($kon,$db);
    while($kon = mysqli_fetch_assoc($data))
    ?>

    <?php
     // end while

    mysqli_close($kon); // menutup koneksi ke database
    ?>
</body>
</html>