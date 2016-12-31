<?php
include("koneksi.php");
$ids=$_GET['id'];
$act = $_GET['act'];
if ($act==1)
{
	$sql = "Delete from tahunjar Where tahunakademik='$ids'";
}
else
{
	$sql = "update tahunjar set status = 'Tidak Aktif'";
	$ff=mysql_query($sql,$conn);
	$sql = "update tahunjar set status ='Aktif' where tahunakademik='$ids'";
}
	$ff=mysql_query($sql,$conn);

	header("location:index.php?page=tahun");

?>