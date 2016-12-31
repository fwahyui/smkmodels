<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
	$sql = "INSERT INTO seragam
            (
             NamaSeragam,
             TahunAjaran,
			 Kode_Jur,
			 JenisKelamin,
             Harga)
VALUES (
        '$_POST[NamaSeragam]',
        '$TahunAjaran',
		'$_POST[Kode_Jur]',
		'$_POST[JenisKelamin]',
        '$_POST[Harga]')";
}
else
{
	$sql = "UPDATE seragam
SET NamaSeragam = '$_POST[NamaSeragam]',
TahunAjaran = '$TahunAjaran',
Kode_Jur = $_POST[Kode_jur],
JenisKelamin = '$_POST[JenisKelamin]',
Harga = '$_POST[Harga]'
WHERE KodeSeragam = '$_GET[kelas]';";
}
$rs=mysql_query($sql);
echo $sql;
if($rs)
{
	echo "<script>window.location='index.php?page=seragam'</script>";
}
?>