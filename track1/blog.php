<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Voyage Website Template | Blog :: w3layouts</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.min.js"></script>
		<!---smoth-scrlling---->
			<script type="text/javascript">
				$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
				</script>
		<!---//smoth-scrlling---->
		<!----start-top-nav-script---->
		<script type="text/javascript" src="js/flexy-menu.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!---calender-style---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<!---//calender-style---->
		<!---images-hover-effects--->
		<link rel="stylesheet" href="css/zalki_hover_img.css" type="text/css" media="screen">
		<script src="js/jquery.zalki_hover_img.min-0.2.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.main_box').ZalkiHoverImg(
				);
				});
		</script>
		<!---//images-hover-effects--->
	</head>
	<body>
		<!----start-wrap---->
			<!----start-top-header----->
			<div class="top-header" id="header">
				<div class="wrap">
				<div class="top-header-left">
					<ul>
						<li><a href="#"><span> </span> Agent Login</a></li>
						<li><a href="#"><span> </span> Agent Login</a></li>
						<li><p><span> </span>Not a Member ? </p>&nbsp;<a class="reg" href="#"> Register</a></li>
						<li><p class="contact-info">Call Us Now :815-123-4567</p></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a class="face" href="#"><span> </span></a></li>
						<li><a class="twit" href="#"><span> </span></a></li>
						<li><a class="thum" href="#"><span> </span></a></li>
						<li><a class="pin" href="#"><span> </span></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<!----//End-top-header----->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!--- start-logo---->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="voyage" /></a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
						<ul class="flexy-menu thick orange">
							<li><a href="index.php">Home</a></li>
							<li><a href="destinations.php">Destinations</a>
								<ul>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a>
									<ul>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a>
											<ul>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
											</ul>
										</li>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a></li>
									</ul>
								</li>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a></li>
							</ul>
							</li>
							<li><a href="criuses.php">Criuses</a></li>
							<li><a href="destinations.php">Specials</a></li>
							<li><a href="destinations.php">Holidays</a></li>
							<li class="active"><a href="blog.php">Blog</a></li>
						</ul>
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/modernizr.custom.js"></script>
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				</div>
				<!--- //End-top-nav---->
				<div class="clear"> </div>
			</div>
			<!---//End-header---->
		</div>
		<!---start-Blog---->
		<div class="blog">
			<div class="destination-head">
				<div class="wrap">
					<h3>Blog</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>HOLYDAYS</label>
						</div>
						<!---strat-date-piker---->
						  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
						  <script>
						  $(function() {
						    $( "#datepicker" ).datepicker();
						  });
						  </script>
						<!---/End-date-piker---->
						<div class="p-ww">
							<form>
								<span> Where</span>
								<input class="dest" type="text" value="Distination" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Distination';}">
								<span> When</span>
								<input class="date" id="datepicker" type="text" value="Select date" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Select date';}">
								<input type="submit" value="Search" />
							</form>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-find-place---->
			</div>
			<div class="blog-grids">
				<div class="wrap">
					<div class="blog-grids-head">
						<h3>Recent Posts</h3>
					</div>
					<div class="blog-grids-box">
						<div class="blog-grid">
							<div class="blog-poast-head">
								<div class="blog-art-pic">
									<a class="post-pic" href="#"> <img src="images/blog-pic.jpg" title="poast-name" /></a>
								</div>
								<div class="blog-poast-admin">
									<a href="#"><img src="images/admin-pic1.jpg" title="admin" /></a>
								</div>
								
								<div class="blog-poast-info">
									<ul>
										<li><a class="admin" href="#"><span> </span> Admin </a></li>
										<li><a class="p-date" href="#"><span> </span>4-03-2014 </a></li>
										<li><a class="p-blog" href="#"><span> </span>Blog,News</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								</div>
								<div class="blog-info">
									<h3><a href="#">Lorem Ipsum is typesetting industry.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<a class="btn" href="#">DeTails</a>
								</div>
						</div>
						<div class="blog-grid">
							<div class="blog-poast-head">
								<div class="blog-art-pic">
									<a class="post-pic" href="#"> <img src="images/blog-pic1.jpg" title="poast-name" /></a>
								</div>
								<div class="blog-poast-admin">
									<a href="#"><img src="images/admin-pic2.jpg" title="admin" /></a>
								</div>
								
								<div class="blog-poast-info">
									<ul>
										<li><a class="admin" href="#"><span> </span> Admin </a></li>
										<li><a class="p-date" href="#"><span> </span>4-03-2014 </a></li>
										<li><a class="p-blog" href="#"><span> </span>Blog,News</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								</div>
								<div class="blog-info">
									<h3><a href="#">Lorem Ipsum is typesetting industry.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<a class="btn" href="#">DeTails</a>
								</div>
						</div>
						<div class="blog-grid">
							<div class="blog-poast-head">
								<div class="blog-art-pic">
									<a class="post-pic" href="#"> <img src="images/blog-pic2.jpg" title="poast-name" /></a>
								</div>
								<div class="blog-poast-admin">
									<a href="#"><img src="images/admin-pic3.jpg" title="admin" /></a>
								</div>
								
								<div class="blog-poast-info">
									<ul>
										<li><a class="admin" href="#"><span> </span> Admin </a></li>
										<li><a class="p-date" href="#"><span> </span>4-03-2014 </a></li>
										<li><a class="p-blog" href="#"><span> </span>Blog,News</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								</div>
								<div class="blog-info">
									<h3><a href="#">Lorem Ipsum is typesetting industry.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<a class="btn" href="#">DeTails</a>
								</div>
						</div>
						<div class="blog-grid">
							<div class="blog-poast-head">
								<div class="blog-art-pic">
									<a class="post-pic" href="#"> <img src="images/blog-pic.jpg" title="poast-name" /></a>
								</div>
								<div class="blog-poast-admin">
									<a href="#"><img src="images/admin-pic4.jpg" title="admin" /></a>
								</div>
								
								<div class="blog-poast-info">
									<ul>
										<li><a class="admin" href="#"><span> </span> Admin </a></li>
										<li><a class="p-date" href="#"><span> </span>4-03-2014 </a></li>
										<li><a class="p-blog" href="#"><span> </span>Blog,News</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								</div>
								<div class="blog-info">
									<h3><a href="#">Lorem Ipsum is typesetting industry.</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<a class="btn" href="#">DeTails</a>
								</div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="criuse-grid-load">
							<a href="#">Loading More</a>
					</div>
				</div>
			</div>
		</div>
		<!----//End-Blog---->
		<!----//End-footer---->
		<!---start-subfooter---->
		<div class="subfooter">
			<div class="wrap">
				<ul>
					<li><a href="index.php">Home</a><span>::</span></li>
					<li><a href="destinations.php">Destinations</a><span>::</span></li>
					<li><a href="criuses.php">Criuses</a><span>::</span></li>
					<li><a href="destinations.php">Specils</a><span>::</span></li>
					<li><a href="destinations.php">Holidays</a><span>::</span></li>
					<li><a href="blog.php">Blog</a><span>::</span></li>
					<li><a href="contact.php">Contact Us</a></li>
					<div class="clear"> </div>
				</ul>
				<p class="copy-right">Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				<a class="to-top" href="#header"><span> </span> </a>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>

