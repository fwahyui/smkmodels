<?php
$act = $_GET['act'];
?>
<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tambah Data Siswa</h3>
	</div>
</header>
<?php 
if ($act==0)
{
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Tambah Data Siswa</h5>
			</header>
			<form class="form-horizontal" action="simpankelasdetil.php?act=0&tahun=<?php echo $TahunAktif;?>" method="post">
				<br>
				<div class="control-group">
					<label class="control-label">Kelas</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" name="idkelas">
							<option value=""></option>
							<?php
							include("koneksi.php");
							$sql ="select * from kelas";
							$rw=mysql_query($sql,$conn);
							while($s=mysql_fetch_array($rw))
							{
							?>
							<option value="<?php echo $s[0];?>"><?php echo $s[1];?></option>
							<?php
							}
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Siswa</label>
					<div class="controls">
						<select data-placeholder="Pilih Siswa" class="chzn-select span6" tabindex="2" name="nis">
							<option value=""></option>
							<?php
							include("koneksi.php");
							$sql ="select * from siswa";
							$rw=mysql_query($sql,$conn);
							while($s=mysql_fetch_array($rw))
							{
							?>
							<option value="<?php echo $s[0];?>"><?php echo $s[1];?></option>
							<?php
							}
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<div class="form-actions no-margin-bottom">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
else
{
	include "koneksi.php";
	$id = $_GET['id'];$id2 = $_GET['nis'];
	$sql = "select * from kelasdetil where nis='$id' and idkelas=$id2";
	$rw=mysql_query($sql);
	$rs=mysql_fetch_array($rw)
?>

<?php	
}
?>