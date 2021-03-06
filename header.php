<?php require_once 'send.php'; ?>
<!-- Header -->
<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>Syswa - Digitaliza tu idea</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="RanGO Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="views/css/bootstrap4/bootstrap.min.css">
		<link href="views/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="views/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="views/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="views/plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="views/plugins/slick-1.8.0/slick.css">
		<link href="views/plugins/icon-font/styles.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="views/css/main_styles.css">
		<link rel="stylesheet" type="text/css" href="views/css/responsive.css">	
		<link rel="icon" href="views/images/icons/favicon.ico" type="image/ico">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '226477811671031'); 
			fbq('track', 'PageView');
		</script>
		<noscript>
			<img height="1" width="1" 
			src="https://www.facebook.com/tr?id=226477811671031&ev=PageView
			&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
		<!-- Linkedin conversations Code -->
		<script type="text/javascript"> _linkedin_partner_id = "2322666"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); 
		</script>
		<script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); 
		</script> 
		<noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2322666&fmt=gif" /> 
		</noscript>
		<!-- End Linkedin conversations Code -->
	</head>

	<body>
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200" style="z-index:1000">
		
		<!-- Logo -->
		<div class="logo mr-auto">
			<a href="index" >
			<img class="responsiveLogo trans_300" src="views/images/syswa-imagotipo-2.png" alt="Logo syswa">
			</a>
		</div>

		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
				<li class="active allSections" id="indexSection"><a href="index">Inicio</a></li>
				<li class="allSections" id="aboutSection"><a href="nosotros">Nosotros</a></li>
				<li class="allSections" id="serviceSection"><a href="servicios">Servicios</a></li>
				<li class="allSections" id="portfoliotSection"><a href="portafolio">Portafolio</a></li>
				<li class="allSections" id="contactSection"><a href="contacto">Contacto</a></li>
			</ul>
			
			<!-- Search -->
			<!-- <div class="search">
				<div class="search_content d-flex flex-column align-items-center justify-content-center">
					<div class="search_button d-flex flex-column align-items-center justify-content-center">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
							<g>
								<g>
									<path class="search_path" fill="#FFFFFF" d="M89.354,10.609c-14.144-14.146-37.157-14.146-51.301,0c-6.852,6.853-10.625,15.964-10.625,25.655
										c0,8.829,3.132,17.174,8.87,23.771l-4.32,4.321l-4.402-4.403c-0.482-0.482-1.137-0.754-1.819-0.754s-1.337,0.271-1.819,0.754
										L3.31,80.584c-2.148,2.147-3.331,5.004-3.331,8.042s1.183,5.895,3.331,8.042C5.457,98.817,8.313,100,11.35,100
										c3.038,0,5.894-1.184,8.041-3.331l20.627-20.631c0.482-0.482,0.753-1.137,0.753-1.819s-0.271-1.337-0.753-1.819l-4.403-4.403
										l4.322-4.322c6.795,5.902,15.28,8.855,23.766,8.855c9.289,0,18.579-3.537,25.65-10.61c6.852-6.853,10.625-15.963,10.625-25.654
										C99.979,26.573,96.205,17.462,89.354,10.609z M15.753,93.029c-1.176,1.177-2.739,1.824-4.403,1.824
										c-1.663,0-3.227-0.648-4.403-1.824c-1.176-1.176-1.823-2.74-1.823-4.403s0.647-3.228,1.824-4.403L18.458,72.71l8.805,8.807
										L15.753,93.029z M30.902,77.878l-8.805-8.807l3.659-3.66l8.806,8.808L30.902,77.878z M85.715,58.28
										c-12.137,12.14-31.886,12.14-44.023,0c-5.88-5.881-9.118-13.699-9.118-22.016c0-8.316,3.238-16.135,9.118-22.016
										c6.069-6.069,14.041-9.104,22.012-9.104c7.972,0,15.943,3.035,22.013,9.104c5.88,5.881,9.117,13.699,9.117,22.016
										S91.596,52.399,85.715,58.28z"></path>
								</g>
							</g>
							<g>
								<g>
									<path class="search_path" fill="#FFFFFF" d="M81.47,18.495c-9.797-9.798-25.736-9.798-35.533,0c-9.796,9.798-9.796,25.741,0,35.539
										c4.898,4.898,11.333,7.349,17.766,7.349c6.435,0,12.868-2.45,17.767-7.349l0,0C91.266,44.235,91.266,28.293,81.47,18.495z
										 M77.831,50.395c-7.79,7.791-20.466,7.791-28.256,0c-7.79-7.792-7.79-20.469,0-28.261c3.896-3.896,9.011-5.843,14.128-5.843
										c5.116,0,10.233,1.948,14.128,5.843C85.621,29.925,85.621,42.603,77.831,50.395z"></path>
								</g>
							</g>
							<g>
								<g>
									<path class="search_path" fill="#FFFFFF" d="M73.283,26.683c-5.282-5.283-13.877-5.283-19.16,0c-1.004,1.005-1.004,2.634,0,3.639
										c1.005,1.005,2.634,1.005,3.639,0c3.276-3.276,8.607-3.276,11.884,0c0.502,0.503,1.16,0.754,1.818,0.754
										c0.659,0,1.317-0.251,1.819-0.754C74.288,29.317,74.288,27.688,73.283,26.683z"></path>
								</g>
							</g>
						</svg>
					</div>

					<form id="search_form" class="search_form bez_1">
						<input type="search" class="search_input bez_1">
					</form>

				</div>
			</div> -->
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200" style="color:#172b4d;"></i>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200" ></i></div>
			<ul class="menu_mm">
				<li class="menu_mm allSections active" id="indexSectionPhone"><a href="index">Inicio</a></li>
				<li class="menu_mm allSections" id="aboutSectionPhone"><a href="nosotros">Nosotros</a></li>
				<li class="menu_mm allSections" id="serviceSectionPhone"><a href="servicios">Servicios</a></li>
				<li class="menu_mm allSections" id="portfoliotSectionPhone"><a href="portafolio">Portafolio</a></li>
				<li class="menu_mm allSections" id="contactSectionPhone"><a href="contacto">Contacto</a></li>
			</ul>
		</div>
	</div>