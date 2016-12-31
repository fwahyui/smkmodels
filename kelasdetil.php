<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i>  Kelas Detil</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Kelas Detil</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>Kelas</th>
							<th>NIS</th>
							<th>Nama</th>							
							<th>Alamat</th>
							<th>No HP</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT b.Kelas,a.NIS,a.nama_siswa,a.alamat_siswa,a.NoHp_siswa,b.idkelas
					FROM siswa a, kelas b, kelasdetil c
					WHERE c.idkelas=b.idkelas AND c.nis=a.NIS and tahunajaran='$TahunAktif'";
					$rw=mysql_query($sql);
					while($rs=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $rs[0]; ?></td>
							<td><?php echo $rs[1]; ?></td>
							<td><?php echo $rs[2]; ?></td>
							<td><?php echo $rs[3]; ?></td>
							<td><?php echo $rs[4]; ?></td>
							<td>
								<a href="hapuskelasdetil.php?id=<?php echo $rs[5]; ?>&id2=<?php echo $rs[1]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addkelasdetil&act=0">
					<input type="submit" value="Input Kelas Detil" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>