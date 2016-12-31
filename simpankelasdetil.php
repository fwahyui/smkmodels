<?php
include("koneksi.php");
$act=$_GET['act'];
$tahun=$_GET['tahun'];
if($act==0)
{
	$sql = "INSERT INTO kelasdetil
(idkelas,
nis,
tahunajaran)
VALUES ($_POST[idkelas],
'$_POST[nis]',
'$tahun')";
}
else
{

}
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=kelasdetil'</script>";
}
?>