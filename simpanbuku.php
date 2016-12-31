<?php
include("koneksi.php");
$act=$_GET['act'];
$TahunAjaran=$_GET['th'];
if($act==0)
{
$sql = "INSERT INTO  buku
            (PAKETBUKU,
             TAHUNAJARAN,
             SEMESTER,
             HARGA,
             Kode_jur,
             GRADE)
VALUES ('$_POST[PAKETBUKU]',
        '$TahunAjaran',
        '$_POST[SEMESTER]',
        $_POST[HARGA],
        $_POST[Kode_jur],
        '$_POST[GRADE]')";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE buku
	SET PAKETBUKU = '$_POST[PAKETBUKU]',
	TAHUNAJARAN = '$TahunAjaran',
        SEMESTER='$_POST[SEMESTER]',
        HARGA=$_POST[HARGA],
        Kode_jur=$_POST[Kode_jur],
        GRADE='$_POST[GRADE]'    
	WHERE kodebuku = $kelas";
}
$rs=mysql_query($sql);
echo$sql;
if($rs)
{
	echo "<script>window.location='index.php?page=buku'</script>";
}
?>