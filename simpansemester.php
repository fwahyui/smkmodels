<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO semester
            ( Kode_jur,
             Grade,
             Nama,
             TahunAjaran,
             Biaya)
VALUES ('$_POST[Kode_jur]',
        '$_POST[Grade]',
        '$_POST[Nama]',
        '$TahunAjaran',
        $_POST[Biaya])";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE semester
	SET Kode_jur = '$_POST[Kode_jur]',
	Grade = '$_POST[Grade]',
        Nama='$_POST[Nama]',
        TahunAjaran='$TahunAjaran',
        Biaya=$_POST[Biaya]
	WHERE KodeSemester = $kelas";
}
$rs=mysql_query($sql);
echo$sql;
if($rs)
{
	echo "<script>window.location='index.php?page=semester'</script>";
}
?>