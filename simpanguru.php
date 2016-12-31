<?php
include("koneksi.php");
$act=$_GET['act'];
if($act==0)
{
	$sql = "INSERT INTO guru
            (NIP,
             Nama,
             Alamat,
             NoHP)
VALUES ('$_POST[NIP]',
        '$_POST[Nama]',
        '$_POST[Alamat]',
        '$_POST[NoHP]')";
}
else
{
	$sql = "UPDATE dberaport.guru
SET Nama = '$_POST[Nama]',
  Alamat = '$_POST[Alamat]',
  NoHP = '$_POST[NoHP]'
WHERE NIP = '$_POST[NIP]'";
}
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=guru'</script>";
}
?>