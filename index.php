<?php
session_start();
if (isset($_SESSION['hak']))
{
	$LogNamaUser = $_SESSION['Nama'];
	$LogHak = $_SESSION['hak'];
	if ($LogHak !="admin")
	{
		$Lognipnis = $_SESSION['xxx'];
	}
	else
	{
		$Lognipnis = "Admin";
	}
}
else
{
	echo "<script>window.location='login.php'</script>";
}
include "koneksi.php";
$sql = "select * from tahunjar where status='Aktif'";
$ff=mysql_query($sql,$conn);
$rs=mysql_fetch_array($ff);
$TahunAktif=$rs['TahunAkademik'];
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php  include "head.php";?>
    </head>
    <body>
        <div id="wrap">
            <?php  include "topbar.php";?>
            <div id="left">
                <?php  include "usersesion.php";?>
                <?php  include "menu.php";?>
            </div>
            <div id="content">
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <div class="span12 inner">
                            <?php
                                    $v_cat = (isset($_REQUEST['cat'])&& $_REQUEST['cat'] !=NULL)?$_REQUEST['cat']:'';
                                    $v_page = (isset($_REQUEST['page'])&& $_REQUEST['page'] !=NULL)?$_REQUEST['page']:'';
                                    if(file_exists($v_page.".php"))
                                    {
                                            include($v_page.".php");
                                    }
                                    else
                                    {
                                            include("home.php");
                                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
        <div class="clearfix"></div>
        <?php include "footer.php";?>
        <?php include "help.php";?>
		<?php include "js.php";?>
    </body>
</html>
