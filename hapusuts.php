<?php
include("koneksi.php");
$ids=$_GET['id'];
$sql = "Delete from uts Where KODEUTS=$ids";
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=uts");
}
?>
