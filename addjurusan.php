<?php
$act = $_GET['act'];
?>
<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tambah Jurusan</h3>
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
				<h5>Tambah Jurusan</h5>
			</header>
			<form class="form-horizontal" action="simpanjurusan.php?act=0" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Nama Jurusan</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="jurusan"
						data-original-title="Masukan Jurusan - Contoh: Rekaya Perangkat Lunak" data-placement="bottom"/>
					</div>
				</div>
				<div class="form-actions no-margin-bottom">
					<input type="submit" value="Simpan" class="btn btn-primary">
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
	$id = $_GET['id'];
	$sql = "select * from jurusan where kode_jur=$id";
	$rw=mysql_query($sql);
	$rs=mysql_fetch_array($rw)
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Tambah Kelas</h5>
			</header>
			<form class="form-horizontal" action="simpanjurusan.php?act=1&id=<?php echo $id; ?>" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Nama Jurusan</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="jurusan"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"
						value="<?php echo $rs[1];?>"/>
					</div>
					</div>
				
				<div class="form-actions no-margin-bottom">
						<input type="submit" value="Simpan" class="btn btn-primary">
					</div>
			</form>
		</div>
	</div>
</div>
<?php	
}
?>