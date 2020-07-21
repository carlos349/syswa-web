<?php include ("header.php"); ?>
	<link rel="stylesheet" type="text/css" href="views/css/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="views/css/contact_responsive.css">
	<input class="findHome" type="text" value="nohome" hidden >
	<input class="route" type="text" value="contactSection" hidden >
	<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background" style="background-image:url(views/images/slider_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Contacto</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".contact">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<div class="container">
			
			<!-- Google Map Container -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container w-100">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d808.1986365479837!2d-70.62006107712037!3d-33.48777709618665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d000e56caf31%3A0x76517dc45a0d0beb!2sCARLOS%20VALDOVINOS%2035!5e0!3m2!1ses-419!2sve!4v1595280714115!5m2!1ses-419!2sve" class="w-100" frameborder="0" style="border:0;height:70vh;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="row contact_row">
				<div class="col-lg-8">
					
					<!-- Reply -->

					<div class="reply">
						
						<div class="reply_title">Escribenos para información</div>
						<div class="reply_form_container">
							
							<!-- Reply Form -->

							<form id="reply_form" >
								<div>
									<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Nombre" required="required" data-error="Nombre es requerido." name="nombre">
									<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="Correo" required="required" data-error="Correo valido es requerido." name="correo">
									<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Asunto" required="required" data-error="Asunto es requerido." name="asunto">
									<textarea id="reply_form_message" class="text_field reply_form_message" name="mensaje"  placeholder="Mansaje" rows="4" required data-error="Es requerido, redactar un mensaje." name="mensaje"></textarea>
								</div>
								<div>
									<button id="reply_form_submit" type="button" class="reply_submit_btn trans_300" onclick="sendMail(3)">
										Enviar 
									</button>
								</div>

							</form>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- Contact Info -->

					<div class="contact_info">

						<div class="contact_title">Información de contacto</div>
						
						<div class="contact_info_container">

							<p>Apenas te comuniques con nosotros te llegará un correo, respondiendo tus inquietudes.</p>
							<div class="logo contact_logo" >
								<img style="width: 260px;height:60px;filter: drop-shadow(rgba(0, 0, 0, 0.2) 1px 1px 1px) drop-shadow(rgba(0, 0, 0, 0.2) 0px 0px 2px);margin-left:100px;" src="views/images/syswa-imagotipo-2.png" alt="Logo syswa">
							</div>

							<div class="address_container clearfix">
								<div class="contact_info_icon">i</div>
								<div class="contact_info_content">
									<ul style="float:right;">
										<li class="email" style="text-align:right;">syswainfo@gmail.com</li><br>
										<li class="city" style="text-align:right;">Aragua, venezuela</li>
										<li class="city" style="text-align:right;"><a target="_blank" href="https://wa.me/5804243203108">+58 0424 320 3108</a></li>
										<li class="city" style="text-align:right;">Santiago, Chile</li>
										<li class="city" style="text-align:right;"><a target="_blank" href="https://wa.me/56985826974">+56 9 8582 6974</a></li>
									</ul>									
								</div>
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

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDohfngoQ65h9UDcqjkHqLXX2Y616sqS7s&callback=initMap"
  type="text/javascript"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDohfngoQ65h9UDcqjkHqLXX2Y616sqS7s"></script>
<script src="views/js/CustomGoogleMapMarker.js"></script>
<script src="views/js/contact_custom.js"></script>

