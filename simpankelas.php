<?php
include("koneksi.php");
$act=$_GET['act'];
if($act==0)
{
$sql = "INSERT INTO dberaport.kelas
		(   Kelas,
		JumlahMurid,walikelas)
		VALUES ('$_POST[Kelas]',
		$_POST[JumlahMurid],'$_POST[walikelas]')";
}
else
{
	$kelas = $_GET['kelas'];
	$sql = "UPDATE kelas
	SET Kelas = '$_POST[Kelas]',
	JumlahMurid = $_POST[JumlahMurid],
        walikelas='$_POST[walikelas]'
	WHERE idkelas = $kelas";
}
$rs=mysql_query($sql);
if($rs)
{
	echo "<script>window.location='index.php?page=kelas'</script>";
}
?>