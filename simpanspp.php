<?php
include("koneksi.php");
$act=$_GET['act'];
$th=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO spp
		(   tahunajaran,
		kelas,nominal)
		VALUES ('$th',
		'$_POST[grade]',
                $_POST[nominal])";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE spp
	SET tahunajaran = '$th',
	kelas = '$_POST[grade]',
        nominal=$_POST[nominal]
	WHERE kodespp = $kelas";
}
$rs=mysql_query($sql);
//echo $sql;
if($rs)
{
	echo "<script>window.location='index.php?page=spp'</script>";
}
?>