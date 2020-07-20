
<?php include ("header.php"); ?>
<link rel="stylesheet" type="text/css" href="views/css/portfolio_styles.css">
<link rel="stylesheet" type="text/css" href="views/css/portfolio_responsive.css">
<input class="findHome" type="text" value="nohome" hidden >
<input class="route" type="text" value="portfoliotSection" hidden >
<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(views/images/slider_background.jpg)"></div>
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
							<li class="portfolio_category" data-filter=".desarrollo">SYSWA Web</li>
							<li class="portfolio_category" data-filter=".disenoweb">SYSWA Gestión</li>
							<li class="portfolio_category" data-filter=".branding">SYSWA Branding</li>
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
								<img style="height:50vh;" class="card-img-top" src="views/images/portfolio1.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo Web</div>
								<div class="card-title">kkprettynails.cl</div>
								<div class="card-text">Desarrollo de un sitio web.</div>
								<div class="card-link"><a href="kkprettynails">Saber más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card desarrollo">
							<div class="card_image">
								<img class="card-img-top" src="views/images/portfolio2.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo web</div>
								<div class="card-title">albaven.com</div>
								<div class="card-text">Desarrollo de un sitio web.</div>
								<div class="card-link"><a href="albaven">Saber más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card branding">
							<div class="card_image">
								<img class="card-img-top" src="views/images/bg_logo_1.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño de logo</div>
								<div class="card-title">Mark Reder Yera</div>
								<div class="card-text">Diseño de un Logotipo.</div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card branding">
							<div class="card_image">
								<img class="card-img-top" src="views/images/bg_logo_2.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño de logo</div>
								<div class="card-title">El chanchito 11</div>
								<div class="card-text">Diseño de un Imagotipo.</div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card branding">
							<div class="card_image">
								<img class="card-img-top" src="views/images/bg_logo_3.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño de logo</div>
								<div class="card-title">Crema & Azucar</div>
								<div class="card-text">Diseño de un Isologo.</div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card branding">
							<div class="card_image">
								<img class="card-img-top" src="views/images/bg_design.png" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño para Redes Sociales</div>
								<div class="card-title">Diseños en general</div>
								<div class="card-text">Creación de imagenes para redes sociales.</div>
							</div>
						</div>
						

						<!-- Portfolio Item -->
						<!-- <div class="card desarrollo">
							<div class="card_image">
								<img style="height:50vh;" class="card-img-top" src="views/images/portfolio3.png" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo web</div>
								<div class="card-title">guvenca.com.ve</div>
								<div class="card-text">Desarrollo de un sitio web.</div>
								<div class="card-link"><a href="miningllc">Saber más</a></div>
							</div>
						</div> -->

						<!-- Portfolio Item -->
						<div class="card disenoweb">
							<div class="card_image">
								<img style="height:50vh;" class="card-img-top" src="views/images/portfolio4.png" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Sistema SYSWA Gestión</div>
								<div class="card-title">tuempresa.syswa.net</div>
								<div class="card-text">
								<i class="fa fa-check" style="color:green"></i> Sistema administrativo, para negocios orientados a afrecer servicios. <br> 
								<i class="fa fa-check" style="color:green"></i> Sistema de agendamiento y gestion de horarios para los profesionales de tu negocio. <br>
								<i class="fa fa-check" style="color:green"></i> Sistema de inventario y venta totalmente intuitivo, para que gestiones tu negocio como todo un profesional.
								</div>
								<div class="card-link"><a href="gestion">Saber más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<!-- <div class="card desarrollo">
							<div class="card_image">
								<img class="card-img-top" src="views/images/portafolio2.png" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo web</div>
								<div class="card-title">guvenca.com.ve</div>
								<div class="card-text">Desarrollo de un sitio web.</div>
								<div class="card-link"><a href="item">Saber más</a></div>
							</div>
						</div> -->

					

					</div>
						
				</div>
			</div>
		</div>
	</div>

	<?php include ("footer.php") ?>