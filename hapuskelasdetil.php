<?php
include("koneksi.php");
$ids=$_GET['id'];
$nis=$_GET['id2'];
$sql = "Delete from kelasdetil Where idkelas=$ids and nis='$nis'";
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=kelasdetil");
}
?>