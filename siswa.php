<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Siswa</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Siswa</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>NIs</th>
							<th>Nama</th>
							<th>Alamat</th>							
							<th>No HP</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "Select * from siswa";
					$rw=mysql_query($sql);
					while($rs=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $rs[0]; ?></td>
							<td><?php echo $rs[1]; ?></td>
							<td><?php echo $rs[2]; ?></td>
							<td><?php echo $rs[3]; ?></td>
							<td >
										<div class="btn-group">
											<button class="btn">Action</button>
											<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="?page=addsiswa&act=1&id=<?php echo $rs[0];?>">Edit</a></li>
												<li><a href="hapussiswa.php?id=<?php echo $rs[0]; ?>">Delete</a></li>
												<li><a href="?page=nilaisiswa&nis=<?php echo $rs[0];?>">Lihat Nilai</a></li>
											</ul>
										</div>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addsiswa&act=0">
					<input type="submit" value="Input Data Siswa" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>