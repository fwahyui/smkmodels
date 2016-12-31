<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Prakerin</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Prakerin</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>ID Prakerin</th>
                                                        <th>Jurusan</th>
							<th>Tahun Ajaran</th>
							<th>Biaya</th>
							<th>Keterangan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.kodeprakerin,b.NAMA_JUR,a.TahunAjaran,a.Biaya,a.Keterangan,b.KODE_JUR
                                        FROM prakerin a, jurusan b
                                        WHERE a.Kode_jur = b.KODE_JUR and tahunajaran='$TahunAktif'";
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
								<a href="?page=addprakerin&act=1&id=<?php echo $rs[0]; ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
								<a href="hapusprakerin.php?id=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addprakerin&act=0">
					<input type="submit" value="Input Prakerin" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>