<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO unas
            (TahunAjaran,
             Kode_Jur,
             NamaUnas,
             Nominal)
VALUES ('$TahunAjaran',
        $_POST[Kode_jur],
        '$_POST[NamaUnas]',
        $_POST[Nominal])";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE unas
	SET Kode_jur = '$_POST[Kode_jur]',
        NamaUnas='$_POST[NamaUnas]',
        TahunAjaran='$TahunAjaran',
        Nominal=$_POST[Nominal]
	WHERE KodeUnas = $kelas";
}
$rs=mysql_query($sql);
if($rs)
{
	echo "<script>window.location='index.php?page=unas'</script>";
}
?>