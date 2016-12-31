<?php
include("koneksi.php");
$KodeSeragam=$_GET['KodeSeragam'];
$sql = "Delete from seragam Where KodeSeragam='$KodeSeragam'";
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=seragam");
}
?>