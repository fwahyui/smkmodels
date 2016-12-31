<?php
include("koneksi.php");
$ids=$_GET['id'];
$sql = "Delete from prakerin Where kodeprakerin=$ids";
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=prakerin");
}
?>

