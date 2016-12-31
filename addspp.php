<?php
$act = $_GET['act'];
?>
<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tambah SPP</h3>
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
				<h5>Tambah SPP</h5>
			</header>
			<form class="form-horizontal" action="simpanspp.php?act=0&th=<?php echo $TahunAktif; ?>" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Kelas</label>
					<div class="controls with-tooltip">
                                            <select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
                                            name="grade">
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
					</div>
				</div>
                                <div class="control-group">
					<label for="text1" class="control-label">Nominal</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="nominal"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"/>
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
	$sql = "select * from spp where kodespp=$id";
        
	$rw=mysql_query($sql);
	$rs=mysql_fetch_array($rw)
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Edit SPP</h5>
			</header>
			<form class="form-horizontal" action="simpanspp.php?act=1&kelas=<?php echo $id; ?>&th=<?php echo $TahunAktif; ?>" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Grade</label>
					<div class="controls with-tooltip">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
                                            name="grade">
                                                    <option value="<?php echo $rs[2];?>"><?php echo $rs[2];?></option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
					</div>
					</div>
				<div class="control-group">
					<label for="text1" class="control-label">Nominal</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="nominal"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"
                                                value="<?php echo $rs[3];?>"/>
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