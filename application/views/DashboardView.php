<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets_main/img/logo.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets_main/img/logo.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="<?php echo base_url();?>assets_main/css/bootstrap.min.css" rel="stylesheet" />

	<!--  Material Dashboard CSS    -->
	<link href="<?php echo base_url();?>assets_main/css/material-dashboard.css" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?php echo base_url();?>assets_main/css/demo.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

		<div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets_main/img/sidebar-1.jpg">
			<!--
			Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

			Tip 2: you can also add an image using data-image tag
		-->

		<div class="logo">
			<a href="<?php echo base_url('index.php/dashboard');?>" class="simple-text">
				<?php echo $this->session->userdata('nama_admin')?>
			</a>
		</div>

		<div class="sidebar-wrapper">
			<ul class="nav">
				<li class="active">
					<a href="<?php echo base_url();?>dashboard">
						<i class="material-icons">dashboard</i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>katering">
						<i class="material-icons">local_dining</i>
						<p>Katering</p>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>pelanggan">
						<i class="material-icons">person</i>
						<p>Pelanggan</p>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>logout">
						<i class="material-icons">assignment_return</i>
						<p>Keluar</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-transparent navbar-absolute">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Dashboard</a>
				</div>

			</div>
		</nav>

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="orange">
								<i class="material-icons">account_balance</i>
							</div>
							<div class="card-content">
								<p class="category">Panti Asuhan Belum Terverifikasi</p>
								<h3 class="title">559 <small>Panti</small></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="green">
								<i class="material-icons">perm_identity</i>
							</div>
							<div class="card-content">
								<p class="category">Total Donatur</p>
								<h3 class="title">34 <small>Orang</small></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="red">
								<i class="material-icons">monetization_on</i>
							</div>
							<div class="card-content">
								<p class="category">Permintaan Donasi Barang</p>
								<h3 class="title">9</h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header" data-background-color="blue">
								<i class="material-icons">add_alert</i>
							</div>
							<div class="card-content">
								<p class="category">Permintaan Kegiatan</p>
								<h3 class="title">9</h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">update</i> Just Updated
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="green">
								<h4 class="title">Employees Stats</h4>
								<p class="category">New employees on 15th September, 2016</p>
							</div>
							<div class="card-content table-responsive">
								<table class="table table-hover">
									<thead class="text-warning">
										<th>ID</th>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Dakota Rice</td>
											<td>$36,738</td>
											<td>Niger</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Minerva Hooper</td>
											<td>$23,789</td>
											<td>Curaçao</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Sage Rodriguez</td>
											<td>$56,142</td>
											<td>Netherlands</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Philip Chaney</td>
											<td>$38,735</td>
											<td>Korea, South</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card">
							<div class="card-header" data-background-color="orange">
								<h4 class="title">Employees Stats</h4>
								<p class="category">New employees on 15th September, 2016</p>
							</div>
							<div class="card-content table-responsive">
								<table class="table table-hover">
									<thead class="text-warning">
										<th>ID</th>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Dakota Rice</td>
											<td>$36,738</td>
											<td>Niger</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Minerva Hooper</td>
											<td>$23,789</td>
											<td>Curaçao</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Sage Rodriguez</td>
											<td>$56,142</td>
											<td>Netherlands</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Philip Chaney</td>
											<td>$38,735</td>
											<td>Korea, South</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container-fluid">

				<p class="copyright pull-right">
					&copy; <script>document.write(new Date().getFullYear())</script> <a href="<?php echo base_url('index.php/dashboard');?>">Porkat Admin</a>, Nicolas Juniar Kurniawan
				</p>
			</div>
		</footer>
	</div>
</div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets_main/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets_main/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets_main/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets_main/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets_main/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url();?>assets_main/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets_main/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	// Javascript method's body can be found in assets/js/demos.js
	demo.initDashboardPageCharts();

});
</script>

</html>
