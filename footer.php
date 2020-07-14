<!-- Footer -->

	<footer class="footer" >
		<div class="container" >
			<div class="row">
				<div class="col-lg-4">
					<!-- Footer Intro -->
					<div class="footer_intro">
						<!-- Logo -->
						<div class="logo footer_logo">
							<a href="http://syswa.net" >
								<img style="width: 260px;height:60px;filter: drop-shadow(rgba(0, 0, 0, 0.2) 1px 1px 1px) drop-shadow(rgba(0, 0, 0, 0.2) 0px 0px 2px);margin-left:-40px;" src="views/images/syswa-imagotipo-2.png" alt="Logo syswa">
							</a>
						</div>
						<p>Digitaliza tu idea.</p>
						<!-- Social -->
						<div class="footer_social">
							<ul>
								<li><a href="https://www.instagram.com/syswanet/?hl=es-la" target="_blank"> <i class="fab fa-instagram"> @syswanet</i> </a>
								</li> 
								<li><a href="https://www.linkedin.com/company/syswa" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
						<!-- Copyright -->
						<div class="footer_cr">Copyright &copy;Todos los derechos reservados </div>
					</div>
				</div>
				
				<!-- Footer Services -->
				<div class="col-lg-2">
					<div class="footer_col">
						<div class="footer_col_title">Servicios</div>
						<ul>
							<li><a href="servicios">Desarrollo Web</a></li>
							<li><a href="servicios">Diseño web</a></li>
							<li><a href="servicios">SYSWA Gestión</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-2">
					<div class="footer_col">
						<div class="footer_col_title">Menu</div>
						<ul>
							<li><a href="index">Inicio</a></li>
							<li><a href="nosotros">Nosotros</a></li>
							<li><a href="servicios">Servicios</a></li>
							<li><a href="portafolio">Portafolio</a></li>
							<li><a href="contacto">Contacto</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer About -->
				<div class="col-lg-2">
					<div class="footer_col">
						<div class="footer_col_title">Nosotros</div>
						<ul>
							<li><a href="nosotros">Nuestro equipo</a></li>
							<li><a href="nosotros">Historia</a></li>
							<li><a href="contacto">Soporte</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer About -->
				<div class="col-lg-2">
					<div class="footer_col">
						<div class="footer_col_title">Contacto</div>
						<ul>
							<li>syswainfo@gmail.com</li>
							<li>Aragua, venezuela</li>
							<li>+58 0424 320 3108</li>
							<li>Santiago, Chile</li>
							<li>+56 9 8582 6974</li>
						</ul>
					</div>
				</div>

				<!-- Footer Community -->
				

			</div>

			
		</div>
	</footer>
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
	<script src="views/js/portfolio_item_custom.js"></script>
	<script>
		function selectContract (plain){
			console.log(plain)
			document.getElementById('typeContract').value = plain
		}
		function changeCLP(){
			console.log('clp')
			$('.landing').text('120.000 CLP')
			$('.site').text('280.000 CLP')
			$('.commerce').text('400.000 CLP')
			$('.basic').text('Mensual 20.000 CL')
			$('.inventory').text('Mensual 25.000 CLP')
			$('.buttonType').text('CLP $')
		}
		function changeUSD(){
			console.log('clp')
			$('.landing').text('150 $')
			$('.site').text('350 $')
			$('.commerce').text('500 $')
			$('.basic').text('Mensual 25 $')
			$('.inventory').text('Mensual 30 $')
			$('.buttonType').text('USD $')
		}
		function sendMail(typeMail){
			var data = {}
			var dataOK = 'bad'
			if (typeMail == 1) {
				data = {
					to: $('.newsletter_email').val(),
					typeMail: typeMail
				}
				if ($('.newsletter_email').val() != '') {
					dataOK = 'ok'
				}
			}
			else if (typeMail == 2) {
				data = {
					to: $('.reply_form_mail').val(),
					typeMail: typeMail,
					firstName: $('.reply_form_firtName').val(),
					lastName: $('.reply_form_lastName').val(),
					number: $('.reply_form_code').val()+ ' '+$('.reply_form_number').val(),
					type: $('#typeContract').val()
				}
				if ($('.reply_form_firtName').val() != '' && $('.reply_form_lastName').val() != '' && $('.reply_form_number').val() != '' && $('.reply_form_mail').val() != '') {
					dataOK = 'ok'
				}
			}
			else {
				data = {
					to: $('.reply_form_email').val(),
					typeMail: typeMail,
					Name: $('.reply_form_name').val(),
					subject: $('.reply_form_subject').val(),
					message: $('.reply_form_message').val()
				}
				if ($('.reply_form_email').val() != '' && $('.reply_form_name').val() != '' && $('.reply_form_subject').val() != '' && $('.reply_form_message').val() != '') {
					dataOK = 'ok'
				}
			}
			if (dataOK == 'ok') {
				fetch('http://kkprettynails.syswa.net:4200/clients/sendEmailsSyswa', {
					method: 'POST',
					body: JSON.stringify(data),
					headers:{
						'Content-Type': 'application/json'
					}
				})
				.then(function(response) {
					return response.json();
				})
				.then(function(myJson) {
					if (myJson.status == "ok") {
						Swal.fire({
							icon: "success",
							title: "¡Enviado!",
							text: "Nos pondremos en contacto contigo lo antes posible.",
							showClass: {
								popup: "animate__animated animate__fadeInDown"
							},
							hideClass: {
								popup: "animate__animated animate__fadeOutUp"
							}
						}).then((result) => {
							window.location="http://syswa.net/servicios";
						})
					}
				})
				.catch(err => {
					console.log(err)
				})
			}else{
				Swal.fire({
					icon: "error",
					title: "Por favor, complete el formulario.",
					text: "Debe llenar todos los campos.",
					showClass: {
						popup: "animate__animated animate__fadeInDown"
					},
					hideClass: {
						popup: "animate__animated animate__fadeOutUp"
					}
				}).then((result) => {

				})
			}
			
		} 
	</script>
</div>

