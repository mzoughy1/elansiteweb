<!DOCTYPE HTML>

<html>
	<head>
		<title>Elan By Connect</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>  
	<body class="is-preload">
   
		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Elan By Connect</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav --> 
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Acueil</a></li>
					<li><a href="elements.html">Contactez Nous</a></li>
					<li><a href="generic.html">Qui Sommes Nous</a></li>
					<li><a href="partner.html">Nos Entreprise d'Entrainement</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					
				<!--<b><b><h1>Elan By Connect</h1></b></b>-->
					<br><br>
					<!--<p>A training company that will lead you to the futur</p>-->
				</div>
				<video autoplay  muted playsinline src="images/banner2.mp4"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Elan by CONECT</h2>
						<p>Elan est une entreprise de formation par la pratique qui recrée à l’identique toutes les activités commerciales d’une entrepriseréelle.Elle développe et vend dans le marché protégé d’Europen-Pen International divers produits proposés par ses marraines.Une marraine est une entreprise qui autorise contractuellement la vente virtuelle de ses produits ou services sur un marché international et l’utilisation de son image (logos, etc.) dans le cadre de l’activité de l’ee.</p>
					</header>
				<div class="highlights">
						
				</div>
				
				<h2 style="text-align: center;">Actualités</h2>
			
			</section>
			<a href="partner.html">
		    	<div class=container>
					
					 
				 <div id="proparallax">
					<?php
					$dbname='elansite';
					$con=mysqli_connect("localhost","root","",$dbname);
					$req= "SELECT id,img FROM images ORDER BY id  ;";
					$res= mysqli_query($con, $req);
                    
				while($row=mysqli_fetch_array($res)){
					$one = 'actualite/'.$row['img'];
					$two = 'actualite/'.$row['img'];
					$tree = 'actualite/'.$row['img'];
				} 
				
					echo '<img class="one" src="'.$one.'"/>'; 
					echo '<img class="two" src="'.$two.'"/>'; 
				    echo '<img class="three" src="'.$tree.'"/>'; 
					
				
					?>
				</div>
			</div>
				</a>
			<br><br><br><br><br><br>

		<!-- CTA -->
		<h2 style="text-align: center;">Nos Partenaires</h2>
		<section>
			<div>
		<div class="grow">
       
      <div>

	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ee.png" width="190px" height="200px"/>

   <img src="images/sc.png" width="200px" height="200px"/>


   <img src="images/tp.png" width="200px" height="200px" />


   <img src="images/wt.png" width="200px"  height="200px"/>


   <img src="images/mr.png" width="200px" height="200px"/>


   <img src="images/hv.png" width="200px" height="200px"/>
      </div>
</div>
			</div>
		</section>	

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>L’équipe Des Encadrants</h2>
						
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Manager Elan </p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic01.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Sawssen </strong> <span>Manager</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>someone that works in Elan</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p class="credit">- <strong>John Doe</strong> <span>DEV WEB </span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Anotherone that works in Elan</p>
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="images/pic02.jpg" alt="" />
									</div>
									<p class="credit">- <strong>Janet Smith</strong> <span>Marketing</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<div class="content">
					<section>
						<h3>Contact Us :</h3>
						<p>15, Rue des Entrepreneurs, 2035 Charguia 2 2035 Ariana
						 <br>+ 216 71 941 333
						 <br>direction@elan.tn</p>
					</section>
					<section>
						<h4>Navigation</h4>
						<ul class="alt">
							<li><a href="index.html">accueil</a></li>

							<li><a href="generic.html">About Us</a></li>
							<li><a href="elements.html">Contact Us</a></li>
							<li><a href="partner.html">Nos EE</a></li>

						</ul>
					</section>
					<section>
						<h4>Follow Us:</h4>
						<ul class="plain">

							<li><a href="https://www.linkedin.com/in/cmpes/"><i class="icon fa-linkedin">&nbsp;</i>LinkedIn</a></li>
							<li><a href="https://www.facebook.com/Elan-by-CONECT-Entreprise-dentra%C3%AEnement-546724438806098"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
							<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
						</ul>
					</section>
				</div>
				<div class="copyright">
					&copy; Elan By Connect . Mzoughy &hearts;
				</div>
			</div>
		</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>