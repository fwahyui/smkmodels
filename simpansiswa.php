<?php
include("koneksi.php");
$act=$_GET['act'];
if($act==0)
{
	$sql = "INSERT INTO siswa
            (NIS,
             Nama,
             Alamat,
             NoHp)
VALUES ('$_POST[NIS]',
        '$_POST[Nama]',
        '$_POST[Alamat]',
        '$_POST[NoHP]')";
}
else
{
	$sql = "UPDATE siswa
SET Nama = '$_POST[Nama]',
Alamat = '$_POST[Alamat]',
NoHp = '$_POST[NoHp]'
WHERE NIS = '$_POST[NIS]';";
}
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=siswa'</script>";
}
?>