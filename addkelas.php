<?php
$act = $_GET['act'];
?>
<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tambah Kelas</h3>
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
				<h5>Tambah Kelas</h5>
			</header>
			<form class="form-horizontal" action="simpankelas.php?act=0" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Kelas</label>
					<div class="controls with-tooltip">
                                            <select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
                                            name="grade">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
					</div>
				</div>
                                <div class="control-group">
					<label for="text1" class="control-label">Nama Kelas</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Kelas"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">Jumlah Pagu Kelas</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="JumlahMurid"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"/>
					</div>
					
				</div>				
				<div class="control-group">
					<label class="control-label">Wali Kelas</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
						name="walikelas">
							<option value=""></option>
							<?php
							include("koneksi.php");
							$sql ="select * from guru";
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
	$sql = "select * from kelas where idkelas=$id";
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
			<form class="form-horizontal" action="simpankelas.php?act=1&kelas=<?php echo $id; ?>" method="post">
				<br>
				<div class="control-group">
					<label for="text1" class="control-label">Nama Kelas</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Kelas"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"
						value="<?php echo $rs[2];?>"/>
					</div>
					</div>
				<div class="control-group">
					<label for="text1" class="control-label">Jumlah Pagu Kelas</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="JumlahMurid"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"
						value="<?php echo $rs[3];?>"/>
					</div>
					
				</div>
				<div class="control-group">
					<label class="control-label">Wali Kelas</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
						name="walikelas">
							<option value=""></option>
							<?php
							include("koneksi.php");
							$sql ="select * from guru";
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