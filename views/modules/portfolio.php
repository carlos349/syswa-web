<link rel="stylesheet" type="text/css" href="views/css/portfolio_styles.css">
<link rel="stylesheet" type="text/css" href="views/css/portfolio_responsive.css">

<div class="super_container">
	<input class="findHome" type="text" value="nohome" hidden >
	<?php include ("header.php"); ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(views/images/portfolio_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Portafolio</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".portfolio">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Portfolio -->

	<div class="portfolio">
		
		<div class="container">
			<div class="row">
				
				<div class="col">
					<div class="portfolio_categories button-group filters-button-group">
						<ul>
							<li class="portfolio_category active is-checked" data-filter="*">Todos</li>
							<li class="portfolio_category" data-filter=".desarrollo">Desarrollo web</li>
							<li class="portfolio_category" data-filter=".disenoweb">Diseño web</li>
							<li class="portfolio_category" data-filter=".grafico">Diseño gráfico</li>
							<li class="portfolio_category" data-filter=".logos">Logos</li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col">
					
					<div class="portfolio_items product-grid">

						<!-- Portfolio Item -->
						<div class="card desarrollo">
							<div class="card_image">
								<img class="card-img-top" src="views/images/portafolio1.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo Web</div>
								<div class="card-title">Creamos el código de tu sitio web</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="item">Saber más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card disenoweb">
							<div class="card_image">
								<img class="card-img-top" src="views/images/portafolio2.png" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño web</div>
								<div class="card-title">Creamos diseño de tu sitio web.</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="item">Saber más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card grafico">
							<div class="card_image">
								<img class="card-img-top" src="views/images/portafolio3.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño gráfico</div>
								<div class="card-title">Creamos los diseños que desees</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="item">Saber más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card logos">
							<div class="card_image">
								<img class="card-img-top" src="views/images/portafolio2.png" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Logo</div>
								<div class="card-title">Creacion de logos</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="item">Saber más</a></div>
							</div>
						</div>

					

					</div>
						
				</div>
			</div>
		</div>
	</div>

	<?php include ("footer.php") ?>

<script src="views/js/jquery-3.2.1.min.js"></script>
<script src="views/css/bootstrap4/popper.js"></script>
<script src="views/css/bootstrap4/bootstrap.min.js"></script>
<script src="views/plugins/greensock/TweenMax.min.js"></script>
<script src="views/plugins/greensock/TimelineMax.min.js"></script>
<script src="views/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="views/plugins/greensock/animation.gsap.min.js"></script>
<script src="views/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="views/plugins/slick-1.8.0/slick.js"></script>
<script src="views/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="views/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="views/plugins/easing/easing.js"></script>
<script src="views/js/custom.js"></script>
<script src="views/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="views/js/portfolio_custom.js"></script>