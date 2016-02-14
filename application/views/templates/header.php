<!DOCTYPE html>
<html>
	<head>
		<title>E-Commerce</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url('media/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('media/css/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('media/css/price-range/css/main.css') ?>" rel="stylesheet">
	<script src="<?php echo base_url('media/js/jquery.min.js') ?>"></script>	
	<script src="<?php echo base_url('media/js/bootstrap.min.js') ?>"></script>	
	</head>
	
	<body>
	<div>
			<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 siap<span class="live"> melayani</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Gratis biaya <span class="live">pengiriman coy</span></a></li>
					</ul>			
					<div class="clearfix"> </div>
				</div>				
				<div class="top-header-right">
				<ul class="support">
						<li><a href="#"><img src="<?php echo base_url('media/images/facebook.png') ?>"></a></li>
						<li><a href="#"><img src="<?php echo base_url('media/images/twitter.png') ?>"></a></li>
						<li><a href="#"><img src="<?php echo base_url('media/images/pinterest.png') ?>"></a></li>
						<li><a href="#"><img src="<?php echo base_url('media/images/likedin.png') ?>"></a></li>
						<li><a href="#"><img src="<?php echo base_url('media/images/googleplus.png') ?>"></a></li>
					</ul>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="<?php echo site_url('home') ?>"> <img src="<?php echo base_url('media/images/logo.png') ?>" alt=" " /></a>
					</div>
					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
							<input type="submit"  value="SEARCH">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="<?php echo site_url('auth/login') ?>"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="<?php echo site_url('auth/login') ?>"><span> </span>LOGIN</a></li>
								<li ><a href="<?php echo site_url('register') ?>">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->