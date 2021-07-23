<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php $nama = $this->session->userdata('name');
					// var_dump($nama);
					// die;
					echo $nama ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<!-- <form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
							class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form> -->
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li <?php if ($this->uri->segment(1) == 'dash_adm') {
					echo 'class="active"';
				} ?>>
				<a href="<?= base_url('dash_adm') ?>">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
					<!-- <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span> -->
				</a>
				<!-- <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>assets/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                            <li><a href="<?php echo base_url() ?>assets/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul> -->
			</li>
			<li <?php if ($this->uri->segment(1) == 'pnykt') {
					echo 'class="active"';
				} ?>>
				<a href="<?php echo base_url('pnykt') ?>">
					<i class="glyphicon glyphicon-plus">
						<span> Penyakit</span>
					</i></a>
			</li>
			<li <?php if ($this->uri->segment(1) == 'gjl') {
					echo 'class="active"';
				} ?>>
				<a href="<?= base_url('gjl') ?>">
					<i class="glyphicon glyphicon-zoom-in">
						<span> Gejala </span>
					</i></a>
			</li>
			<li <?php if ($this->uri->segment(1) == 'diagnosa') {
					echo 'class="active"';
				} ?>>
				<a href="<?= base_url('diagnosa') ?>">
					<i class="glyphicon glyphicon-zoom-in">
						<span>Diagnosa Penyakit</span>
					</i></a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>