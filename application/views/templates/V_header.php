<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Visit Kendari</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="icon" href="<?php echo base_url('assets/images/logo.png')?>" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css') ?>">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  </head>
  <body>
    <div class="py-1 bg-black top nav-hide">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+62 8136 2624</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">elkodedy.99@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Service hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light nav-hide" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">Visit Kendari</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item  <?php if($this->uri->segment(2) == '') echo 'active'?>"><a href="<?php echo site_url('home') ?>" class="nav-link">Home</a></li>
	        	<li class="nav-item <?php if($this->uri->segment(2) == 'destination') echo 'active'?>"><a href="<?php echo site_url('/home/destination')?>" class="nav-link">Destination</a></li>
	        	<li class="nav-item <?php if($this->uri->segment(2) == 'accommodation') echo 'active'?>"><a href="<?php echo site_url('/home/accommodation')?>" class="nav-link">Accommodation</a></li>
	        	<li class="nav-item <?php if($this->uri->segment(2) == 'guide') echo 'active'?>"><a href="<?php echo site_url('/home/guide')?>" class="nav-link">Guide</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	          <!-- <li class="nav-item"><a href="#" class="nav-link">Book a guide</a></li> -->
	          <li class="nav-item cta <?php if($this->uri->segment(2) == 'login') echo 'active'?>"><a href="<?php echo site_url('/home/login')?>" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->