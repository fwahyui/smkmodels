<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO danainfaq
            ( Kode_jur,
             Nama,
			 Gelombang,
             TahunAjaran,
             Nominal)
VALUES ($_POST[Kode_jur],
        '$_POST[Nama]',
        '$_POST[Gelombang]',
        '$TahunAjaran',
        $_POST[Nominal])";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE danainfaq
	SET Kode_jur = $_POST[Kode_jur],

        Nama='$_POST[Nama]',
        Gelombang='$_POST[Gelombang]',
        TahunAjaran='$TahunAjaran',
        Nominal=$_POST[Nominal]
	WHERE kodedanainfaq = $kelas";
}
$rs=mysql_query($sql);
echo$sql;
if($rs)
{
	echo "<script>window.location='index.php?page=infaq'</script>";
}
?>