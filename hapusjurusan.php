<?php
include("koneksi.php");
$ids=$_GET['id'];
$sql = "Delete from jurusan Where kode_jur=$ids";
echo $sql;
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=jurusan");
}
else
{
    ?>
        <script>
        alert("Jurusan Tidak Bisa Dihapus");
        document.location.href="index.php?page=jurusan";
        </script>
    <?php
}
?>