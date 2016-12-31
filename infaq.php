<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Infaq</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Infaq</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>Kode Infaq</th>
							<th>Jurusan</th>
                            <th>Nama</th>
                            <th>Gelombang</th>
							<th>Tahun Ajaran</th>
                            <th>Nominal</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.kodedanainfaq,b.NAMA_JUR,a.Nama,a.Gelombang,a.TahunAjaran,a.Nominal
                                        FROM danainfaq a, jurusan b
                                        WHERE a.Kode_Jur = b.KODE_JUR and a.TahunAjaran='$TahunAktif'";
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
                                                        <td><?php echo $rs[5]; ?></td>

							<td>
								<a href="?page=addinfaq&act=1&id=<?php echo $rs[0]; ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
								<a href="hapusinfaq.php?id=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addinfaq&act=0">
					<input type="submit" value="Input Infaq" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>