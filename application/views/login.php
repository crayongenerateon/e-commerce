<!DOCTYPE html>
<html>
	<head>
		<title>E-Commerce</title>	
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link href="<?php echo base_url('media/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('media/css/style.css') ?>" rel="stylesheet">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
						<li><a href="#">Gratis biaya <span class="live">pengiriman</span></a></li>
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
						<a href="<?php echo site_url('home') ?>"><img src="<?php echo base_url('media/images/logo.png') ?>" alt=" " /></a>
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
						<div class="account"><a href="<?php echo site_url('login') ?>"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="<?php echo site_url('login') ?>"><span> </span>LOGIN</a></li> |
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
<div class="container">
			<div class="account_grid">
			   <div class=" login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="text"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="<?php echo site_url('register') ?>">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
			<!---->
			  
			   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		<li class="item1"><a href="#">Fashion<img class="arrow-img" src="<?php echo base_url('media/images/arrow1.png') ?>" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="<?php echo site_url('product') ?>">Aksesoris </a></li>
				<li class="subitem2"><a href="<?php echo site_url('product') ?>">Celana </a></li>
				<li class="subitem3"><a href="<?php echo site_url('product') ?>">Sepatu </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Computer <img class="arrow-img " src="<?php echo base_url('media/images/arrow1.png') ?>" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Aksesoris </a></li>
				<li class="subitem2"><a href="product.html">Hardware </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Gadget<img class="arrow-img img-arrow" src="<?php echo base_url('media/images/arrow1.png') ?>" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="<?php echo base_url('product') ?>">Aksesoris </a></li>
				<li class="subitem2"><a href="<?php echo base_url('product') ?>">HandPhone </a></li>
				<li class="subitem3"><a href="<?php echo base_url('product') ?>">SmartPhone</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Electronic <img class="arrow-img img-left-arrow" src="<?php echo base_url('media/images/arrow1.png') ?>" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="<?php echo base_url('product') ?>">Tv </a></li>
				<li class="subitem2"><a href="<?php echo base_url('product') ?>">Radio </a></li>
				<li class="subitem3"><a href="<?php echo base_url('product') ?>">Peralatan Rumah Tangga </a></li>
			</ul>
		</li>
			<ul>	
				<li class="menu-kid-left"><a href="<?php echo base_url('contact') ?>">Contact us</a></li>
			</ul>
	
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					
	   		     	 <a class="view-all all-product" href="<?php echo site_url('product') ?>">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
		
	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Celana</a></li>
						<li ><a href="#">Sepatu</a></li>
						<li ><a href="#">Computer</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Hardware</a></li>
						<li ><a href="#">Gadget</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Handphone</a></li>
						<li ><a href="#">Smartphone</a></li>
						<li ><a href="#">Electronics</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>POPULAR</h6>
					<ul>
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Celana</a></li>
						<li ><a href="#">Sepatu</a></li>
						<li ><a href="#">Computer</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Hardware</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>TOP BRANDS</h6>
					<ul>
						<li><a href="#">Fashion</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Celana</a></li>
						<li ><a href="#">Sepatu</a></li>
						<li ><a href="#">Computer</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Hardware</a></li>
						<li ><a href="#">Gadget</a></li>
						<li><a href="#">Aksesoris</a></li>
						<li><a href="#">Handphone</a></li>
						<li ><a href="#">Smartphone</a></li>
						<li ><a href="#">Electronics</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDRESS</h6>
					<ul>
						<li>Pondok Cina. </li>
						<li>Depok</li>
						<li> Jawa Barat.</li>
						<li class="phone">PH : 021 xxxxxxxx</li>
						<li class="temp"><h5>&copy 2015 Konekthing All Rights Reserved |</h5></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
		
	</body>
</html>