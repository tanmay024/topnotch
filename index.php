<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		
		<script src="js/jquery.mobile.customized.min.js"></script>
		
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, 
				itemsDesktop : [995,2], 
				itemsDesktopSmall : [767, 2], 
				itemsTablet: [700, 2], 
				itemsMobile : [479, 1], 
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		
	</head>
	<body class="page1" id="top">
	<?php
	if (isset($_POST['ubmit'])) {

	$con = mysql_connect("localhost","vacation");
	if (!$con) {
		die("Can not connect: " . mysql_error());
			}
			mysql_select_db("vacation", $con);
			$sql = "INSERT INTO vacation (Name,Email,Country,Hotel,Message,Check-in,Check-out) VALUES('$_POST[Name]','$_POST[Email]','$_POST[Country]','$_POST[Hotel]','$_POST[Message]','$_POST[Check-in]','$_POST[Check-out0]')
			
			mysql_query($sql,$con);
			mysql_close($con);
		}
			?>
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">ABOUT</a></li>
								<li><a href="index-1.html">HOT TOURS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								
								<li><a href="index-4.html">CONTACTS</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg">
					<div class="caption fadeIn">
						<h2>LONDON</h2>
						<div class="price">
							FROM
							<span>Rs.1000000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide1.jpg">
					<div class="caption fadeIn">
						<h2>Maldives</h2>
						<div class="price">
							FROM
							<span>Rs.2000000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide2.jpg">
					<div class="caption fadeIn">
						<h2>Venice</h2>
						<div class="price">
							FROM
							<span>Rs.1600000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>

		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img1.jpg" alt="">
						<div class="label">
							<div class="title">Barcelona</div>
							<div class="price">FROM<span>Rs.1000000</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img2.jpg" alt="">
						<div class="label">
							<div class="title">GOA</div>
							<div class="price">FROM<span>Rs.15000</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img3.jpg" alt="">
						<div class="label">
							<div class="title">PARIS</div>
							<div class="price">FROM<span>Rs.1600000</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Booking Form</h3>
					<form action="index.php" method="post" id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Country" placeHolder="Country:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							<div class="tmInput mr0">
								<input name="Hotel" placeHolder="Hotel:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-in" placeHolder='01/05/2016' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-out" placeHolder='20/05/2016' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort</p>
							<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
							<span>Cheap</span>
							<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Standart</span>
							<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Lux</span>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>0</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=500)'></textarea>
						</div>
						<input type="submit" class="btn" data-type="submit" name="submit">>
					</form>
				</div>

				
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>A Lovely place to be!</p>
						
					</div>
					<div class="clear cl1"></div>
					<p>Find the detailed description of this <span class="col1"></span> at Technocrat blog.</p>
					<p><span class="col1">Travel Website</a></span> category offers you a variety of designs that are perfect for travel sphere of business.</p>
					Let's hear from our customers!
					<h4>Clients’ Quotes</h4>
					<blockquote class="bq1">
						<img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p>The website has given me a whole new divine experience.</p>
							<div class="alright">
								<div class="col1">Irina Shayk</div>
								<a href="#" class="btn">More</a>
							</div>
						</div>
					</blockquote>
				</div>
				<div class="grid_12">
					<h3 class="head1">Latest News</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">10<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Barcelona</a></div>
							We are offering a delicious 15% off on selected cuisines.
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">21<span>March</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Prague</a></div>
							The city that is filled with exotic destinations.
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">15<span>April</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Goa</a></div>
							A perfect place for all the booze lovers!
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip &copy; 2016 | <a href="#">Privacy Policy</a> | Website Designed by Technocrat</a>
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

