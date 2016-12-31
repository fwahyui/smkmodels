<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO du
            ( Kode_jur,
             Nama,
             TahunAjaran,
             Nominal,
			 Rician)
VALUES ($_POST[Kode_jur],
        '$_POST[Nama]',
        '$TahunAjaran',
        $_POST[Nominal],
        '$_POST[Rician]')";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE du
	SET Kode_jur = '$_POST[Kode_jur]',

        Nama='$_POST[Nama]',
        TahunAjaran='$TahunAjaran',
        Nominal=$_POST[Nominal],
        Rician=$_POST[Rician]
	WHERE kodedu = $kelas";
}
$rs=mysql_query($sql);
echo$sql;
if($rs)
{
	echo "<script>window.location='index.php?page=du'</script>";
}
?>