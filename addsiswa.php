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
			<form class="form-horizontal" action="simpansiswa.php?act=0" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">NIS</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="NIS"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"/>
					</div>
					</div>
				<div class="control-group">
					<label for="text1" class="control-label">NAMA</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Nama"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">ALAMAT</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Alamat"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">NO TELP</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="NoHP"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"/>
					</div>
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
	$id = $_GET['id'];
	$sql = "select * from siswa where nis='$id'";
	$rw=mysql_query($sql);
	$rs=mysql_fetch_array($rw)
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Edit Data Guru</h5>
			</header>
			<form class="form-horizontal" action="simpansiswa.php?act=1" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">NIS</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="NIS"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"
						value="<?php echo $rs[0];?>"/>
					</div>
					</div>
				<div class="control-group">
					<label for="text1" class="control-label">NAMA</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Nama"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"
						value="<?php echo $rs[1];?>"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">ALAMAT</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Alamat"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"
						value="<?php echo $rs[2];?>"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">NO TELP</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="NoHp"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"
						value="<?php echo $rs[3];?>"/>
					</div>
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
?>