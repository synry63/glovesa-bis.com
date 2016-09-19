<!-- header -->
<?php include('./include/header.php')?>
<!-- menu -->
<?php include('./include/menu.php')?>
        <!-- Start contact us Header -->
		<div class="heading-banner background">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading-banner k-padding text-center">
							<div class="page-banner-title">
								<h2>Contáctenos</h2>
							</div>							
						</div>
						<div class="breadcam">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><i class="fa fa-angle-right"></i>CONTÁCTENOS</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- End contact us Header -->        
        <!-- Start contact us Area --> 
		<div class="contact-us-area k-padding">
			<div class="container">	
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="contact-single-info text-center">
							<div class="info-icon">
								<!-- <img alt="" src="img/icon/9.png"> -->
								<i class="fa fa-map-marker"> </i>
							</div>
							<div class="info-dis">
								<!-- <h3 class="con-info-title">Location</h3> -->
								<h3 class="con-info-title">Localización</h3>
								<address>
									<p>Jr. Comunidad Industrial Nº 333 Urb. <br>La Villa - Chorrillos – Lima</p>

								</address>
							</div>
						</div>	
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="contact-single-info text-center">
							<div class="info-icon">
								<!-- <img alt="" src="img/icon/10.png"> -->
								<i class="fa fa-phone"></i>
							</div>
							<div class="info-dis">
								<!-- <h3 class="con-info-title">Location</h3> -->
								<h3 class="con-info-title">Teléfono</h3>
								<address>
									<p> (01) 266-7186 </p>
								</address>
							</div>
						</div>	
					</div>
					<div class="col-md-4 hidden-sm col-xs-12">
						<div class="contact-single-info text-center">
							<div class="info-icon">
								<!-- <img alt="" src="img/icon/11.png"> -->
								<i class="fa fa-envelope"></i>
							</div>
							<div class="info-dis">
								<h3 class="con-info-title">Correo</h3>
								<address>
									<p>ventas@displasac.com</p>
								</address>
							</div>
						</div>	
					</div>
				</div>
				<div class="row k-padding-t">
					<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2">
						<div class="contact-us-form">
							<?php
								if(isset($_GET['state']) && $_GET['state']==1){
									echo "<div class='alert alert-success'><i class='fa fa-check-circle' aria-hidden='true'></i><strong> ¡Gracias!</strong> Tú mensaje ha sido enviado correctamente.</div>";
								}else if (isset($_GET['state']) && $_GET['state']==0){
									echo "<div class='alert alert-danger'><i class='fa fa-times-circle' aria-hidden='true'></i><strong> ¡Lo sentimos!</strong> No se pudo enviar el correo.</div>";
								}
							?>
							<form action="server.php" method="post">
								<div class="form-inner">
									<div class="single-input one-half">
										<label>Nombre y Apellido <span>*</span></label>
										<input type="text" name="nombre" required>
									</div>
									<div class="single-input one-half">
										<label>Correo <span>*</span></label>
										<input type="email" name="correo" required>
									</div>
									<div class="single-input">
										<label>Asunto <span>*</span></label>
										<input type="text" name="asunto" required>
									</div>
									<div class="single-input">
										<label>Comentario <span>*</span></label>
										<textarea class="textarea" name="comentario" required></textarea>
									</div>
									<div class="single-input">
										<p>Todos los campos con<span>*</span> son requeridos.</p>
									</div>
									<div class="submit-btn-area">
										<button type="submit" class="kp-button">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- <div class="col-md-4 col-sm-4 col-xs-12">
						<div class="admin-contact">
							<h2>Admin Contact</h2>
							<div class="single-admin-contact">
								<div class="admin-img">
									<img src="img/au-c/1.jpg" alt="">
								</div>
								<div class="ad-contact-title">
									<h3>Akrmul Islam</h3>
									<p>CEO & Founder</p>
									<p><span><i class="fa fa-envelope" aria-hidden="true"></i>
									</span>info@info.com</p>
									<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+88 00 0000</p>
								</div>
							</div>
							<div class="single-admin-contact">
								<div class="admin-img">
									<img src="img//au-c/1.jpg" alt="">
								</div>
								<div class="ad-contact-title">
									<h3>Akrmul Islam</h3>
									<p>CEO & Founder</p>
									<p><span><i class="fa fa-envelope" aria-hidden="true"></i>
									</span>info@info.com</p>
									<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+88 00 0000</p>
								</div>
							</div>
							<div class="single-admin-contact">
								<div class="admin-img">
									<img src="img//au-c/1.jpg" alt="">
								</div>
								<div class="ad-contact-title">
									<h3>Akrmul Islam</h3>
									<p>CEO & Founder</p>
									<p><span><i class="fa fa-envelope" aria-hidden="true"></i>
									</span>info@info.com</p>
									<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+88 00 0000</p>
								</div>
							</div>														
						</div>
					</div> -->
				</div>		
			</div>
		</div>
        <!-- End contact us Area --> 
		<!-- Start Newsletter Area -->
		<!-- <div class="newsletter-area k-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
						<div class="newsletter text-center">
							<h3><span>Subscribe</span>to our newsletter</h3>
							<p>Subscribe to the Expert mailing list to receive updates on new arrivals, special offers and other discount information.</p>
							<form action="#">
								<div class="newsletter-form">
									<input type="text" placeholder="Your Email.........">
									<button>subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Newsletter Area -->
<!-- footer -->
<?php include('./include/footer.php')?>