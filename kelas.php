<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Kelas</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Kelas</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>ID Kelas</th>
                                                        <th>Kelas</th>
							<th>Nama Kelas</th>
							<th>Jumlah Murid</th>
							<th>Wali Kelas</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "Select * from kelas";
					$rw=mysql_query($sql);
					while($rs=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $rs[0]; ?></td>
							<td><?php echo $rs[1]; ?></td>
							<td><?php echo $rs[2]; ?></td>
                                                        <td><?php echo $rs[3]; ?></td>
							<td>
							<?php 
							$sql = "Select * from guru where nip='$rs[4]'";
							$rws=mysql_query($sql);$rss=mysql_fetch_array($rws);
							echo $rss[1]; 
							?>
							</td>
							<td>
								<a href="?page=addkelas&act=1&id=<?php echo $rs[0]; ?>"><button class="btn edit"><i class="icon-edit"></i></button></a>
								<a href="hapuskelas.php?id=<?php echo $rs[0]; ?>"><button class="btn btn-danger remove"><i class="icon-remove"></i></button></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addkelas&act=0">
					<input type="submit" value="Input Kelas Baru" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>