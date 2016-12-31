<?php
include("koneksi.php");
$act=$_GET['act'];
if($act==0)
{
$sql = "INSERT INTO jurusan
		( nama_jur)
		VALUES ('$_POST[jurusan]')";
}
else
{
	$kelas = $_GET['id'];
	$sql = "UPDATE jurusan
	SET nama_jur = '$_POST[jurusan]'
	WHERE kode_jur = $kelas";
}
$rs=mysql_query($sql);
if($rs)
{
	echo "<script>window.location='index.php?page=jurusan'</script>";
}
else
{
    ?>
        <script>
        alert("Jurusan Tidak Bisa Di Edit");
        document.location.href="index.php?page=jurusan";
        </script>
    <?php
}
?>