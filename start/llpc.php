<?php
include 'connect.php';
session_start();
			
			if(!$_SESSION['name'])  
			{  
			  
				//header("Location: login.php");  
				echo "<script>setTimeout(function(){window.location='index.php'},0)</script>";
			}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4Square C language</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/element.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Fav Icons -->
	<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
	<link rel="icon" href="images/favicon.jpg" type="image/x-icon">

</head>
<body>


<div class="preloader"></div>
<div class="page-wrapper">


	<header class="main-header" id="home">
		<div class="container-fluid">
			<div class="pull-left">
			<!--	<div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>-->
				<div class="logo"><h1><i><u><a href="index.html">4SquareWebs</a></u></i></h1></div>
			</div>
			<div class="pull-right">
				<div class="menu">
					<ul class="scroll-nav">
						<li><a href="#hire">Join Us</a></li>
						<li><a href="#main-demo">Language Learing Program</a></li>
						<li><a href="#feature">Features</a></li>
						<li><a href="#core-feature">Core Feature</a></li>
						<li><a href="#nmember"><?php
													if (isset($_SESSION['name'])) 
													{
														echo $_SESSION['name'];
													}
												
												?></a></li>
						<li><a href="logout.php">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	

	<section class="banner" style="background-image: url(images/header-bg.jpg);">
		<div class="container">
			<h2>Why we need to learn C Programming Language ???</h2>
			
		</div>
		<div class="parallax-container">
			<div class="slide1"><img src="images/b1.png" alt=""></div>
			<div class="slide2"><img src="images/b2.png" alt=""></div>
			<div class="slide3"><img src="images/b3.png" alt=""></div>
			<div class="slide4"><img src="images/b4.png" alt=""></div>
			<div class="slide4"><img src="images/b5.png" alt=""></div>
		</div>
	</section>

	<section class="main-demo" id="main-demo">
		<div class="container">
		<div class="sec-title centered">
					<h2>C Programming Language</h2>
					<div class="text">Type introduction here...</div>
				    </div>
			<div class="text-center">
					<div class="col-lg-4 col-md-6">
					<iframe src="https://www.youtube.com/embed/smGalmxPVYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
					<h3><a href="https://www.youtube.com/embed/smGalmxPVYc" target="_blank">C Language Video 1</a></h3>
				</div>
				<div class="col-lg-4 col-md-6">
					<iframe src="https://www.youtube.com/embed/smGalmxPVYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
					<h3><a href="https://www.youtube.com/embed/smGalmxPVYc" target="_blank">C Language Video 2</a></h3>
				</div>
				<div class="col-lg-4 col-md-6">
					<iframe src="https://www.youtube.com/embed/smGalmxPVYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
					<h3><a href="https://www.youtube.com/embed/smGalmxPVYc" target="_blank">C Language Video 3</a></h3>
				</div>
			</div>
			<div class="text-center">
					<div class="col-lg-4 col-md-6">
					<iframe src="https://www.youtube.com/embed/smGalmxPVYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
					<h3><a href="https://www.youtube.com/embed/smGalmxPVYc" target="_blank">C Language Video 4</a></h3>
				</div>
				<div class="col-lg-4 col-md-6">
					<iframe src="https://www.youtube.com/embed/smGalmxPVYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
					<h3><a href="https://www.youtube.com/embed/smGalmxPVYc" target="_blank">C Language Video 5</a></h3>
				</div>
				<div class="col-lg-4 col-md-6">
					<iframe src="https://www.youtube.com/embed/smGalmxPVYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
					<h3><a href="https://www.youtube.com/embed/smGalmxPVYc" target="_blank">C Language Video 6</a></h3>
				</div>
			</div>
		</div>
	</section>

	<section class="feature" id="feature">
		<div class="container">
			<div class="text-center">
				<div class="sec-title centered">
					<h2>Web-Makers Features</h2>
				</div>
			</div>
			<div class="text-center">
				<div class="feature-block">
					<h4>Quick Support .</h4>
					<div class="text">We Provide the Quick support to our Clints <br> to help in their work with update and debugs the Project.</div>
				</div>
				<div class="feature-block">
					<h4>Responsive Design .</h4>
					<div class="text">We make responsive and lighter design with <br> any compatable device can support fast.</div>
				</div>
				<div class="feature-block">
					<h4>Time Saving Components .</h4>
					<div class="text">we povide feature as per your requirments <br>Like site maps,sortcuts,hidden buttons etc.</div>
				</div>
			</div>
		</div>
