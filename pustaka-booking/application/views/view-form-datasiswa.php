<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Siswa</title>
    <style>
        .errors{
            color: black;
        }
        </style>
</head>
<body>
<?php echo validation_errors(); ?>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>"method="post">
        <table bgcolor="#8FBC8F" width="300px">
            <tr>
                <th colspan="3">
                    Form Input Data Siswa
</th>
</tr>
<tr>
    <td colspan="3">
        <hr>
</td>
</tr>
<tr>
    <th>Nama Siswa</th>
    <td>:</td>
    <td>
        <input type="text" name="nama" id="nama" placeholder="Nama">
</td>
</tr>
<tr>
    <th>NIS</th>
    <td>:</td>
    <td>
        <input type="text" name="nis" id="nis" placeholder="NIS">
</td>
</tr>
<tr>
    <th>Kelas</th>
    <td>:</td>
    <td>
        <input type="text" name="kelas" id="kelas" placeholder="Kelas">
</td>
</tr>
<tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
        <input type="date" name="tanggallahir" id="tanggal lahir">
</td>
</tr>
<tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td>
        <input type="tex" name="tempatlahir" id="tempat lahir" placeholder="Tempat Lahir">
</td>
</tr>
<tr>
    <th>Alamat</th>
    <td>:</td>
    <td>
        <input type="text" name="alamat" id="alamat" placeholder="Alamat">
</td>
</tr>
<tr>
    <th>Jenis Kelamin</th>
    <td>:<td>
        <input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
		<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
</td>
</tr>
<tr> 
    <th>Agama</th>
    <td>:</td>
    <td>
        <select name="agama" id="agama">
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
</select>
</td>
</tr>
<tr>
    <td colspan="3" align="center">
    <input type="submit" value="Submit">
</td>
</tr>
</table>
</form>
</center> 
</body>
</html>