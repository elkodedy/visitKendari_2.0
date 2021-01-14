<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ela Admin - HTML5 Admin Template</title>
		<meta name="description" content="Ela Admin - HTML5 Admin Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="<?php echo base_url('assets/images/logo.png')?>" type="image/ico">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin_assets/css/cs-skin-elastic.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/admin_assets/css/style.css')?>">
		<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
		<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

		<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
		
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_assets/css/cs-skin-elastic.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_assets/css/lib/datatable/dataTables.bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_assets/css/style.css')?>">

	 <style>
		#weatherWidget .currentDesc {
				color: #ffffff!important;
		}
				.traffic-chart {
						min-height: 335px;
				}
				#flotPie1  {
						height: 150px;
				}
				#flotPie1 td {
						padding:3px;
				}
				#flotPie1 table {
						top: 20px!important;
						right: -10px!important;
				}
				.chart-container {
						display: table;
						min-width: 270px ;
						text-align: left;
						padding-top: 10px;
						padding-bottom: 10px;
				}
				#flotLine5  {
						 height: 105px;
				}

				#flotBarChart {
						height: 150px;
				}
				#cellPaiChart{
						height: 160px;
				}

		</style>
</head>

<body>
		<!-- Left Panel -->
		<aside id="left-panel" class="left-panel">
				<nav class="navbar navbar-expand-sm navbar-default">
						<div id="main-menu" class="main-menu collapse navbar-collapse">
								<ul class="nav navbar-nav">
										<li class="active">
												<a href="<?php echo base_url('admin/')?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
										</li>
										<li class="menu-title">UI elements</li><!-- /.menu-title -->
										<li class=""><a href="<?php echo base_url('admin/destination')?>" class=""><i class="menu-icon fa fa-cogs"></i> Destination</a></li>
										<li class=""><a href="<?php echo base_url('admin/accommodation')?>" class=""><i class="menu-icon fa fa-cogs"></i> Accommodation</a></li>
										<li class=""><a href="<?php echo base_url('admin/guide')?>" class=""><i class="menu-icon fa fa-cogs"></i> Guides</a></li>
								</ul>
						</div><!-- /.navbar-collapse -->
				</nav>
		</aside>
		<!-- /#left-panel -->

		<!-- Right Panel -->
		<div id="right-panel" class="right-panel">
				<!-- Header-->
				<header id="header" class="header">
						<div class="top-left">
								<div class="navbar-header">
										<a class="navbar-brand" href="<?php echo base_url('home')?>"><img src="<?php echo base_url('assets/images/logo2.png')?>" alt="Logo"></a>
										<a class="navbar-brand hidden" href="<?php echo base_url('home')?>"><img src="<?php echo base_url('assets/images/logo2.png')?>" alt="Logo"></a>
										<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
								</div>
						</div>
						<div class="top-right">
								<div class="header-menu">
										<div class="header-left">
												<button class="search-trigger"><i class="fa fa-search"></i></button>
												<div class="form-inline">
														<form class="search-form">
																<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
																<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
														</form>
												</div>

										<div class="user-area dropdown float-right">
												<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<img class="user-avatar rounded-circle" src="<?php echo base_url('/assets/admin_assets/images/admin.jpg')?>" alt="User Avatar">
												</a>

												<div class="user-menu dropdown-menu">
														<a class="nav-link" href="<?php echo base_url('')?>"><i class="fa fa-power -off"></i>Logout</a>
												</div>
										</div>

								</div>
						</div>
				</header>
				<!-- /#header -->