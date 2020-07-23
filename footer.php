<!-- Footer -->

	<footer class="footer" >
		<div class="container" >
			<div class="row">
				<div class="col-lg-3">
					<!-- Footer Intro -->
					<div class="footer_intro">
						<!-- Logo -->
						<div class="logo footer_logo" style="margin-bottom:5px;">
							<a href="http://syswa.net" style="color:#172b4d;">
								SYSWA 
							</a>
						</div>
						<p>Digitaliza tu idea.</p>
						<!-- Social -->
						<div class="footer_social">
							<ul>
								<li>
									<a href="https://www.instagram.com/syswanet/?hl=es-la" target="_blank"> <i style="font-size:22px;color:#000;" class="fab fa-instagram"></i> </a>
								</li> 
								<li>
									<a href="https://www.linkedin.com/company/syswa" target="_blank"><i style="font-size:22px;color:#000;" class="fab fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/syswa" target="_blank"><i style="font-size:22px;color:#000;" class="fab fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
						<!-- Copyright -->
						
					</div>
				</div>
				
				<!-- Footer Services -->
				<div class="col-lg-2">
					<div class="footer_col">
						<div class="footer_col_title">Servicios</div>
						<ul>
							<li><a href="servicios">SYSWA WEB</a></li>
							<li><a href="servicios">SYSWA GESTIÓN</a></li>
							<li><a href="servicios">SYSWA BRANDING</a></li>
						</ul>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-2">
					<div class="footer_col">
						<div class="footer_col_title">Menú</div>
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
				<input type="hidden" value="CLP" id="typeCurrencyBranding">
				<!-- Footer About -->
				<div class="col-lg-3">
					<div class="footer_col">
						<div class="footer_col_title">Contacto</div>
						<ul>
							<li style="font-size: 16px;font-weight: 400;color: #909090;"><i style="color:#000;" class="fa fa-map-marker-alt"></i>&nbsp;  Santiago, Chile</li>
							<li style="font-size: 16px;font-weight: 400;color: #909090;"><i style="color:#000;" class="fa fa-envelope"></i> <a href="http://syswa.net/contacto#reply_form_container">&nbsp; syswainfo@gmail.com</a></li>
							<li style="font-size: 16px;font-weight: 400;color: #909090;"><i style="color:#000;" class="fab fa-whatsapp"></i><a target="_blank" href="https://wa.me/56985826974"> &nbsp; +56 9 8582 6974</a></li>
						</ul>
					</div>
				</div>
				<div class="footer_cr mx-auto">Copyright &copy;Todos los derechos reservados </div>
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
		function addSelector(Selector){
			$('.portfolio_category').removeClass('thisSelect')
			$('#'+Selector+'').addClass('thisSelect')
		}
		function selectContract (plain){
			console.log(plain)
			document.getElementById('typeContract').value = plain
		}
		function changeCLP(){
			console.log('clp')
			changeService('logo')
			$('#typeCurrencyBranding').val('CLP')
			$('.data_section .price_section').text('39.990 CLP')
			$('.data_section .price_web_section').text('120.000 CLP')
			$('.data_section .price_plain_section').text('Mensual 20.000 CLP')
			$('.usd').hide('fast')
			$('.clp').show('slow')
		}
		function changeUSD(){
			console.log('clp')
			changeService('logo')
			$('#typeCurrencyBranding').val('USD')
			$('.data_section .price_section').text('50,00 $')
			$('.data_section .price_web_section').text('150,00 $')
			$('.data_section .price_plain_section').text('Mensual 25 $')
			$('.clp').hide('fast')
			$('.usd').show('slow')
		}
		function maxDigit(){
			if ($('.reply_form_number').length >= 15) {
				$('.reply_form_number').disabled('true')
			}
		}
		function routeIndicator(){
			const route = $('.route').val()
			if (route == 'serviceSection') {
				$('#serviceSection').css({'border-bottom': 'solid 2px #172b4d'})
				$('.allSections').removeClass('active')
				$('#serviceSection').addClass('active')
			}else if(route == 'contactSection'){
				$('#contactSection').css({'border-bottom': 'solid 2px #172b4d'})
				$('.allSections').removeClass('active')
				$('#contactSection').addClass('active')
			}else if(route == 'aboutSection'){
				$('#aboutSection').css({'border-bottom': 'solid 2px #172b4d'})
				$('.allSections').removeClass('active')
				$('#aboutSection').addClass('active')
			}else if(route == 'portfoliotSection'){
				$('#portfoliotSection').css({'border-bottom': 'solid 2px #172b4d'})
				$('.allSections').removeClass('active')
				$('#portfoliotSection').addClass('active')
			}else{
				$('#indexSection').css({'border-bottom': 'solid 2px #172b4d'})
				$('.allSections').removeClass('active')
				$('#indexSection').addClass('active')
			}
		}
		function changeTypePlain(plain){
			if (plain == 'basic') {
				$('.typePlainService').val(plain)
				$('#imagePlain').css({"background-image": "url('views/images/bg_basic_1.png')"})
				$('#imagePlain ul li').css({'border': 'none'})
				$('.basicLi').css({'border-bottom': 'solid 3px azure'})
				$('.titlePlain').text('Gestiona tu negocio con nuestro plan básico')
				$('.pInventory').hide(1)
				$('.pBasic').show('slow')
				$('.data_section h3').text('Plan de gestión básica')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_plain_section').text('Mensual 20.000 CLP')
				}else{
					$('.data_section .price_plain_section').text('Mensual 25,00 $')
				}
				$('#typeContractPlain').val('Plan gestión básico')
			}
			if (plain == 'inventory') {
				$('.typePlainService').val(plain)
				$('#imagePlain').css({"background-image": "url('views/images/bg_inventory_1.png')"})
				$('#imagePlain ul li').css({'border': 'none'})
				$('.invetoryLi').css({'border-bottom': 'solid 3px azure'})
				$('.titlePlain').text('Gestiona tu negocio con nuestro plan control de inventario')
				$('.pBasic').hide(1)
				$('.pInventory').show('slow')
				$('.data_section h3').text('Plan de gestión de control de inventario')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_plain_section').text('Mensual 25.000 CLP')
				}else{
					$('.data_section .price_plain_section').text('Mensual 30,00 $')
				}
				$('#typeContractPlain').val('Plan gestión Control de inventario')
			}
		}
		function changeTypeWeb(web){
			$('.countWebBackground').val(1)
			if (web == 'landing') {
				$('.typeWebService').val(web)
				$('#imageWeb').css({"background-image": "url('views/images/bg_landing_1.png')"})
				$('#imageWeb ul li').css({'border': 'none'})
				$('.landingLi').css({'border-bottom': 'solid 3px azure'})
				$('.titleWeb').text('Crea una Landing page')
				$('.pSite').hide(1)
				$('.pEcommerce').hide(1)
				$('.pLanding').show('slow')
				$('.data_section h3').text('Landing page')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_web_section').text('120.000 CLP')
				}else{
					$('.data_section .price_web_section').text('150,00 $')
				}
				$('#typeContractWeb').val('Landing page')
			}
			if (web == 'site') {
				$('.typeWebService').val(web)
				$('#imageWeb').css({"background-image": "url('views/images/bg_site_1.png')"})
				$('#imageWeb ul li').css({'border': 'none'})
				$('.siteLi').css({'border-bottom': 'solid 3px azure'})
				$('.titleWeb').text('Crea un Sitio Web')
				$('.pLanding').hide(1)
				$('.pEcommerce').hide(1)
				$('.pSite').show('slow')
				$('.data_section h3').text('Sitio web')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_web_section').text('280.000 CLP')
				}else{
					$('.data_section .price_web_section').text('350,00 $')
				}
				$('#typeContractWeb').val('Sitio web')
			}
			if (web == 'ecommerce') {
				$('.typeWebService').val(web)
				$('#imageWeb').css({"background-image": "url('views/images/bg_ecommerce_1.png')"})
				$('#imageWeb ul li').css({'border': 'none'})
				$('.ecommerceLi').css({'border-bottom': 'solid 3px azure'})
				$('.titleWeb').text('Crea tu propia tienda en línea')
				$('.pLanding').hide(1)
				$('.pSite').hide(1)
				$('.pEcommerce').show('slow')
				$('.data_section h3').text('Sitio web E-commerce')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_web_section').text('400.000 CLP')
				}else{
					$('.data_section .price_web_section').text('500,00 $')
				}
				$('#typeContractWeb').val('Sitio web E-commerce')
			}
		}
		function changeImagesSites(){
			const type = $('.typeWebService').val()
			var countWebBackground = $('.countWebBackground').val()
			console.log(countWebBackground)
			if (type == 'landing') {
				if (countWebBackground == 1 || countWebBackground == 2) {
					var count = parseFloat(countWebBackground)+parseFloat(1)
					$('.countWebBackground').val(count)
					$('#imageWeb').css({"background-image": "url('views/images/bg_landing_"+count+".png')"})
					if (countWebBackground == 1) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#babfd1'})
						$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					}
					if (countWebBackground == 2) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_three').css({'color': '#babfd1'})
					}
				}else{
					var count = 1
					$('.countWebBackground').val(count)
					$('#imageWeb').css({"background-image": "url('views/images/bg_landing_"+count+".png')"})
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
				}
			}
			if (type == 'site') {
				if (countWebBackground == 1 || countWebBackground == 2) {
					var count = parseFloat(countWebBackground)+parseFloat(1)
					$('.countWebBackground').val(count)
					$('#imageWeb').css({"background-image": "url('views/images/bg_site_"+count+".png')"})
					if (countWebBackground == 1) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#babfd1'})
						$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					}
					if (countWebBackground == 2) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_three').css({'color': '#babfd1'})
					}
				}else{
					var count = 1
					$('.countWebBackground').val(count)
					$('#imageWeb').css({"background-image": "url('views/images/bg_site_"+count+".png')"})
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
				}
			}
			if (type == 'ecommerce') {
				if (countWebBackground == 1 || countWebBackground == 2) {
					var count = parseFloat(countWebBackground)+parseFloat(1)
					$('.countWebBackground').val(count)
					$('#imageWeb').css({"background-image": "url('views/images/bg_ecommerce_"+count+".png')"})
					if (countWebBackground == 1) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#babfd1'})
						$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					}
					if (countWebBackground == 2) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_three').css({'color': '#babfd1'})
					}
				}else{
					var count = 1
					$('.countWebBackground').val(count)
					$('#imageWeb').css({"background-image": "url('views/images/bg_ecommerce_"+count+".png')"})
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
				}
			}
		}
		function changeImages(){
			const type = $('.typePlainService').val()
			var countPlainBackground = $('.countPlainBackground').val()
			console.log(countPlainBackground)
			if (type == 'basic') {
				if (countPlainBackground == 1 || countPlainBackground == 2) {
					var count = parseFloat(countPlainBackground)+parseFloat(1)
					$('.countPlainBackground').val(count)
					$('#imagePlain').css({"background-image": "url('views/images/bg_basic_"+count+".png')"})
					if (countPlainBackground == 1) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#babfd1'})
						$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					}
					if (countPlainBackground == 2) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_three').css({'color': '#babfd1'})
					}
				}else{
					var count = 1
					$('.countPlainBackground').val(count)
					$('#imagePlain').css({"background-image": "url('views/images/bg_basic_"+count+".png')"})
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
				}
			}
			if (type == 'inventory') {
				if (countPlainBackground == 1 || countPlainBackground == 2) {
					var count = parseFloat(countPlainBackground)+parseFloat(1)
					$('.countPlainBackground').val(count)
					$('#imagePlain').css({"background-image": "url('views/images/bg_inventory_"+count+".png')"})
					if (countPlainBackground == 1) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#babfd1'})
						$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					}
					if (countPlainBackground == 2) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_three').css({'color': '#babfd1'})
					}
				}else{
					var count = 1
					$('.countPlainBackground').val(count)
					$('#imagePlain').css({"background-image": "url('views/images/bg_inventory_"+count+".png')"})
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
				}
			}
		}
		function changePlain(){
			const type = $('.typeService').val()
			var countBackgrounds = $('.countBackground').val()
			if (type == 'logo') {
				if (countBackgrounds == 1 || countBackgrounds == 2) {
					var count = parseFloat(countBackgrounds)+parseFloat(1)
					$('.countBackground').val(count)
					$('#imageBranding').css({"background-image": "url('views/images/bg_logo_"+count+".png')"})
					if (countBackgrounds == 1) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#babfd1'})
						$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					}
					if (countBackgrounds == 2) {
						$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
						$('.menu_apple .gray_three').css({'color': '#babfd1'})
					}
				}else{
					var count = 1
					$('.countBackground').val(count)
					$('#imageBranding').css({"background-image": "url('views/images/bg_logo_"+count+".png')"})
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
				}
			}
			if (type == 'design') {
				console.log(countBackgrounds)
				if (countBackgrounds == 1) {
					$('.countBackground').val(2)
					if ($('#typeCurrencyBranding').val() == 'CLP') {
						$('.data_section .price_section').text('39.990 CLP')
					}else{
						$('.data_section .price_section').text('50,00 $')
					}
					$('.titleDesign').hide(1)
					$('.titleDesigTwo').show('slow')
					$('.titleDesignThree').hide(1)
					$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_two').css({'color': '#babfd1'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					$('#typeContract').val('Diseño para redes sociales - Combo #2')
				}else if(countBackgrounds == 2){
					$('.countBackground').val(3)
					if ($('#typeCurrencyBranding').val() == 'CLP') {
						$('.data_section .price_section').text('79.990 CLP')
					}else{
						$('.data_section .price_section').text('100,00 $')
					}
					$('.titleDesign').hide(1)
					$('.titleDesigTwo').hide(1)
					$('.titleDesignThree').show('slow')
					$('.menu_apple .gray_one').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#babfd1'})
					$('#typeContract').val('Diseño para redes sociales - Combo #3')
				}else{
					$('.countBackground').val(1)
					if ($('#typeCurrencyBranding').val() == 'CLP') {
						$('.data_section .price_section').text('19.990 CLP')
					}else{
						$('.data_section .price_section').text('25,00 $')
					}
					$('.titleDesign').show('slow')
					$('.titleDesigTwo').hide(1)
					$('.titleDesignThree').hide(1)
					$('.menu_apple .gray_one').css({'color': '#babfd1'})
					$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
					$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
					$('#typeContract').val('Diseño para redes sociales - Combo #1')
				}
			}
		}
		function changeService(service){
			$('.countBackground').val(1)
			$('.titleDesigTwo').hide(1)
			$('.titleDesignThree').hide(1)
			$('.menu_apple .gray_one').css({'color': '#babfd1'})
			$('.menu_apple .gray_two').css({'color': '#d3d4d0'})
			$('.menu_apple .gray_three').css({'color': '#d3d4d0'})
			if (service == 'logo') {
				$('.typeService').val(service)
				$('#imageBranding').css({"background-image": "url('views/images/bg_logo_1.png')"})
				$('#imageBranding ul li').css({'border': 'none'})
				$('.logoLi').css({'border-bottom': 'solid 3px azure'})
				$('.titleDesign').hide(1)
				$('.titleLogo').show('slow')
				$('.pDesign').hide(1)
				$('.pLogo').show('slow')
				$('.data_section h3').text('Diseños & refrescamiento de logo')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_section').text('39.990 CLP')
				}else{
					$('.data_section .price_section').text('50,00 $')
				}
				$('#typeContractBranding').val('Diseño de logo')
			}
			if (service == 'design') {
				$('#typeContract').val('Diseño para redes sociales - Combo #1')
				$('.typeService').val(service)
				$('#imageBranding').css({"background-image": "url('views/images/bg_design.png')"})
				$('#imageBranding ul li').css({'border': 'none'})
				$('.designLi').css({'border-bottom': 'solid 3px azure'})
				$('.titleLogo').hide(1)
				$('.titleDesign').show('slow')
				$('.pLogo').hide(1)
				$('.pDesign').show('slow')
				$('.data_section h3').text('Diseños para redes sociales')
				if ($('#typeCurrencyBranding').val() == 'CLP') {
					$('.data_section .price_section').text('19.990 CLP')
				}else{
					$('.data_section .price_section').text('25,00 $')
				}
				$('#typeContractBranding').val('Diseño para redes sociales')
			}
		}
		function contractSite(){
			$('#typeContract').val($('#typeContractWeb').val())
			console.log($('#typeContract').val())
		}
		function contractPlain(){
			$('#typeContract').val($('#typeContractPlain').val())
			console.log($('#typeContract').val())
		}
		function contractDesign(){
			$('#typeContract').val($('#typeContractBranding').val())
			console.log($('#typeContract').val())
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
		routeIndicator()
	</script>
</div>

