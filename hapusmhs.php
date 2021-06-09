<!DOCTYPE html>
<?php
include('crudmhs.php');
$sql="select * from mahasiswa";
$data = bacaMhs($sql);
// tambahan
session_start();
// tambahan

?>
<html>
<head>
<title>Daftar Mahasiswa</title>
</head>
<body>

<!-- tambahan -->
<?php
echo 'user: '.$_SESSION['namauser'];
?>
<!-- /tambahan -->
<h2>Daftar Mahasiswa</h2>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
<th>Proses</th>
</tr>
<?php
foreach($data as $mhs){
$nim = $mhs['nim'];
$nama = $mhs['nama'];
$kelamin = $mhs['kelamin'];
$jurusan = $mhs['jurusan'];
echo "
<tr>
<td>$nim</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
<td><a href='konfirmasihapus.php?nim=$nim'>Hapus</a></td>
</tr>
";
}
?>
</table>
<!-- tambahan -->
<br>
<a href="logout.php">Logout</a>
<!-- /tambahan -->
</body>
</html>