<?php
include("koneksi.php");
$KodeUkk=$_GET['KodeUkk'];
$sql = "Delete from ukk Where KodeUkk='$KodeUkk'";
$ff=mysql_query($sql,$conn);
if($ff)
{
	header("location:index.php?page=ukk");
}
?>