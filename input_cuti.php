
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

<?php
include "koneksi.php";
if(isset($_POST['save'])){
		$nama=$_POST['nama'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$jumlah=$_POST['jumlah'];
		$keterangan=$_POST['keterangan'];
$query=mysqli_query($koneksi,"insert into cuti(nama,jenis_kelamin,jumlah,keterangan)
value('$nama',
'$jenis_kelamin',
'$jumlah',
'$keterangan')");
if($query){
	header("location:tampil_cuti.php");
}	else {
	echo mysqli_error($koneksi);
}

}
?>
<h1><marquee>Silahkan Masukan Data Izin Cuti</marquee></h1>
<form method ="POST">
<table class="table table-dark">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form Input Data Izin Cuti</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>NAMA</td>
            <td><input type="text" name="nama" size="35" maxlength="20" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jenis Kelamin</td>
            <td><select name="jenis_kelamin">
                    <option value="-">- Pilih Jenis Kelamin -
                    <option value="Laki-Laki">Laki-Laki
                    <option value="Perempuan">Perempuan
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Lama Izin Cuti</td>
            <td><input type="text" name="jumlah" size="50" maxlength="30" /></td>
        </tr>
		</tr>
        <tr height="46">
            <td> </td>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
		<td><input type="submit" name="save" value="simpan" class="btn btn-success btn-lg"></td>
		</tr>
</table>
</form>