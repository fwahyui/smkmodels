<?php
include("koneksi.php");
$sql = "INSERT INTO tahunjar
            (TahunAkademik,
             status)
VALUES ('$_POST[TahunAkademik]',
        'Tidak Aktif');";
$rs=mysql_query($sql) or die(mysql_error());
if($rs)
{
	echo "<script>window.location='index.php?page=tahun'</script>";
}
?>