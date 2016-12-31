<?php
include("koneksi.php");
	if(isset($_GET['login']))
	{
		$sql="Select * from tbuser where Username='$_POST[Username]' and pass='$_POST[password]'";
		$rs=mysql_query($sql,$conn);
		$rw=mysql_fetch_array($rs);
		$rc=mysql_num_rows($rs);
		if($rc==1)
		{
			session_start();
			$_SESSION['hak']=$rw['Hak'];
			$_SESSION['xxx']=$rw['Username'];
			$_SESSION['Nama']=$rw['NamaUser'];
			header("location:index.php");
		}
	}
?>