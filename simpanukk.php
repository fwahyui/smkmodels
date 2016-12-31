<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
	$sql = "INSERT INTO ukk
            (
             NamaUkk,
             TahunAjaran,
			 Kode_Jur,
             Biaya)
VALUES (
        '$_POST[NamaUkk]',
        '$TahunAjaran',
		'$_POST[Kode_Jur]',
        '$_POST[Biaya]')";
}
else
{
	$sql = "UPDATE ukk
SET NamaUkk = '$_POST[NamaUkk]',
TahunAjaran = '$TahunAjaran',
Kode_Jur = $_POST[Kode_jur],
Biaya = '$_POST[Biaya]'
WHERE KodeUkk = '$_GET[kelas]';";
}
$rs=mysql_query($sql);
//echo $sql;
if($rs)
{
	echo "<script>window.location='index.php?page=ukk'</script>";
}
?>