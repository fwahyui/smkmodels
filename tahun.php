<header class="head">
	<div class="main-bar">
		<h3><i class="icon-home"></i> Tahun</h3>
	</div>
</header>
<div class="row-fluid">
	<div class="span12">
		<div class="box">
			<header>
				<div class="icons"><i class="icon-move"></i></div>
				<h5>Data Akademik</h5>
			</header>
			<div id="collapse4" class="body">
				<table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>Tahun Akademik</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "koneksi.php";
					$sql = "Select * from tahunjar";
					$rw=mysql_query($sql);
					while($rs=mysql_fetch_array($rw))
					{
					?>
						<tr>
							<td><?php echo $rs[0]; ?></td>
							<td><?php echo $rs[1]; ?></td>
							<td>
								<div class="btn-group">
									<button class="btn">Action</button>
									<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="hapustahun.php?act=0&id=<?php echo $rs[0]; ?>">Set Aktif</a></li>
										<li><a href="hapustahun.php?act=1&id=<?php echo $rs[0]; ?>">Delete</a></li>
									</ul>
								</div>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<a href="?page=addtahun">
					<input type="submit" value="Input Tahun Akademik" class="btn btn-primary">
				</a>
			</div>
		</div>
	</div>
</div>