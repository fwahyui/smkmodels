<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Ukk</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Ukk</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>Kode Ukk</th>
                                                        <th>Jurusan</th>
							<th>Nama</th>
							<th>Tahun Ajaran</th>
                                                        <th>Biaya</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "SELECT a.KodeUkk,b.NAMA_JUR,a.NamaUkk,a.TahunAjaran,a.Biaya
                                        FROM ukk a, jurusan b
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
                                                      

							<td>
								<a href="?page=addukk&act=1&KodeUkk=<?php echo $rs[0]; ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
								<a href="hapusukk.php?KodeUkk=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addukk&act=0">
					<input type="submit" value="Input Ukk" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>