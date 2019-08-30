<div class="sidebar-content">
	<a class="sidebar-brand" href="<?= base_url()?>" target="_blank">
		<i class="align-middle" data-feather="globe"></i>
		<span class="align-middle">RS Grha Group</span>
	</a>

	<ul class="sidebar-nav">
		<li class="sidebar-header">
			Main
		</li>
		<li class="sidebar-item active">
			<a href="<?= base_url()?>" class="sidebar-link">
				<i class="align-middle" data-feather="sliders"></i> 
				<span class="align-middle">Dashboard</span>
				<span class="sidebar-badge badge badge-primary">6</span>
			</a>
		</li>
		<li class="sidebar-item">
			<a href="<?= base_url();?>cms/users" class="sidebar-link">
				<i class="align-middle" data-feather="users"></i> 
				<span class="align-middle">Account Users </span>
			</a>
		</li>
		<li class="sidebar-item">
			<a href="<?= base_url();?>cms/profile" class="sidebar-link">
				<i class="align-middle" data-feather="settings"></i> 
				<span class="align-middle">Profile </span>
			</a>
		</li>
		<li class="sidebar-item">
			<a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="globe"></i> <span class="align-middle">Content WEB</span>
			</a>
			<ul id="ui" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/artikel">Artikel</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/dokter">Dewan Direksi</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/direksi">Dokter</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/spesialis">Dokter Spesialis</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/event">Event</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/faq">FAQ</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/fasilitas">Fasilitas</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/halaman">Halaman</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/iklan">Iklan</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/indimutu">Indikator Mutu</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/pekerjaan">Pekerjaan</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/pelayanan">Pelayanan</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/prounggulan">Produk Unggulan</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/slider">Slider</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/sponsor">Sponsor</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/testimoni">Testmoni</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/tips">Tips</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/vedukasi">Video Edukasi</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url()?>cms/visimisi">Visi Misi</a></li>
			</ul>
        </li>
		<li class="sidebar-item">
			<a href="#charts" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Inbox</span>
			</a>
			<ul id="charts" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url()?>cms/contact">Kontak</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url()?>cms/lamaran">Lamaran</a>
				</li>
			</ul>
		</li>
		
	</ul>

	<div class="sidebar-bottom d-none d-lg-block">
		<div class="media">
			<img class="rounded-circle mr-3" src="<?= base_url('assets/img/avatar.png')?>" alt="Chris Wood" width="40" height="40">
			<div class="media-body">
				<h5 class="mb-1 text-white">Chris Wood</h5>
				<div class="text-light">
					<i class="fas fa-circle text-success"></i> Online
				</div>
			</div>
		</div>
	</div>
</div>
