<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO prakerin
            (kode_jur,
            TahunAjaran,
             Biaya,
             Keterangan)
VALUES ($_POST[jurusan],
        '$TahunAjaran',
        $_POST[biaya],
        '$_POST[keterangan]');";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE prakerin
	SET Kode_jur = $_POST[jurusan],
        Keterangan='$_POST[keterangan]',
        TahunAjaran='$TahunAjaran',
        Biaya=$_POST[biaya]
	WHERE kodeprakerin = $kelas";
}
$rs=mysql_query($sql);
//echo$sql;
if($rs)
{
	echo "<script>window.location='index.php?page=prakerin'</script>";
}
?>