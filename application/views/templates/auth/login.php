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