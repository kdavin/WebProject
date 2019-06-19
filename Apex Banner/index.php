<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>APEX BANNER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/slide.css" />
		<link href="css/CharacterStyle.css" rel="stylesheet" type="text/css">


		<style>
			@font-face{
				font-family: 'SLANT';
				src:url("assets/fonts/SLANT.ttf")
			}
			@import url(https://fonts.googleapis.com/css?family=Open+Sans);

			*{
			  margin:0;
			  padding:0;
			  box-sizing: border-box;
			  font-family: 'Open Sans', sans-serif;
			}

			.container{
			  padding: 2rem;

			}
			.gallery{
			  width: 100%;
			  max-width: 2000px;
			  min-height: 50vh;
			  margin: 2rem auto;

			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;



				-webkit-box-pack: center;
			  -webkit-justify-content: center;
				-ms-flex-pack: center;
				justify-content: center;
			}

			.gallery-item{
			  box-shadow: 2px 2px 8px -1px rgb(228, 13, 13);
			  width: 300px;
			  height: 1000px;
			  margin: 10px;
			  background: #000;
			  position: relative;
			  cursor: pointer;
			  overflow: hidden;
			}

			.gallery-item-image{
			  position: absolute;
			  width: 1000px;
			  height: 650px;
			  background: rgb(228, 13, 13);
			  z-index:20;
			  -webkit-transition:all .5s ease;
			  transition: all .5s ease;
			  bottom:0;
			  overflow: hidden;

			}

			.gallery-item:hover .gallery-item-image{
			  bottom: 300px;

			}

			.gallery-item-description{
			  color:white;
			  font-size: .8rem;
			  width: 100%;
			  height: 300px;
			  padding: .5rem .8rem;
			  background: rgb(0, 0, 0);
			  position:absolute;
			  bottom:0;
			}

			/* TopButton 스타일 */
			a {
			padding:15px;
			display:block;
		}

		.diamond {
			width: 0;
			height: 0;
			border: 15px solid transparent;
			border-bottom-color: #D4CEAC;
			position: relative;
			top: -15px;
			display: block;
			text-indent: -9999px;
			margin: 35px auto 45px;
			clear: both;
			transition: all 0.4s ease;
		}

		.diamond:hover {
			border-bottom-color: #806868;
			top:-20px;
		}

		.diamond:after {
			content: '';
			position: absolute;
			left: -15px;
			top: 15px;
			width: 0;
			height: 0;
			border: 15px solid transparent;
			border-top-color: #D4CEAC;
			transition: all 0.1s linear;
		}

		.diamond:hover:after {
			content: '';
			position: absolute;
			left: -15px;
			top: 0;
			width: 0;
			height: 0;
			border: 15px solid transparent;
			border-bottom-color: #806868;
		}

		/* 화살표 style */

		.next {
         position: absolute;
         border: solid transparent;
         border-width: 10px 10px 0 0;
         padding: 25px; /* Arrow Size */
         box-shadow: -10px 10px 0 0 #808080  inset;
         -webkit-box-shadow: -10px 10px 0 0 #808080 inset;
         -webkit-transform: rotate(45deg);
        /* margin-left: 20%; margin-top: 50px; */
  }
  .prev {
  	    position: absolute;
  	    border: solid transparent;
  	    border-width: 0px 0px 10px 10px;
  	    padding: 25px; /* Arrow Size */
        box-shadow: 1px -1px 0 0 #808080 inset;
        -webkit-box-shadow: -10px 10px 0 0 #808080 inset;
  	    -webkit-transform: rotate(225deg);
      /*  margin: 50px; */
  }



		</style>

	</head>
	<body class="is-preload">
		<!-- Header -->
		<div>
         <?php
          require 'menu.php'
         ?>
      </div>

		<!-- Banner -->
			<section id="banners">
				<div class='parent'>
					<div class='slider'>

					 <button type="button" id='right' class='right' name="button">
						 <!-- 만든 오른쪽버튼
						  <a id="right"class="next" href="#" title="next"></a> -->
					 </button>



					 <button type="button" id='left' class='left' name="button">
						 <!-- 만든 왼쪽버튼
						 	 <a id="left" class="prev" href="#" title="previous"></a> -->
					 </button>


					 <div id='slide1' class='slide1 up1' style="font-family:SLANT; color: rgb(160, 52, 52)"><br><br>APEX BANNER</div>
					 <div id='slide2' class='slide2'></div>
					 <div id='slide3' class='slide3'></div>
					 <div id='slide4' class='slide4'></div>
					</div>
				 </div>
			</section>

		<!-- Highlights -->
			<section>
				<div class="container">
					<div class="gallery">
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Bloodhound.php'">
						  <img src="images/bloodhound.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">BLOODHOUND</h3>
						  <h5 style="color: white">“I am the hunter the Gods have sent.”</h5>
						</div>
					  </div>

					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Gibraltar.php'">
						  <img src="images/gibraltar.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">GIBRALTAR</h3>
						  <h5 style="color: white">“Try to move me; it'll be fun.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Lifeline.php'">
						  <img src="images/lifeline.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">LIFELINE</h3>
						  <h5 style="color: white">“Never quit. That's how you win.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Pathfinder.php'">
						  <img src="images/pathfinder.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">PATHFINDER</h3>
						  <h5 style="color: white">“Losing isn't fun. That's why I don't do it.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Wraith.php'">
						  <img src="images/wraith.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">WRAITH</h3>
						  <h5 style="color: white">“There’s a thin line between life and death. You’ll find me there.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Bangalore.php'">
						  <img src="images/bangalore.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">BANGALORE</h3>
						  <h5 style="color: white">“Name the weapon--I'll still beat you.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Caustic.php'">
						  <img src="images/coustic.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">COUSTIC</h3>
						  <h5 style="color: white">“I don't concern myself with the ambitions of insects.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Mirage.php'">
						  <img src="images/mirage.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">MIRAGE</h3>
						  <h5 style="color: white">“I don't take myself too seriously. I don't take myself anywhere. I need to get out more.”</h5>
						</div>
					  </div>
					  <div class="gallery-item">
						<div class="gallery-item-image" style="height: 1000px;" onclick="location.href='Character/Octane.php'">
						  <img src="images/octain.png "></div>
						<div class="gallery-item-description">
						  <h3 style="font-family:SLANT; color: red">OCTAIN</h3>
						  <h5 style="color: white">“Whoa . . . what a rush!”</h5>
						</div>
					  </div>
					</div>
				  </div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2 style="font-family:SLANT;">PLAY YOUR LEGEND</h2>
					<p>Take your victory with your legends</p>
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2 style="font-family:SLANT;">CATEGORY</h2>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
									<p style="font-family:SLANT;">CHARACTER</p>
									<br>
									<a href="Character/Bloodhound.php">- Bloodhound</a>
									<a href="Character/Bangalore.php">- Bangalore</a>
									<a href="Character/Caustic.php">- Caustic</a>
									<a href="Character/Gibraltar.php">- Gibraltar</a>
									<a href="Character/Lifeline.php">- Lifeline</a>
									<a href="Character/Mirage.php">- Mirage</a>
									<a href="Character/Octain.php">- Octain</a>
									<a href="Character/Pathfinder.php">- Pathfinder</a>
									<a href="Character/Wraith.php">- Wraith</a>
								<div class="author">
								</div>
							</div>
						</section>
						<section>
							<div class="content">
									<p style="font-family:SLANT;">WEAPON</p>
									<br>
									<a href="weaponPage.php">- WeaponPage</a>
								<div class="author">
								</div>
							</div>
						</section>
						<section>
							<div class="content">
									<p style="font-family:SLANT;">ITEMS</p>
									<br>
									<a href="itemPage.php">- ItemPage</a>
								<div class="author">
								</div>
							</div>
						</section>
						<section>
							<div class="content">
									<p style="font-family:SLANT;">MAP</p>
									<div>
										<a href="mapPage.php"><img src="images/map.jpg" width="100%" height="100%"></a>
									</div>
								<div class="author">
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			

		<!-- Top -->
			<div class="top">
				<a href="#">  <a href="#top"><span class="diamond">back to top</span></a>	</a>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/slider.js"></script>
			<script src="js/js.js"></script>

	</body>
</html>
