<?php
$act = $_GET['act'];
?>
<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tambah Semester</h3>
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
				<h5>Tambah Semester</h5>
			</header>
			<form class="form-horizontal" action="simpansemester.php?act=0&th=<?php echo $TahunAktif?>" method="post">
				<br>
                                <div class="control-group">
					<label class="control-label">Jurusan</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
						name="Kode_jur">
							<option value=""></option>
							<?php
							include("koneksi.php");
							$sql ="select * from jurusan";
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
					<label for="text1" class="control-label">Grade</label>
					<div class="controls with-tooltip">
                                            <select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
                                            name="Grade">
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
					</div>
				</div>
                                <div class="control-group">
					<label for="text1" class="control-label">Nama</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Nama"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">Biaya</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Biaya"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"/>
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
	$sql = "SELECT a.KodeSemester,b.NAMA_JUR,a.Grade,a.Nama,a.TahunAjaran,a.Biaya,a.Kode_jur
                                        FROM semester a, jurusan b
                                        WHERE a.Kode_jur = b.KODE_JUR and a.KodeSemester=$id";
	$rw=mysql_query($sql);
	$rs=mysql_fetch_array($rw)
?>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Edit Semester</h5>
			</header>
			<form class="form-horizontal" action="simpansemester.php?act=1&kelas=<?php echo $id; ?>&th=<?php echo $TahunAktif ?>" method="post">
				<br>
				<div class="control-group">
					<label class="control-label">Jurusan</label>
					<div class="controls">
						<select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
						name="Kode_jur">
							<option value="<?php echo $rs[6];?>"><?php echo $rs[1];?></option>
							<?php
							include("koneksi.php");
							$sql ="select * from jurusan";
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
					<label for="text1" class="control-label">Grade</label>
					<div class="controls with-tooltip">
                                            <select data-placeholder="Pilih Kelas" class="chzn-select span6" tabindex="2" 
                                            name="Grade">
                                                    <option value="<?php echo $rs[2];?>"><?php echo $rs[2];?></option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
					</div>
				</div>
                                <div class="control-group">
					<label for="text1" class="control-label">Nama</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Nama"
						data-original-title="Masukan Nama Kelas - Contoh: VII A" data-placement="bottom"
                                                value="<?php echo $rs[3];?>"/>
					</div>
				</div>
				<div class="control-group">
					<label for="text1" class="control-label">Biaya</label>
					<div class="controls with-tooltip">
						<input type="text" id="text1" class="span6 input-tooltip" name="Biaya"
						data-original-title="Masukan Jumlah Siswa - Contoh: 30" data-placement="bottom"
                                                value="<?php echo $rs[5];?>"/>
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