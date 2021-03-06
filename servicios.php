<?php include ("header.php"); ?>
	<link rel="stylesheet" type="text/css" href="views/css/services_styles.css">
	<link rel="stylesheet" type="text/css" href="views/css/services_responsive.css">
	<input class="findHome" type="text" value="nohome" hidden >
	<input class="route" type="text" value="serviceSection" hidden >
<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(views/images/slider_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Servicios</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".service_boxes">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Modal -->
	<div class="modal fade" id="contractModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Complete este formulario.</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body pt-3 pb-3 ">
					<form id="reply_form">
						<div class="row pl-3 pr-3">
							<div class="col-md-6">
								<input class="input_field reply_form_firtName w-100" type="text" placeholder="Nombre" required="required" data-error="Nombre es requerido." name="firtName">
							</div>
							<div class="col-md-6">
								<input class="input_field reply_form_lastName w-100" type="text" placeholder="Apellido" required="required" data-error="Apellido es requerido." name="lastName">
							</div>
							<div class="col-12">
								<input class="input_field reply_form_mail w-100" type="email" placeholder="Correo" required="required" data-error="Correo valido es requerido." name="mail">
							</div>
							<div class="col-12">
								<div class="w-100" style="display: inline-block;">
									<select name="code" id="" class="styleSelect reply_form_code" style="width:25%;">
										<option value="+56">+56</option>
										<option value="+58">+58</option>
										<option value="+420">+420</option>
										<option value="+54">+54</option>
										<option value="+61">+61</option>
										<option value="+55">+55</option>
										<option value="+591">+591</option>
										<option value="+506">+506</option>
										<option value="+57">+57</option>
										<option value="+53">+53</option>
										<option value="+34">+34</option>
										<option value="+593">+593</option>
									</select>
									<input class="input_field reply_form_number" style="width:73%" type="text" placeholder="Teléfono" name="number" maxlength="15">
								</div>
							</div>
							<input type="hidden" id="typeContract" name="type">
							<input type="hidden" id="ifsuscription" name="ifsuscription" value="false">
						</div>
						<div class="display:inline-block">
							<input class="form-check-input ml-3" onclick="document.getElementById('ifsuscription').value = 'true'" style="cursor:pointer;margin-top:2.8rem !important;"  type="checkbox" id="gridCheck">
							<label class="form-check-label ml-4" style="margin-top:2.3rem !important;" for="gridCheck">
								Suscribirme al boletín informativo
							</label>
							<button type="button" onclick="sendMail(2)" class="button-contract-service mr-3">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<input type="hidden" value="Pagina web landing" id="typeContractWeb">
	<input type="hidden" value="Plan de gestión básica" id="typeContractPlain">
	<input type="hidden" value="Diseño de logo" id="typeContractBranding">
	<!-- Service Boxes -->

	<div class="service_boxes" style="margin-top:-20px;">
		<div class="btn-group dropup stylePosition" >
			<button type="button" class="btn btn-secondary dropdown-toggle buttonType" style="color: #172b4d;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
				<span class="clp"><img src="views/images/chile.png" alt=""> $</span>
				<span class="usd" ><img src="views/images/united-states.png" alt=""> $</span>
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" onclick="changeCLP()" style="cursor:pointer;"><img src="views/images/chile.png" alt=""> $</a>
				<a class="dropdown-item" onclick="changeUSD()" style="cursor:pointer;"><img src="views/images/united-states.png" alt=""> $</a>
			</div>
		</div>
		<!-- <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="color: #fff; text-align: center;padding-bottom: 20px;">Tarifas de SYSWA WEB</h1>
				</div>
				<div class="col-lg-4 service_col mt-2">
					<div class="flip-card-container" style="--hue: 220">
						<div class="flip-card">
							<div class="card-front-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-2.png" alt="Brohm Lake">
									<figcaption>Página landing - <span class="badge badge-dark landing" style="font-size: 1.2em;">120.000 CLP</span> </figcaption>
								</figure>
								<ul class="card-ul-flip">
									<li class="card-li-flip">1 Pagina de inicio</li>
									<li class="card-li-flip">1 Correo</li>
									<li class="card-li-flip">Dominio Gratis</li>
									<li class="card-li-flip">Hosting un año</li>
									<li class="card-li-flip">Ancho de banda limitado (100 GB)</li>
									<li class="card-li-flip">Certificado SSL gratis</li>
									<li class="card-li-flip">Caché LiteSpeed</li>
									<li class="card-li-flip">Soporte 24/7</li>
									<li class="card-li-flip">Copias de seguridad semanales</li>
								</ul>
							</div>
							<div class="card-back-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-2.png" alt="Brohm Lake">
								</figure>
								<button class="button-card-flip" data-toggle="modal" data-target="#contractModal" onclick="selectContract('Página landing')">Contratar</button>
								<div class="design-container-flip">
									<span class="design-flip design--1"></span>
									<span class="design-flip design--2"></span>
									<span class="design-flip design--3"></span>
									<span class="design-flip design--4"></span>
									<span class="design-flip design--5"></span>
									<span class="design-flip design--6"></span>
									<span class="design-flip design--7"></span>
									<span class="design-flip design--8"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-lg-4 service_col mt-2">
					<div class="flip-card-container" style="--hue: 220">
						<div class="flip-card">
							<div class="card-front-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-1.png" alt="Brohm Lake">
									<figcaption>Sitio web - <span class="badge badge-dark site" style="font-size: 1.2em;">
										280.000 CLP</span></figcaption>
								</figure>
								<ul class="card-ul-flip">
									<li class="card-li-flip">5 Secciones</li>
									<li class="card-li-flip">Cuentas de correos ilimitados</li>
									<li class="card-li-flip">Dominio Gratis</li>
									<li class="card-li-flip">Hosting un año</li>
									<li class="card-li-flip">2 Subdominios</li>
									<li class="card-li-flip">Ancho de banda ilimitado</li>
									<li class="card-li-flip">Certificado SSL gratis</li>
									<li class="card-li-flip">Caché LiteSpeed</li>
									<li class="card-li-flip">Soporte 24/7</li>
									<li class="card-li-flip">Copias de seguridad semanales</li>
								</ul>
							</div>
							<div class="card-back-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-1.png" alt="Brohm Lake">
								</figure>
								<button class="button-card-flip" data-toggle="modal" data-target="#contractModal" onclick="selectContract('Sitio web')">Contratar</button>
								<div class="design-container-flip">
									<span class="design-flip design--1"></span>
									<span class="design-flip design--2"></span>
									<span class="design-flip design--3"></span>
									<span class="design-flip design--4"></span>
									<span class="design-flip design--5"></span>
									<span class="design-flip design--6"></span>
									<span class="design-flip design--7"></span>
									<span class="design-flip design--8"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-lg-4 service_col mt-2">
					<div class="flip-card-container" style="--hue: 220">
						<div class="flip-card">
							<div class="card-front-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-3.png" alt="Brohm Lake">
									<figcaption>E-Commerce - <span class="badge badge-dark commerce" style="font-size: 1.2em;">400.000 CLP</span></figcaption>
								</figure>
								<ul class="card-ul-flip">
									<li class="card-li-flip">4 Secciones</li>
									<li class="card-li-flip">Cuentas de correos ilimitados</li>
									<li class="card-li-flip">Dominio Gratis</li>
									<li class="card-li-flip">Hosting un año</li>
									<li class="card-li-flip">2 Subdominios</li>
									<li class="card-li-flip">Carrito de venta</li>
									<li class="card-li-flip">Pasarela de pago</li>
									<li class="card-li-flip">Sección administrativa</li>
									<li class="card-li-flip">Ancho de banda ilimitado</li>
									<li class="card-li-flip">Certificado SSL gratis</li>
									<li class="card-li-flip">Soporte 24/7</li>
								</ul>
							</div>
							<div class="card-back-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-3.png" alt="Brohm Lake">
								</figure>
								<button class="button-card-flip" data-toggle="modal" data-target="#contractModal" onclick="selectContract('E-Commerce')">Contratar</button>
								<div class="design-container-flip">
									<span class="design-flip design--1"></span>
									<span class="design-flip design--2"></span>
									<span class="design-flip design--3"></span>
									<span class="design-flip design--4"></span>
									<span class="design-flip design--5"></span>
									<span class="design-flip design--6"></span>
									<span class="design-flip design--7"></span>
									<span class="design-flip design--8"></span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="container">
			<h1 style="color: #fff; text-align: center;padding-bottom: 20px;">Tarifas de SYSWA WEB</h1>
			<input type="hidden" class="typeWebService" value="basic">
			<div class="row card_design_section">
				<div class="col-md-8 image_section" id="imageWeb">
					<div class="menu_apple mb-4">
						<span class="first"><i class="fa fa-circle"></i></span>
						<span class="second"><i class="fa fa-circle"></i></span>
						<span class="third"><i class="fa fa-circle"></i></span>
					</div>
					<ul>
						<li class="landingLi" onmouseover="changeTypeWeb('landing')">
							Landing page
						</li>
						<li class="siteLi" onmouseover="changeTypeWeb('site')">
							Sitio web
						</li>
						<li class="ecommerceLi" onmouseover="changeTypeWeb('ecommerce')">
							E-commerce
						</li>
					</ul>
					<button onclick="changeImagesSites()"><i class="fa fa-chevron-right"></i></button>
					<input type="hidden" class="countWebBackground" value="1">
					<h2 class="titleWeb">Crea una Landing page</h2>
				</div>
				<div class="col-md-4 data_section">
					<h3>Landing page</h3>
					<div class="menu_apple">
						<span class="gray_one"><i class="fa fa-circle"></i></span>
						<span class="gray_two"><i class="fa fa-circle"></i></span>
						<span class="gray_three"><i class="fa fa-circle"></i></span>
					</div>
					<p class="pLanding">
						1 Pagina de inicio <br>
						1 Correo <br>
						Dominio 1 año Gratis <br>
						Hosting 1 año Gratis <br>
						Ancho de banda limitado (100 GB) <br>
						Certificado SSL gratis <br>
						Caché LiteSpeed <br>
						Soporte 24/7 <br>
						Copias de seguridad semanales
					</p>
					<p class="pSite">
						5 Secciones <br>
						Cuentas de correos ilimitados <br>
						Dominio 1 año Gratis <br>
						Hosting 1 año Gratis <br>
						Ancho de banda ilimitado <br>
						Certificado SSL gratis <br>
						Caché LiteSpeed <br>
						Soporte 24/7 <br>
						Copias de seguridad semanales
					</p>
					<p class="pEcommerce">
						4 Secciones <br>
						Cuentas de correos ilimitados <br>
						Dominio 1 año Gratis <br>
						Hosting 1 año Gratis <br>
						Sección administrativa <br>
						Pasarela de pago <br>
						Ancho de banda ilimitado <br>
						Certificado SSL gratis <br>
						Soporte 24/7 <br>
						Copias de seguridad semanales
					</p>
					<hr>
					<span class="price_web_section">120.000 CLP</span><br>
					<button data-toggle="modal" data-target="#contractModal" onclick="contractSite()">Contratar</button>
				</div>
			</div>
		</div>
		
		<div class="container mt-5">
				<h1 style="color: #fff; text-align: center;padding-bottom: 20px;">Tarifas de SYSWA GESTIÓN</h1>
				<input type="hidden" class="typePlainService" value="basic">
				<div class="row card_design_section">
					<div class="col-md-8 image_section" id="imagePlain">
						<div class="menu_apple mb-4">
							<span class="first"><i class="fa fa-circle"></i></span>
							<span class="second"><i class="fa fa-circle"></i></span>
							<span class="third"><i class="fa fa-circle"></i></span>
						</div>
						<ul>
							<li class="basicLi" onmouseover="changeTypePlain('basic')">
								Plan básico
							</li>
							<li class="invetoryLi" onmouseover="changeTypePlain('inventory')">
								Plan control de inventario
							</li>
						</ul>
						<button onclick="changeImages()"><i class="fa fa-chevron-right"></i></button>
						<input type="hidden" class="countPlainBackground" value="1">
						<h2 class="titlePlain">Gestiona tu negocio con nuestro plan básico</h2>
					</div>
					<div class="col-md-4 data_section">
						<h3>Plan de gestión básica</h3>
						<div class="menu_apple">
							<span class="gray_one"><i class="fa fa-circle"></i></span>
							<span class="gray_two"><i class="fa fa-circle"></i></span>
							<span class="gray_three"><i class="fa fa-circle"></i></span>
						</div>
						<p class="pBasic">
							Sección de Métricas <br>
							Sección de Ventas <br>
							Sección de Servicios <br>
							Sección de clientes <br>
							Sección de Gastos <br>
							Sección de Agendamiento <br>
							Sección de Caja <br>
							Sin inventario
						</p>
						<p class="pInventory">
							Sección de Métricas <br>
							Sección de Ventas <br>
							Sección de Servicios <br>
							Sección de clientes <br>
							Sección de Gastos <br>
							Sección de Agendamiento <br>
							Sección de Caja <br>
							Sección de Inventario
						</p>
						<hr>
						<span class="price_plain_section">Mensual 20.000 CLP</span><br>
						<button data-toggle="modal" data-target="#contractModal" onclick="contractPlain()">Contratar</button>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-12">
					<h1 style="color: #fff; text-align: center;padding-bottom: 20px;">Tarifas de SYSWA GESTIÓN</h1>
				</div>
				<div class="col-lg-6 service_col mt-2">
					<div class="flip-card-container" style="--hue: 220">
						<div class="flip-card">
							<div class="card-front-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-4.png" alt="Brohm Lake">
									<figcaption><span class="badge badge-dark basic" style="font-size: 1.2em;">Mensual 20.000 CLP</span></figcaption>
									<figcaption class="mt-3">Plan básico</span></figcaption>
								</figure>
								<ul class="card-ul-flip" style="margin-top:-100px !important;">
									<li class="card-li-flip">Sección de Métricas</li>
									<li class="card-li-flip">Sección de Ventas</li>
									<li class="card-li-flip">Sección de Servicios</li>
									<li class="card-li-flip">Sección de Profesionales</li>
									<li class="card-li-flip">Sección de clientes</li>
									<li class="card-li-flip">Sección de Gastos</li>
									<li class="card-li-flip">Sección de Agendamiento</li>
									<li class="card-li-flip">Sección de Caja</li>
									<li class="card-li-flip">Sin inventario</li>
								</ul>
							</div>
							<div class="card-back-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-4.png" alt="Brohm Lake">
								</figure>
								<button class="button-card-flip" data-toggle="modal" data-target="#contractModal" onclick="selectContract('Plan básico')">Contratar</button>
								<div class="design-container-flip">
									<span class="design-flip design--1"></span>
									<span class="design-flip design--2"></span>
									<span class="design-flip design--3"></span>
									<span class="design-flip design--4"></span>
									<span class="design-flip design--5"></span>
									<span class="design-flip design--6"></span>
									<span class="design-flip design--7"></span>
									<span class="design-flip design--8"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-lg-6 service_col mt-2">
					<div class="flip-card-container" style="--hue: 220">
						<div class="flip-card">
							<div class="card-front-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-6.png" alt="Brohm Lake">
									<figcaption><span class="badge badge-dark inventory" style="font-size: 1.2em;">Mensual 25.000 CLP</span></figcaption>
									<figcaption class="mt-3">Plan control de inventario</span></figcaption>
								</figure>
								<ul class="card-ul-flip" style="margin-top:-100px !important;">
									<li class="card-li-flip">Sección de Métricas</li>
									<li class="card-li-flip">Sección de Ventas</li>
									<li class="card-li-flip">Sección de Servicios</li>
									<li class="card-li-flip">Sección de Profesionales</li>
									<li class="card-li-flip">Sección de clientes</li>
									<li class="card-li-flip">Sección de Gastos</li>
									<li class="card-li-flip">Sección de Agendamiento</li>
									<li class="card-li-flip">Sección de Caja</li>
									<li class="card-li-flip">Seccion de inventario</li>
								</ul>
							</div>
							<div class="card-back-flip">
								<figure class="card-figure-flip">
									<div class="img-bg"></div>
									<img class="card-img-flip" src="views/images/bg-card-6.png" alt="Brohm Lake">
								</figure>
								<button class="button-card-flip" data-toggle="modal" data-target="#contractModal" onclick="selectContract('Plan control de inventario')">Contratar</button>
								<div class="design-container-flip">
									<span class="design-flip design--1"></span>
									<span class="design-flip design--2"></span>
									<span class="design-flip design--3"></span>
									<span class="design-flip design--4"></span>
									<span class="design-flip design--5"></span>
									<span class="design-flip design--6"></span>
									<span class="design-flip design--7"></span>
									<span class="design-flip design--8"></span>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div> -->
		<div class="container mt-5">
			<h1 style="color: #fff; text-align: center;padding-bottom: 20px;">Tarifas de SYSWA BRANDING</h1>
			<input type="hidden" class="typeService" value="logo">
			<div class="row card_design_section">
				<div class="col-md-8 image_section" id="imageBranding">
					<div class="menu_apple mb-4">
						<span class="first"><i class="fa fa-circle"></i></span>
						<span class="second"><i class="fa fa-circle"></i></span>
						<span class="third"><i class="fa fa-circle"></i></span>
					</div>
					<ul>
						<li class="logoLi" onmouseover="changeService('logo')">
							Logos
						</li>
						<li class="designLi" onmouseover="changeService('design')">
							Diseños
						</li>
					</ul>
					<button onclick="changePlain()"><i class="fa fa-chevron-right"></i></button>
					<input type="hidden" class="countBackground" value="1">
					<h2 class="titleLogo">Ayudamos a definir visualmente la identidad de tu empresa</h2>
					<h2 class="titleDesign" style="font-size: 3.2em;">5 Diseños <br> +1 de obsequio</h2>
					<h2 class="titleDesigTwo" style="font-size: 3.2em;">10 Diseños <br> +2 de obsequio</h2>
					<h2 class="titleDesignThree" style="font-size: 3.2em;">20 Diseños <br> +3 de obsequio</h2>
				</div>
				<div class="col-md-4 data_section">
					<h3>Diseños & refrescamiento de logo</h3>
					<div class="menu_apple">
						<span class="gray_one"><i class="fa fa-circle"></i></span>
						<span class="gray_two"><i class="fa fa-circle"></i></span>
						<span class="gray_three"><i class="fa fa-circle"></i></span>
					</div>
					<p class="pLogo">
						Diseños en alta resolución <br>
						Variantes de color <br>
						Archivo editable <br>
						Tipografía <br>
						Códigos de colores <br>
						Formatos PNG y JPG <br>
						KIT de Social Media 
					</p>
					<p class="pDesign">
						Post de Redes Sociales <br>
						Stories <br>
						Folletos <br>
						Anuncios <br>
						Portadas <br>
						Banners<br>
						Tarjeta de presentación 
					</p>
					<hr>
					<span class="price_section">39.990 CLP</span><br>
					<button data-toggle="modal" data-target="#contractModal" onclick="contractDesign()">Contratar</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Device -->

	<div class="device">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 order-lg-1 order-2 pt-5">
					<div class="device_content">
						<h2>Contamos con un equipo altamente capacitado</h2>

						<ul class="device_items">
							<li class="device_item clearfix">
								<span>01.</span>
								<p>Comunícate con nosotros e infórmate sobre nuestros planes y servicios (responderemos de inmediato).</p>
							</li>
							<li class="device_item clearfix">
								<span>02.</span>
								<p>Te enviaremos un presupuesto acorde a tus necesidades.</p>
							</li>
							<li class="device_item clearfix">
								<span>03.</span>
								<p>En poco tiempo tendrás tu sitio web que hará crecer tu negocio.</p>
							</li>
						</ul>

						<div class="mt-5">
							<a class="devices_button" href="contacto">Contáctanos</a>
						</div>
						

					</div>
				</div>

				<div class="col-lg-6 order-lg-2 order-1">
					<div class="device_image">
						<div class="device_image_background"></div>
						<div class="device_image_container d-flex flex-column justify-content-end">
							<img src="views/images/device.png" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Call to action 2 -->

	<div class="cta_2">
		<!-- image by: https://unsplash.com/@tentides -->
		<div class="cta_2_background"></div>
		<div class="container">
			<div class="row">
				
				<div class="col-lg-9">
					<div class="cta_2_content">
						<h1>¿Que estás esperando?</h1>
						<span>Tener un sitio web en estos tiempos es de vital interés, asesórate con nosotros. </span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="cta_2_button_container">
						<div class="mt-2">
							<a class="devices_button" href="contacto">Contáctanos</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Image Boxes -->
 <!--
	<div class="image_boxes">
		
		<div class="container">
			<div class="row">
				
				
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="images/image_box_1.jpg" alt="https://unsplash.com/@heysupersimi">
						<div class="card-body">
							<h3 class="card-title">One-click installation. Super easy to use</h3>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
							<a href="#" class="card-link">discover more</a>
						</div>
					</div>
				</div>

			
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="images/image_box_2.jpg" alt="https://unsplash.com/@gabrielssantiago">
						<div class="card-body">
							<h3 class="card-title">All the elements inside +many more</h3>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
							<a href="#" class="card-link">discover more</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="images/image_box_3.jpg" alt="https://unsplash.com/@anthonydelanoix">
						<div class="card-body">
							<h3 class="card-title">Documentation inside the pack</h3>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
							<a href="#" class="card-link">discover more</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
-->
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Title -->
						<div class="newsletter_title">
							<h1>Suscríbete a nuestro boletín</h1>
							<span>Te enviaremos al correo nuestras nuevas tecnologías.</span>
						</div>
						
						<!-- Newsletter Form -->
						<div class="newsletter_form_container">
							<form method="post">
								<div class="input-group">
									<input type="email" name="mailSuscription" class="newsletter_email" placeholder="Correo electrónico" required="required" data-error="Valid email address is required.">
									<button id="newsletter_form_submit" type="button" class="button newsletter_submit_button trans_200" onclick="sendMail(1)">
										Suscríbete
									</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include ("footer.php") ?>
