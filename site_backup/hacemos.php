<?php 
if(isset($_POST['submit'])){
    $to = "alicia.chavero@thecrewconcept.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Formulario thecrewconcept";
    $subject2 = "Copia de tu formulario thecrewconcept";
    $message = $first_name . " " . $last_name . " Escribió:" . "\n\n" . $_POST['message'];
    $message2 = "Esta es una copia de tu mensaje " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: gracias.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="ie8 legacy-ie no-js" lang="es"  itemscope itemtype="http://schema.org/Organization"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 legacy-ie no-js" lang="es"  itemscope itemtype="http://schema.org/Organization"><![endif]-->
<!--[if !IE]><!--> <html class="no-legacy-ie no-js" lang="es"  itemscope itemtype="http://schema.org/Organization"> <!--<![endif]-->

    <head>
	    

		
	    
        <meta charset="utf-8">

		<!--[if IE]>        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		
        <title></title>
        <meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<meta name="format-detection" content="telephone=no">
		
		
		<!-- IE Clearfix -->
		<!--[if IE]>
			<meta http-equiv="cleartype" content="on">
		<![endif]-->
		
		
		<!-- Mobile app -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="apple-touch-startup-image" href="img/splash.png">
		<meta name="mobile-web-app-capable" content="yes">
		<!-- /Mobile app -->
		
		<!-- App -->
		<meta name="apple-itunes-app" content="app-id=myAppStoreID, affiliate-data=myAffiliateData, app-argument=myURL">
		<meta name="google-play-app" content="app-id=googleAppID">
		<!-- /App -->
		
		<!-- CSS -->	

		
			
			<!-- Código Desarrollo: -->
			<link rel="stylesheet" type="text/css" href="css/critical.min.css">
			<link rel="stylesheet" type="text/css" href="css/async.min.css">
			<link rel="stylesheet" type="text/css" href="css/pola.css">
	
	
				
	    

	    
	    <noscript>	   		
	   		<link rel="stylesheet" type="text/css" href="css/fonts.min.css">
	    </noscript>
	    
	    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>	    
		<!-- /CSS -->	
		
		<!-- Modernizr -->	

	  	<script src="js/modernizr.js"></script>
			
        <!-- favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="img/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="img/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="img/favicons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
		<meta name="theme-color" content="#0079c8">
		<!-- /favicon -->
		
		<!-- OpenGraph -->
		<meta property="og:image" content="img/icons/favicon-192x192.png" />
		<meta property="og:title" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content="" />
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />	
		<!-- /OpenGraph -->
		
		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@flickr" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image:src" content="img/icons/favicon-192x192.png" />
		<meta name="twitter:url" content="" />		
		<meta itemprop="name" content="">
		<meta itemprop="description" content="">
		<meta itemprop="image" content="img/icons/favicon-192x192.png">
		<!-- /Twitter Card -->
		
		
		<link rel="alternate" hreflang="es" href="/" />		

		<!-- HTML5 IE8 -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- /HTML5 IE8 -->
		

		
		
    </head>
    <body data-spy="scroll" data-target="main">    
    
    
    		<!-- INICIO off-canvas mobile -->
		<div class="canvas-wrap"></div>
		<nav id="off-canvas-left" data-side="left" class="navmenu navmenu-default navmenu-fixed-left off-canvas" role="navigation">

			<button type="button" class="navbar-toggle close-canvas" data-toggle="offcanvas" data-side="left" data-target="#off-canvas-left" data-canvas="body">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>		


		
			<div class="inner-nav">
					<div class="container special">
						
						<div class="col-sm-5 nav-site">
							
							<ul class="list-unstyled margin-b-80">
								<li><a href="hacemos.php"><span class="h3 text-color-navlink">Qué hacemos</span></a></li>
								<li><a href="como.php"><span class="h3 text-color-navlink">Cómo lo hacemos</span></a></li>
								<li><a href="quienes.php"><span class="h3 text-color-navlink">Quiénes somos</span></a></li>
							</ul>
							
							<ul class="list-unstyled has-decoration">
								<li><a href="clientes.php"><span class="h4 text-color-navlink">Clientes</span></a></li>
								<li style="display:none;"><a href="playlist.php"><span class="h4 text-color-navlink">Playlist</span></a></li>
							</ul>							
							
							
							<div class="icons relative margin-b-30">
								<div class="row">
									<div class="col-xs-3"><a href="https://es.linkedin.com/company/the-crew-concept"><span class="icon-linkedin xs"></span></a></div>
									<div class="col-xs-3"><a href="https://twitter.com/alicia_chavero?lang=es"><span class="icon-twitter xs"></span></a></div>
								</div>
							</div>
							
						</div>
						<div class="col-sm-6 col-sm-offset-1">
							
							
							<div class="nav-options">
							
								<div class="content-nav">
									<div class="margin-b-60">	
										<h2 class="h2 text-color-navlink">Vamos a trabajar juntos</h2>							
										<h3 class="h3 text-color-navlink">Vente a tomar un coffee <br /> pero avísanos antes.</h3>
									</div>
									<div class="margin-b-25" data-option-show="location">	
										<span class="h4 text-color-navlink"><strong>Dónde estamos</strong></span>
										<p class="text-color-navlink">Calle Vandergoten, 1, 28014 Madrid</p>
									
									</div>
									<!--
									<div class="margin-b-25" data-option-show="ponencia">	
										<span class="h4 text-color-navlink"><strong>Ponencias</strong></span>
										<p class="text-color-navlink">Quieres que demos alguna</p>
									
									</div>-->
									<div class="margin-b-25" data-option-show="idea">	
										<span class="h4 text-color-navlink"><strong>Desarrollo de negocio</strong></span>
										<p class="text-color-navlink">Cuéntanos tu idea</p>
									
									</div>							
								</div>
							
							</div>
							
							<div class="options" data-option="ponencia">
								
								
								<div class="margin-b-30">
									<button type="button" class="js-option-back"><span class="icon-arrow"></span></button>
								</div>
								
								<h2 class="h3 text-color-navlink margin-b-30">Ponencias</h2>
								
								
								<form method="post" action="">
									<div class="margin-b-20">
										<label class="h3 text-color-navlink">Nombre</label>
										<input type="text" id="nombre" name="senderNombre" placeholder="" required=""/>
									</div>
									<div class="clearfix"></div>
									<div class="margin-b-20">
										<label class="h3 text-color-navlink">Email</label>
										<input type="text" id="mail" name="senderEmail" placeholder="" required=""/>
									</div>
									<div class="clearfix"></div>
									<div class="margin-b-20">
									
										<label class="h3 text-color-navlink">Mensaje</label>
										<textarea id="tellus" name="message" required=""></textarea>
									</div>
									<input type="submit" name="submit" id="" class="btn btn-transparent pull-right" value="Enviar">
								</form>							
								
								
								
								
							</div>
							
							<div class="options" data-option="location">
								
								
								<div class="margin-b-30">
									<button type="button" class="js-option-back"><span class="icon-arrow"></span></button>
								</div>
								
								<h2 class="h3 text-color-navlink margin-b-15">Dónde estamos</h2>
								
								<div class="margin-b-15">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.1539233846606!2d-3.684942584604437!3d40.40544077936656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422622825390bb%3A0x9d042d12496f9b06!2sCalle+Vandergoten%2C+1%2C+28014+Madrid!5e0!3m2!1ses!2ses!4v1496838026417" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								
								
								
								<div class="display-inline-block vertical-top">
									<div class="margin-b-15">
										<strong class="color-black">Email</strong>
										<p class="color-grey"><a href="mailto:hola@thecrewconcept.com">hola@thecrewconcept.com</a></p>
									</div>
									
									<div class="margin-b-15">
										<strong class="color-black">Address</strong>
										<p class="color-grey">Vandergoten, 1 - 28014 Madrid</p>
									</div>
			
									
									<div class="margin-b-15">
										<strong class="color-black">Social</strong>
										<p class="color-grey"><a href="https://www.linkedin.com/company/the-crew-concept">Linkedin</a><!--<br />Twitter--></p>
									</div>
								</div>								
								
								
							</div>
							<div class="options" data-option="idea">
								
								
								<div class="margin-b-30">
									<button type="button" class="js-option-back"><span class="icon-arrow"></span></button>
								</div>
								
								<h2 class="h3 text-color-navlink margin-b-30">Cuéntanos tu idea</h2>
								
								
								<form method="post" action="">
									<div class="margin-b-20">
										<label class="h3 text-color-navlink">Nombre</label>
										<input type="text" id="nombre" name="senderNombre" placeholder="" required=""/>
									</div>
									<div class="clearfix"></div>
									<div class="margin-b-20">
										<label class="h3 text-color-navlink">Email</label>
										<input type="text" id="mail" name="senderEmail" placeholder="" required=""/>
									</div>
									<div class="clearfix"></div>
									<div class="margin-b-20">
									
										<label class="h3 text-color-navlink">Tu idea</label>
										<textarea id="tellus" name="message" required=""></textarea>
									</div>
									<input type="submit" name="submit" id="" class="btn btn-transparent pull-right" value="Enviar">
								</form>							
								
								
								
								
							</div>														
							
							
														
						</div>
						
						
					</div>
				
			</div>
			
		</nav>
		<!-- FIN off-canvas mobile -->

    		<header id="header">
			<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-side="left" data-target="#off-canvas-left" data-canvas="body">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
	
			</button>	
						
			<div class="container special">
				<div class="row">
					<div class="col-sm-12">
						
					</div>
				</div>
			</div>
					
			<a href="index.php"><img src="img/isotipo.png" alt="Logotipo theCrew" title="Consultoría de Innovación y Diseño" class="logo"></a>
			
		</header>

		<!-- Contenido empieza aqui - RESPETAR LA TABULACION -->
		
		<main class="wrapper public" role="main">
		
			<div class="container special margin-b-100 lazyload box margin-b-xs-70" id="">
				<div class="row">
					

					<div class="col-sm-8 col-xs-9">
						<h1 class="h1 text-color-white margin-b-70" data-item-animate="5">Qué<br /> hacemos</h1>
						<h2 class="h3 light text-color-white margin-b-30 line-height" data-item-animate="5">Surcamos dos rutas marítimas. <br />la consultoría y la formación.</h2>
					</div>
					
					
				</div>

			</div>
			<div class="container special margin-b-150  lazyload box margin-b-xs-30" id="">
		
				<div class="block-options" data-item-animate="5">
					<div class="row">
						<div class="col-sm-4 col-xs-5">
							<a href="#" data-show="#consultoria" class="active h3">Consultoría</a>
						</div>
						<div class="col-sm-4 col-xs-2"><span class="decoration"></span></div>
						<div class="col-sm-4 col-xs-5">
							<a href="#" data-show="#formacion" class="h3">Formación</a>
						</div>
					</div>
				
				</div>


			</div>
			

			<!--- consultoría --->
			<div id="consultoria" class="toshow visible">
				<div class="container special lazyload box margin-b-xs-70">
					<div class="row">
						<div class="col-sm-12">
	
	
							<div class="block-text-image">
								
								
								<div class="text">
									<div class="margin-b-25">
										<h2 class="h2 text-color-white relative" data-item-animate="3" data-left="280" data-left-sm="280">Entender</h2>
	
									</div>	
									<div class="margin-l-30 relative" data-left="320"  data-left-sm="300"  data-item-animate="3"> 
										<h3 class="h4 line-height-lighter text-color-white margin-b-40" data-size="380">Investigación para la comprensión y detección de las áreas de oportunidad que tiene la compañía en materia de innovación.</h3>	
										
										<p class="h4 margin-b-20"><strong class="text-color-white">Qué haremos</strong></p>
										
										
										<ul class="small-list">
											
											<li class="text-color-white margin-b-10">Design research</li>
											<li class="text-color-white margin-b-10">Field work</li>
											<li class="text-color-white margin-b-10">Analysis</li>
											<li class="text-color-white margin-b-10">Generación insights</li>
											<li class="text-color-white margin-b-10">Diseño estrategia de innovación</li>
											
										</ul>
										
										
									</div>
									
								</div>
								<img src="img/img2.jpg" class="shadow-image absolute-position img-responsive-xs left-sm" data-size="380" data-top="-30"  data-left="-50" data-left-sm="-50"  alt=""  data-item-animate="5"/>
							</div>
							
						</div>
						
						
					</div>
	
				</div>			
				<div class="separator-section margin-b-100"></div>
				
	
				<div class="container special lazyload box margin-b-xs-70" id="section2">
					<div class="row">
						<div class="col-sm-12">
	
	
							<div class="block-text-image">
								
								
								<div class="text relative" data-left="0" data-left-sm="0" >
									<div class="margin-b-25">
										<h2 class="h2 text-color-white" data-item-animate="3">Idear</h2>
	
									</div>	
									<div class="margin-l-30"  data-item-animate="3">
										<h3 class="h4 line-height-lighter text-color-white margin-b-60" data-item-animate="3" data-size="380">En colaboración con los stakeholder necesarios, se diseñarán soluciones para dar respuesta a las áreas de oportunidad detectadas.</h3>	
										
										<p class="h4"><strong class="text-color-white">Qué haremos</strong></p>
										
										
										<ul class="small-list">
											
											<li class="text-color-white">Facilitación workshops</li>
											<li class="text-color-white">Diseño de propuesta de valor</li>
											<li class="text-color-white">Diseño de servicios y soluciones</li>
											<li class="text-color-white">Diseño de producto</li>
											<li class="text-color-white">Diseño de roadmap de implementación</li>
											
										</ul>
																			
										
									</div>
									
								</div>
								<img src="img/img3.jpg" class="shadow-image absolute-position img-responsive-xs no-sm" data-size="490" data-top="-10" data-left="420" data-left-sm="420" alt=""  data-item-animate="5"/>
							</div>
							
						</div>
						
						
					</div>
	
				</div>						
				
				
				<div class="separator-section margin-b-sm-200 margin-b-xs-70"></div>
				
				<div class="container special lazyload box margin-b-sm-70 margin-b-xs-70" id="section3" >
					<div class="row">
						<div class="col-sm-12">
	
	
							<div class="block-text-image" data-item-animate="5">
								
								
								<div class="text relative" data-left="0">
									<div class="margin-b-25">
										<h2 class="h3 title text-color-white has-decoration" data-item-animate="3">Podemos ayudarte si</h2>
	
									</div>	
									<div class="margin-l-30">
										<ul class="medium-list">
											<li class="text-color-white margin-b-30">Quieres desarrollar nuevos productos y servicios, o mejorar los existentes.</li>
											<li class="text-color-white margin-b-30">Quieres redefinir la propuesta de valor de los productos y servicios para que sean más innovadores desde un punto de vista de experiencia de cliente.</li>
											<!--<li class="text-color-white">Quieres demostrar a tus clientes que tienes soluciones innovadoras para ellos.</li>-->
											<li class="text-color-white margin-b-30">Quieres transformar la cultura de tu organización hacia algo más ágil, innovadora y con mentalidad 100% enfocada a cliente.</li>
											<!--<li class="text-color-white">Quieres tener un análisis y diagnóstico de tu ecosistema digital</li>-->
										</ul>
	
									</div>
									
								</div>
							</div>
							
						</div>
						
						
					</div>
	
				</div>			
			
			</div><!---/consultoría --->
			<!--- formación --->
			<div id="formacion" class="toshow">
				


				<div class="container special lazyload box margin-b-xs-70">
					<div class="row">
						<div class="col-sm-12">
	
	
							<div class="block-text-image">
								
								
								<div class="text">
									<div class="margin-b-25">
										<!--<h2 class="h2 text-color-white relative" data-item-animate="3" data-left="420">Entender</h2>-->
	
									</div>	
									<div class="margin-l-30 relative" data-left="510"  data-left-sm="320"  data-item-animate="3"> 
										<h3 class="h4 line-height-lighter text-color-white margin-b-40" data-size="380">Ofrecemos programas de formación en empresas con especialidad en las siguientes áreas:</h3>	
										
										<!--<p class="h4 margin-b-20"><strong class="text-color-white">Qué haremos</strong></p>-->
										
										<h4 class="h3 strong display-block text-color-white margin-b-30">Procesos de innovación:</h4> 
										<ul class="small-list margin-b-60">
											
											<li class="text-color-white margin-b-10">Formación en metodologías para desarrollo de proyectos de innovación</li>
											<li class="text-color-white margin-b-10">Design thinking</li>
											<li class="text-color-white margin-b-10">Creative problem solving</li>
											<li class="text-color-white margin-b-10">Design driven innovation</li>
										</ul>
										
										
									</div>
									<div class="relative margin-b-xs-100" data-top="200" data-size="300">
										<h4 class="h3 strong display-block text-color-white margin-b-30">Design research:</h4> 
										<ul  class="small-list margin-b-60">	
											<li class="text-color-white margin-b-10">Metodología para el diseño y la ejecución de investigación orientada a la generación de insigths con usuarios, sobre los que detectar áreas de oportunidad</li>
										</ul>
										
										<h4 class="h3 strong display-block text-color-white margin-b-30">Service design:</h4> 
										<ul  class="small-list margin-b-60">	
										
											<li class="text-color-white margin-b-10">Metodología para el diseño de servicios con foco en la experiencia de cliente, y en alinear los objetivos de negocio con los deseos y aspiraciones de los usuarios</li>
											
										</ul>
																				
									<img src="img/img5.jpg" class="absolute-position shadow-image img-responsive-xs margin-b-20 sm" data-top="-30"  data-left="400" data-left-sm="400" data-size="580" alt="" />									
									</div>
									
								</div>
								
								<div class="absolute-position" data-top="-30"  data-left="-50" data-left-sm="50" data-item-animate="5">
									<img src="img/img4.jpg" class="shadow-image img-responsive-xs left-sm margin-b-20" data-size="580" alt="" />
								</div>
								
								


							</div>
							
							
							
							
						</div>
						
						
					</div>
	
				</div>	
				<div class="separator-section margin-b-100"></div>
				<div class="container special lazyload box margin-b-xs-70">
					<div class="row">
						<div class="col-sm-12">
	
							
						<div class="block-text-image">
								
								
								<div class="text relative">
		
									<div class="relative"  data-item-animate="3" data-top="110" data-left="500" data-left-sm="320">
										
										<h3 class="h3 text strong display-block text-color-white margin-b-30">Las formaciones tienen diversos formatos, y suele ser acompañadas de procesos de mentoring para la puesta en marcha del conocimiento en el día a día de trabajo.</h3>																			
										
									</div>
									
								</div>
								<img src="img/entender3.jpg" class="shadow-image absolute-position img-responsive-xs no-sm" data-size="490"  data-left="-30" data-left-sm="10" data-top="-10" alt=""  data-item-animate="5"/>
							</div>
							
							
							
						</div>
						
						
					</div>
	
				</div>		
				
						
				<div class="separator-section margin-b-200 margin-b-sm-250"></div>

				<div class="container special lazyload box margin-b-xs-70 margin-b-sm-70 " id="" >
					<div class="row">
						<div class="col-sm-12">
	
	
							<div class="block-text-image" data-item-animate="5">
								
								
								<div class="text relative" data-left="0">
									<div class="margin-b-25">
										<h2 class="h3 title text-color-white has-decoration" data-item-animate="3">Podemos ayudarte si</h2>
	
									</div>	
									<div class="margin-l-30">
										<ul class="medium-list">
											<li class="text-color-white margin-b-30">Quieres formar a los equipos en metodologías para introducir una sensibilidad orientada a cliente.</li>
											<li class="text-color-white margin-b-30">Quieres que la compañía instale una nueva cultura de innovación y realizar un proceso apoyado en la formación.</li>
											<!--<li class="text-color-white">Quieres demostrar a tus clientes que tienes soluciones innovadoras para ellos.</li>-->
											<li class="text-color-white margin-b-30">Quieres desarrollar un conjunto de acciones en innovación y buscas un acompañamiento profesional.</li>
											<!--<li class="text-color-white">Quieres tener un análisis y diagnóstico de tu ecosistema digital</li>-->
										</ul>
	
									</div>
									
								</div>
							</div>
							
						</div>
						
						
					</div>
	
				</div>			



				
				<!--
				<div class="container special lazyload box margin-b-xs-70" id="section2">
					<div class="row">
						<div class="col-sm-12">
	
	
							<div class="block-text-image">
								
								
								<div class="text relative" data-left="390">
									<div class="margin-b-25">
										<h2 class="h2 text-color-white" data-item-animate="3">Diseñar</h2>
	
									</div>	
									<div class="margin-l-60"  data-item-animate="3">
										<h3 class="h4 line-height text-color-white margin-b-80" data-item-animate="3" data-size="420">Lo siguiente es llegar a una solución tangible con todo lo aprendido en la fase de Entender. Con nosotros sabrás cómo hacerlo.</h3>	
										
										<p class="h4"><strong class="text-color-white">Qué haremos</strong></p>
										
										
										<ul class="small-list">
											
											<li class="text-color-white">Formación en service design y strategy design</li>
											<li class="text-color-white">Formación en diseño de la propuesta de valor</li>
											<li class="text-color-white">Mentoring para la implementación de metodologías de innovación</li>
											<li class="text-color-white">Formación en UXD</li>
											<li class="text-color-white">Mentorización de desarrollo de ecosistema digital</li>
											
										</ul>
																			
										
									</div>
									
								</div>
								<img src="img/design2.jpg" class="shadow-image absolute-position img-responsive-xs no-sm" data-size="490" data-top="-10" data-left="-50" alt=""  data-item-animate="5"/>
							</div>
							
						</div>
						
						
					</div>
	
				</div>-->						
				
				


				
			</div><!---/formación --->
		
		
		
		
		
			<img src="img/icons/icon-arrow.png" alt="bajar" class="arrow-down"/>
			
			<div class="separator-section"></div>
						
	    </main>	
	    

	    
    		<footer class="hide-canvas-in">
					
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
			
						<h3 class="h3 text-color-white has-decoration relative margin-b-60">Háblanos de tu idea</h3>
						
						<div class="display-inline-block">
							<a href="#" class="display-inline-block btn btn-transparent" data-launch-modal="#form">Contáctanos</a>	
						</div>		
			
					</div>
				</div>
			</div>
			
			
			
		</footer>


<!---- modales ---->


<div id="form" class="modal" data-modal="form">
	
	
	<button type="button" class="close" aria-label="Close">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	
	<div class="section">
		<div class="container">
			<div class="col-sm-6 col-sm-offset-6">
				<div class="content">	
	
					<form method="post" action="">

						<label class="h3 text-color-navlink">Estimados The Crew,</label>
						<textarea id="tellus" name="message" required=""></textarea>
						<div class="clearfix margin-b-30"></div>
						<label class="h3 text-color-navlink">Déjanos tu email</label>

						<input type="text" id="mail" name="senderEmail" placeholder="" required=""/>
						<div class="clearfix margin-b-30"></div>
						<input type="submit" name="submit" id="" class="btn btn-transparent">
	
					</form>
				</div>	
			</div>
		</div>
	</div>
</div>



    
    
		<!-- Código Desarrollo: -->
	  	<script src="js/critical.js"></script>
		<script async src="js/async.js"></script>
		

	    
</body>
</html>

<script src="js/pola.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script>
$('.owl-carousel').owlCarousel({
	items:1,
    loop:true,
    margin:10,
    nav:true,
    dots:true,
    autoplay:true,
    margin:0,
	autoplayTimeout:5000,
    autoplayHoverPause:true,
	smartSpeed:450,   
    })

</script>




<script>
	$('img.arrow-down').click(function(){
		
			var altoScroll=$("#consultoria").offset().top-200;
			
		
			moveToOffset =altoScroll;
			$("html, body").animate({scrollTop: moveToOffset, useTranslate3d:true }, 1200);
				

	});
	
	$('[data-launch-modal]').click(function(event){
		event.preventDefault();
		modalLaunch = $(this).attr("data-launch-modal");
		$(modalLaunch).addClass('active');
		
		//$('#tellus').focus();
		
		var anchoVentana = $(window).width();
		if(anchoVentana>991){
			if(modalLaunch=="#form"){
				$('#tellus').focus();
			}			
		}
		
		
		
	})
	
	
	
	$('#tellus').keydown(function(){
		
		$('#form').addClass('writing');
		$('#form').addClass('tell');
		$('#form').removeClass('mail');

		
	})
	
	$('#tellus').keyup(function(){	
		valor2=$('#mail').val();
		valor=$(this).val();
		if(valor==="" && valor2===""){
			$('#form').removeClass('writing');
		}		
		
		
	
	});
	
	$('#mail').keyup(function(){	
		valor2=$('#tellus').val();
		valor=$(this).val();
		if(valor==="" && valor2===""){
			$('#form').removeClass('writing');
		}		
		
		
	
	});
	$('#mail').keydown(function(){
		
		$('#form').addClass('writing');
		$('#form').addClass('mail');
		$('#form').removeClass('tell');
		

		
	});

	$('.modal .close').click(function(){
		
		$(this).closest('.modal').removeClass('active');
		
	})
	
	
	
	var i=1;
	reload();
	
	function changeText(){
	
		i ++;
		$('#changeText h2').removeClass('active');			
		$('#changeText #text' + i ).addClass('active')

		if(i==3){
			i=0;
			reload();
		}else{
			reload();
			
		}
		
	}


	function reload(){
		setTimeout(function(){
			 changeText();
		}, 10000);			
	}



	$('[data-option-show]').click(function(event){
		
		
		
		$('.content-nav').addClass('opacity');
		
		$('.nav-site').addClass('opacity');
		
		
		var optionShow=$(this).attr('data-option-show');
		
		$('[data-option]').removeClass('active');
		$('[data-option='+ optionShow +']').addClass('active');
		
		
	});

	$('.js-option-back').click(function(event){
		$('[data-option]').removeClass('active');
		$('.content-nav').removeClass('opacity');
		$('.nav-site').removeClass('opacity');
	});
	
</script>
