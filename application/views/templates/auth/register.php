<?php echo validation_errors();?>

<div class="container">
	<div class="register">
		<?php echo form_open(current_url()); ?>
		<form>
			<input type="hidden" name="register" value="1"> 
			<div class="  register-top-grid">
				<h3>LOGIN INFORMATION</h3>
				<div class="mation">
					<span>Email Address<label>*</label></span>
					<input type="text" name="inputEmail" value="<?php echo set_value('inputEmail'); ?>" placeholder="Email">
					
					<span>Password<label>*</label></span>
					<input type="text" name="inputPassword" value="<?php echo set_value('inputPassword'); ?>" placeholder="Password">

					<span>Confirm Password<label>*</label></span>
					<input type="password" name="inputPasswordConf" value="<?php echo set_value('inputPasswordConf'); ?>" placeholder="Konfirmasi Password">
				</div>
				<div class="clearfix"> </div>
				<a class="news-letter" href="#">
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
				</a>
			</div>
		</form>
		<?php echo form_close(); ?>
		<?php if ($this->input->get('location', TRUE)): ?>
			<input type="hidden" name="location" value="<?php echo $this->input->get('location', TRUE); ?>">
		<?php endif ?>
		
		<div class="register-but">
			<?php echo form_open(current_url()); ?>
			<form>
				<input type="submit">
				<div class="clearfix"> </div>
			</form>
			<?php echo form_close(); ?>
		</div>
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
						<li class="subitem1"><a href="<?php echo site_url('product') ?>">Aksesoris </a></li>
						<li class="subitem2"><a href="<?php echo site_url('product') ?>">Hardware </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#">Gadget<img class="arrow-img img-arrow" src="<?php echo base_url('media/images/arrow1.png') ?>" alt=""/> </a>
					<ul class="cute">
						<li class="subitem1"><a href="<?php echo site_url('product') ?>">Aksesoris </a></li>
						<li class="subitem2"><a href="<?php echo site_url('product') ?>">HandPhone </a></li>
						<li class="subitem3"><a href="<?php echo site_url('product') ?>">SmartPhone</a></li>
					</ul>
				</li>
				<li class="item4"><a href="#">Electronic <img class="arrow-img img-left-arrow" src="<?php echo base_url('media/images/arrow1.png') ?>" alt=""/></a>
					<ul class="cute">
						<li class="subitem1"><a href="<?php echo site_url('product') ?>">Tv </a></li>
						<li class="subitem2"><a href="<?php echo site_url('product') ?>">Radio </a></li>
						<li class="subitem3"><a href="<?php echo site_url('product') ?>">Peralatan Rumah Tangga </a></li>
					</ul>
				</li>
				<ul>	
					<li class="menu-kid-left"><a href="<?php echo site_url('contact') ?>">Contact us</a></li>
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