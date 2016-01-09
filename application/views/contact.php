<!DOCTYPE html>
<html>
	<head>
		<title>E-Commerce</title>	
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
						<li><a href="#"><img src="images/facebook.png"></a></li>
						<li><a href="#"><img src="images/twitter.png"></a></li>
						<li><a href="#"><img src="images/pinterest.png"></a></li>
						<li><a href="#"><img src="images/likedin.png"></a></li>
						<li><a href="#"><img src="images/googleplus.png"></a></li>
					</ul>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="Home.html"><img src="images/logo.png" alt=" " /></a>
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
						<div class="account"><a href="Login.html"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="Login.html"><span> </span>LOGIN</a></li> |
								<li ><a href="register.html">SIGNUP</a></li>
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
			<div class="main"> 
         <div class="reservation_top">          
            	<div class=" contact_right">
            		<h3>Contact Form</h3>
            		<div class="contact-form">
							<form>
								<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
								<textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
								<input type="submit" value="Send">
								<div class="clearfix"> </div>
							</form>
							<address class="address">
                    <p>Pondok Cina <br>Depok - Jawa Barat</p>
                    <dl>
                        <dt> </dt>                        
                        <dd>Telephone:<span> 021 xxxxxxxx</span></dd>
                        <dd>FAX: <span>021 xxxxxxxx</span></dd>
                        <dd>E-mail:&nbsp; <a href="mailto:info@example.com">info@Konekthing.com</a></dd>
                    </dl>
                </address>
						</div>
            	</div>
            </div>
           </div>
			<!---->
			  
			   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		<li class="item1"><a href="#">Fashion<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Aksesoris </a></li>
				<li class="subitem2"><a href="product.html">Celana </a></li>
				<li class="subitem3"><a href="product.html">Sepatu </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Computer <img class="arrow-img " src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Aksesoris </a></li>
				<li class="subitem2"><a href="product.html">Hardware </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Gadget<img class="arrow-img img-arrow" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Aksesoris </a></li>
				<li class="subitem2"><a href="product.html">HandPhone </a></li>
				<li class="subitem3"><a href="product.html">SmartPhone</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Electronic <img class="arrow-img img-left-arrow" src="images/arrow1.png" alt=""/></a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Tv </a></li>
				<li class="subitem2"><a href="product.html">Radio </a></li>
				<li class="subitem3"><a href="product.html">Peralatan Rumah Tangga </a></li>
			</ul>
		</li>
			<ul>	
				<li class="menu-kid-left"><a href="contact.html">Contact us</a></li>
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
					
	   		     	 <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a> 	
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