</section>

	<section class="feature-icon">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/1.png" alt=""></div>
						<h4>Pages .</h4>
						<div class="text">We create number of pages and content as per requirments and devlope your dream work</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/2.png" alt=""></div>
						<h4>Many Shortcodes .</h4>
						<div class="text">We use maximized short code for any avalable function to make it lighter and fast.</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/3.png" alt=""></div>
						<h4>Ready TO Use.</h4>
						<div class="text">Higher Responsive with most of the browsers and  different size of display devices </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/4.png" alt=""></div>
						<h4>Reliable Pages .</h4>
						<div class="text">Remove all the backlinks and all page connections are give properly which helps to avoid errors like "404 page not found..."  </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/5.png" alt=""></div>
						<h4>Timely Updates .</h4>
						<div class="text">you can costomize your project after some time as per requirments and add some updated features in your projects. </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/6.png" alt=""></div>
						<h4>High Performance .</h4>
						<div class="text">Less and shortest possible code make your site more fast powerful and high performance use external js and css with less backlinks. </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/7.png" alt=""></div>
						<h4>Customized Admin Penel .</h4>
						<div class="text">as an admin you can modifies the content and entry of the databases and manage all activity performs on your sites. </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/8.png" alt=""></div>
						<h4>Translation Ready .</h4>
						<div class="text">We can also create the multi-language website which can attrect and more readable for general and profetional peoples. </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/9.png" alt=""></div>
						<h4>Online Shop Pages .</h4>
						<div class="text">we make E-commerce page with payment gateway which helps to extends your business and selling community. </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/10.png" alt=""></div>
						<h4>Fully SEO Optimized .</h4>
						<div class="text">we will Add this service after sometime. </div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<!--<div class="image"><img src="images/icon/11.png" alt=""></div>
						<h4>Friendly Support .</h4>
						<div class="text">Begrudging oh asininely angelic less lighted <br>bought flung reindeer however irrespective <br>solemnly as listlessly thus famous. </div>-->
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-block-two">
						<div class="image"><img src="images/icon/12.png" alt=""></div>
						<h4>Highly Customizable .</h4>
						<div class="text">we will Add this service after sometime. </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="text-center">
				<div class="sec-title centered">
					<h2>Ready to Use Portfolio Pages</h2>
				</div>
			</div>				
			<div class="two-item-carousel owl-carousel owl-theme owl-dot-none owl-nav-style-three">
				<div class="image"><img src="images/portfolio-1.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-2.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-3.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-4.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-5.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-6.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-1.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-2.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-3.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-4.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-5.jpg" alt=""></div>
				<div class="image"><img src="images/portfolio-6.jpg" alt=""></div>
			</div>
		</div>
	</section>

	<section class="core-feature" id="core-feature">
		<div class="container">
			<div class="text-center mb-30">
				<div class="sec-title centered">
					<h2>Core Features</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/1.jpg" alt=""></div>
					<h5>200+ Font <br>Icons</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/2.jpg" alt=""></div>
					<h5>Google <br>Fonts</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/3.jpg" alt=""></div>
					<h5>Search and manage contents</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/4.jpg" alt=""></div>
					<h5>External CSS <br>Ready</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/5.jpg" alt=""></div>
					<h5>Java-Script <br>Included</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/6.jpg" alt=""></div>
					<h5>SEO <br>Ready</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/7.jpg" alt=""></div>
					<h5>Various Post <br>Formats</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/8.jpg" alt=""></div>
					<h5>5 homepage <br>Style</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/9.jpg" alt=""></div>
					<h5>Parallax <br>effect</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/10.jpg" alt=""></div>
					<h5>Unique effects and <br>functionality</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/11.jpg" alt=""></div>
					<h5>Cross Browser <br>Optimisation</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/12.jpg" alt=""></div>
					<h5>Full Width & <br>Boxed Layout</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/13.jpg" alt=""></div>
					<h5>Awesome Gallery <br>Showcase Pages</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/14.jpg" alt=""></div>
					<h5>Creative Blog <br>Pages</h5>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="image"><img src="images/icon/15.jpg" alt=""></div>
					<h5>Shop <br>Pages</h5>
				</div>

			</div>
		</div>
	</section>
	
	<section class="main-demo" id="nmember" align="left">
	<center>
	<table style="color:perpule;">
		<form method="post" action="index.php">
            <fieldset>
			<h2><i><b>New User ?? / First time ??</b></i></h2><br>
			
			<h4>Register in our site so you will get our service like downloading contents and accessing our files and Join technical language lerning programs.</h4><br>
			
			<tr>
			<td><label><i>Full Name  :  </i></label></td><td></td>
			<td><input id="name" name="name" type="text" pattern="[A-Z a-z]{3,35}" placeholder="What's Your Full Name ?" size="50%" required /></td>
			</tr>
			
			<tr><td><br></td><td><br></td></tr>
			
			<tr>
			<td><label><i>Contect Number  :  </i></label></td><td></td>
			<td><input id="num" name="cont" type="text" pattern="[0-9]{10}" placeholder="Enter Contect Number..." size="50%" required /></td>
			</tr>
			
			<tr><td><br></td><td><br></td></tr>
			
			<tr>
			<td><label>Email  :</label></td><td></td>
			<td><input id="email" name="email" type="email" placeholder="Enter your Email" size="50%" required /></td>
			</tr>
			
			<tr><td><br></td><td><br></td></tr>
			
			<tr>
			<td><label><i>Current Address :</i></label></td><td></td>
			<td><input id="addr" name="addr" type="text" pattern="[A-Z a-z 0-9]{3,300}" placeholder="Enter Address as adhar card" size="50%" required /></td>
			</tr>
			
			<tr><td><br></td><td><br></td></tr>
			
	        <tr>
			<td><label><i>Password  :</i></label></td><td></td>
			<td><input id="password" name="password" type="password" pattern="[A-Z a-z 0-9]{8,16}" placeholder="Enter password of 8 charector" size="50%" onkeyup='check();' required /></td>
			</tr>
			
			<tr><td><br></td><td><br></td></tr>
			
			<tr>
		    <td><label><i>Confirm Password  :</i></label></td><td></td>
			<td><input id="confirm_password" name="confirm_password" type="password" pattern="[A-Z a-z 0-9]{8,16}" placeholder="Enter password of 8 charector" size="50%" onkeyup='check();' required /></td>
			</tr>
			
			<tr><td><br></td><td><br></td></tr>
			
			<tr>
			<td></td>
			<td><input name="submit" type="submit" value="Register Now !!!" class="theme-btn btn-style-one"></td>
			</tr>
			
			
			
			</fieldset>
			</form>
			</table>
			</center>
	
	</section>
	
		<section class="main-demo" id="amember" align="left">
		<center>
		<table style="color:perpule;">

			<form method="post" action="index.php">

            <fieldset>
            
			<h2><i><b>SIGN IN / Enter Language Learing Program</b></i></h2><br>
			<tr>
		    <td><label><i>Full Name  :</i></label></td><td></td>
			<td><input id="name" name="name" type="text" pattern="[A-Z a-z]{3,35}" placeholder="Enter Name As you Registered" size="50%" required /></td>
			
			</tr>
	        
			<tr><td><br></td><td><br></td></tr>
			
	        <tr>
			<td><label><i>Password  :</i></label></td><td></td>
			<td><input id="password" name="password" type="password" pattern="[A-Z a-z 0-9]{8,30}" placeholder="Enter password Which you have set..." size="50%" required /></td>
			</tr>
			
			
			<tr><td><br></td><td><br></td></tr>
			
			<tr>
			    <td></td>
			<td><input name="btn-login" type="submit" value="SIGN IN" class="theme-btn btn-style-one"></td>
			</tr>
			
			</fieldset>
			</form>
			
			</table>
			</center>
		</section>




		<section class="footer" style="background-image: url(images/footer-bg.jpg);">
		<div class="overlay"><img src="images/footer-shape.png" alt=""></div>
		<div class="container">
			<h2>Create Videos On Your Favourite Subject We Give You Platform To Learn.</h2>
			<div class="text">If You Intrested To Make a Videos on Perticuler Subject Then Register as Maker and We Will Contact You..</div>
			<div class="link-btn" id="hire">
				<a href="join.php" class="theme-btn btn-style-one" target="_blank">Join Us</a>
			</div>
			
		</div>
		
	</section>


	<!-- Scroll Top Button -->
	<button class="scroll-top scroll-to-target" data-target="html">Top
	    
	</button>






</div>







	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/pagenav.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js'></script>
	<script src="js/mousemoveparallax.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>