<!-- BEGIN MAIN NAVIGATION -->
	<ul id="menu" class="unstyled accordion collapse in">
		
		<?php 
		if($LogHak=="admin")
		{ 
		?>
		<li><a href="index.php"><i class="icon-table icon-large"></i> Dasboard</a></li>
		<li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
				<i class="icon-tasks icon-large"></i> Master
			</a>
			<ul class="collapse " id="component-nav">
				<li><a href="?page=tahun"><i class="icon-angle-right"></i> Tahun Pelajaran</a></li>
                                <li><a href="?page=jurusan"><i class="icon-angle-right"></i> Jurusan</a></li>
				<li><a href="?page=guru"><i class="icon-angle-right"></i> Guru</a></li>
                                <li><a href="?page=kelas"><i class="icon-angle-right"></i> Kelas</a></li>
				<li><a href="?page=siswa"><i class="icon-angle-right"></i> Siswa</a></li>
				<li><a href="?page=kelasdetil"><i class="icon-angle-right"></i> Kelas Detil</a></li>
                                <li><a href="?page=spp"><i class="icon-angle-right"></i> SPP</a></li>
				<li><a href="?page=uts"><i class="icon-angle-right"></i> UTS</a></li>
                                <li><a href="?page=semester"><i class="icon-angle-right"></i> SEMESTER</a></li>
				<li><a href="?page=ukk"><i class="icon-angle-right"></i> UKK</a></li>
				<li><a href="?page=prakerin"><i class="icon-angle-right"></i> PRAKERIN</a></li>
				<li><a href="?page=raportprint"><i class="icon-angle-right"></i> BUKU</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> DAFTAR ULANG</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> SERAGAM</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> INFAQ</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> UNAS</a></li>
			</ul>
		</li>
		<li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#inputnilai">
				<i class="icon-tasks icon-large"></i> Pembayaran
			</a>
			<ul class="collapse " id="inputnilai">
				<li><a href="?page=inputnilai"><i class="icon-angle-right"></i> SPP</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> UTS</a></li>
                                <li><a href="?page=nilai"><i class="icon-angle-right"></i> SEMESTER</a></li>
				<li><a href="?page=extra"><i class="icon-angle-right"></i> UKK</a></li>
				<li><a href="?page=akhlak"><i class="icon-angle-right"></i> PRAKERIN</a></li>
				<li><a href="?page=raportprint"><i class="icon-angle-right"></i> BUKU</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> DAFTAR ULANG</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> SERAGAM</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> INFAQ</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> UNAS</a></li>
			</ul>
		</li>
                <li class="accordion-group ">
			<a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#laporan">
				<i class="icon-tasks icon-large"></i> Laporan
			</a>
			<ul class="collapse " id="laporan">
				<li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Data Semua Siswa</a></li>
                                <li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Data Guru</a></li>
                                <li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Data Kelas</a></li>
                                <li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Data Kelas Detil</a></li>
                                <li><a href="?page=inputnilai"><i class="icon-angle-right"></i> Pembayaran SPP</a></li>
				<li><a href="?page=nilai"><i class="icon-angle-right"></i> Pembayaran UTS</a></li>
                                <li><a href="?page=nilai"><i class="icon-angle-right"></i> Pembayaran SEMESTER</a></li>
				<li><a href="?page=extra"><i class="icon-angle-right"></i> Pembayaran UKK</a></li>
				<li><a href="?page=akhlak"><i class="icon-angle-right"></i> Pembayaran PRAKERIN</a></li>
				<li><a href="?page=raportprint"><i class="icon-angle-right"></i> Pembayaran BUKU</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> Pembayaran DAFTAR ULANG</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> Pembayaran SERAGAM</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> Pembayaran INFAQ</a></li>
                                <li><a href="?page=raportprint"><i class="icon-angle-right"></i> Pembayaran UNAS</a></li>
			</ul>
		</li>
		<?php
		}
		?>
	</ul>
	<!-- END MAIN NAVIGATION -->