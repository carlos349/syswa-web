<link rel="stylesheet" type="text/css" href="views/css/contact_styles.css">
<link rel="stylesheet" type="text/css" href="views/css/contact_responsive.css">

<div class="super_container">
	<input class="findHome" type="text" value="nohome" hidden >
	<?php include ("header.php"); ?>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background" style="background-image:url(views/images/blog_background.jpg)"></div>
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
						<div class="map_container">
							<div id="map"></div>
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

							<form id="reply_form" action="post">
								<div>
									<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Nombre" required="required" data-error="Name is required.">
									<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="Correo" required="required" data-error="Valid email is required.">
									<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Asunto" required="required" data-error="Subject is required.">
									<textarea id="reply_form_message" class="text_field reply_form_message" name="message"  placeholder="Mansaje" rows="4" required data-error="Please, write us a message."></textarea>
								</div>
								<div>
									<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">
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

							<div class="logo contact_logo" >
								<a style="background-color: #1b0d37;padding-right: 15px;padding-left: 15px;" href="#">K<span>Wua</span></a>
							</div>
							<p>Apenas te comuniques con nosotros te llegará un correo, respondiendo tus inquietudes.</p>

							<div class="address_container clearfix">
								<div class="contact_info_icon">i</div>
								<div class="contact_info_content">
									<ul>
										
										<li class="city">Cagua, aragua</li>
										<li class="phone">0424 320 3108</li>
										<li class="email">info@korwa.com</li>
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="views/js/CustomGoogleMapMarker.js"></script>
<script src="views/js/contact_custom.js"></script>

