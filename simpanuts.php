<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO uts
            ( Kode_jur,
             Grade,
             NAMAUTS,
             TahunAjaran,
             Nominal)
VALUES ('$_POST[Kode_jur]',
        '$_POST[Grade]',
        '$_POST[NAMAUTS]',
        '$TahunAjaran',
        $_POST[Nominal])";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE uts
	SET Kode_jur = '$_POST[Kode_jur]',
	Grade = '$_POST[Grade]',
        NAMAUTS='$_POST[NAMAUTS]',
        TahunAjaran='$TahunAjaran',
        Nominal=$_POST[Nominal]
	WHERE KODEUTS = $kelas";
}
$rs=mysql_query($sql);
echo$sql;
if($rs)
{
	echo "<script>window.location='index.php?page=uts'</script>";
}
?>