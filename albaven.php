<?php include ("header.php"); ?>
	<link rel="stylesheet" type="text/css" href="views/css/portfolio_item_styles.css">
	<link rel="stylesheet" type="text/css" href="views/css/portfolio_item_responsive.css">
	<input class="findHome" type="text" value="nohome" hidden >
	<input class="route" type="text" value="portfoliotSection" hidden >
	<div class="super_container">
    <!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(views/images/slider_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Albaven</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".syswaGestion">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
    </div>

    <div class="syswaGestion">
		<div class="portfolio_slider_container">

			<!-- Portfolio Slider -->
			<div class="portfolio_slider mt-5">
				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(views/images/portfolio2.png); width: 90%; margin-left: 5%; " ></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(views/images/portfolio8.png); width: 90%; margin-left: 5%;" ></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(views/images/portfolio9.png); width: 90%; margin-left: 5%; " ></div>
				</div>
			</div>
		</div>

		<div class="portfolio_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 portfolio_title_container">
						<div class="portfolio_category">Desarrollo web</div>
						<h2 class="portfolio_title">albaven.com</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 order-lg-1 order-2">
						<p class="portfolio_text" style="text-align: justify;">Desarrollo de un sitio web de 3 vistas, siempre adaptandonos a las necesidades de nuestros clientes. <br><br>
							Compañía venezolana, proveedora de rodamientos industriales, bandas transportadoras, cauchos, productos navales y de generación eléctrica.
						</p>
					</div>
					<div class="col-lg-4 order-lg-3 order-1">
						<div class="portfolio_info_box">

							<ul class="info_box_item">
								<li class="info_box_title">Creado por</li>
								<li class="info_box_content">SYSWA</li>
							</ul>

							<ul class="info_box_item">
								<li class="info_box_title">SYSWA WEB</li>
								<li class="info_box_content">Desarrollo web</li>
							</ul>

							<ul class="info_box_item">
								<li class="info_box_title">Fecha de creación</li>
								<li class="info_box_content">Novimbre 2018</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<?php include ("footer.php") ?>