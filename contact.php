<?php	
// Inclusion du fichier qui déclare la sesion pour les langues	
include_once("session.php");
// Inclusion du fichier de connexion à la base de données.
include_once("connectdb.php");	
// Inclusion du fichier de la classe qui gère les langues.
include_once("class/texts.class.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
		<head>	
			<meta charset="utf-8">			
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
			<meta name="author" content="Cassano Gabriele" />
			<meta name="description" content="Secret Faces est un projet en home studio de Rock Fusion. Le projet devra ensuite évoluer vers un groupe de musiciens, grâce à l'arrivée de la chanteuse Pat Lennon, qui se charge de recruter les musiciens qui feront partie du projet. Une partie de ces musiciens participent déjà à la finalisation de l'album. Il reste à terminer la structure et l'enregistrement du chant sur la plupart des chansons, ensuite s'effectuera le remix final du premier album 'The End Of Violence'" />
			<meta name="robots" content="index, follow, all" />
			<meta name="keywords" content="secret faces, secret faces biographie, rock fusion" />
			
			<title>
			<?php 
			// Récupération du titre de la page dans la base de données, en fonction de la langue et affichage.
			$title_page = Textes::get('bio.title1',$_SESSION['lang']);	
			echo $title_page;		
			?>
			</title>			
			
			<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
			<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
			<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">   
			<link rel="stylesheet" href="css/zerogrid.css">
			<link rel="stylesheet" href="css/responsive.css">
			<link rel="stylesheet" href="css/responsiveslides.css" />
			<link rel="stylesheet" type="text/css" href="css/ValidationEngine.jquery.css" media="screen" title="no title"/>	
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
			<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">	
			
							
			<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
			<script src="js/cufon-yui.js" type="text/javascript"></script>
			<script src="js/cufon-replace.js" type="text/javascript"></script>
			<script src="js/Vegur_700.font.js" type="text/javascript"></script>
			<script src="js/Vegur_400.font.js" type="text/javascript"></script> 
			<script src="js/FF-cash.js" type="text/javascript"></script> 
			<script src="js/script.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/easyTooltip.js"></script>
			<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
			<script src="js/hover-image.js" type="text/javascript"></script>
			<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
			<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/tms-0.3.js"></script>
			<script type="text/javascript" src="js/tms_presets.js"></script>
			<script src="js/css3-mediaqueries.js"></script>
			
			<script src="js/jquery.validationEngine-fr.js"></script>
			<script src="js/jquery.validationEngine.js"></script>
				
			<script src="js/responsiveslides.js"></script>
			<script>
				$(function () {
				  $("#slider").responsiveSlides({
					auto: true,
					pager: false,
					nav: true,
					speed: 500,
					maxwidth: 960,
					namespace: "centered-btns"
				  });
				});
			</script>	
			

			</script>
			<!--[if lt IE 7]>
				<div style=' clear: both; text-align:center; position: relative;'>
					<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
						<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
					</a>
				</div>
			<![endif]-->
			<!--[if lt IE 9]>
				<script type="text/javascript" src="js/html5.js"></script>
				<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
			<![endif]-->
		</head>
		
		<body id="page1">
			<?php
			// On inclut le fichier de header du site.
			include_once("header.php");		
			?>
			<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
				<div class="main">
					<div class="content-padding-2">
						<div class="zerogrid">
							<div class="wrapper">
								<article>
									<div class="padding-grid-1">											
										<h3>Contact <strong>Infos</strong></h3>
											<div class="wrapper p2">
												<figure class="style-img-2 fleft">											
													<iframe width="252" height="195" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.549117821772!2d4.123374515911877!3d50.46812029397239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2484716c8d7c1%3A0xcbb84bad7ef42a6b!2sRue+Saint-Alphonse+84%2C+7110+La+Louvi%C3%A8re!5e0!3m2!1sfr!2sbe!4v1499015056870"></iframe>
												</figure>
											</div>
											
											<dl class="list-4">
												<dt>
												<?php
												// Récupération des informations personnalisées de la base de données et affichage.
												$adresse = $bdd->query("SELECT * FROM footer WHERE id_footer='3' ")or die(mysql_error());
												$adresse = $adresse->fetch();
												echo $adresse['text'];
												?>
												</dt>
													
												<dd>
												<?php 
												$contact = Textes::get('contact',@$_SESSION['lang']);	
												echo $contact;
												?>
													
												<?php					
												$phone = $bdd->query("SELECT * FROM footer WHERE id_footer='4' ")or die(mysql_error());
												$phone = $phone->fetch();
												echo $phone['text'];
												?>
												</dd>
												
												<dd>E-mail: 
												<?php					
												$email = $bdd->query("SELECT * FROM footer WHERE id_footer='5' ")or die(mysql_error());
												$email = $email->fetch();
												echo $email['text'];
												?>
												</dd>
											</dl>
									</div>
								</div>
							</div>
					</div>
				</div>
			</section>
			
				<?php
				// On inclut de fichier de footer du site.
				include_once("footer.php");		
				?>
				
				<!-- Liens et script pour le référencement. -->
				<a href="http://invokingdemons.eu/" style="display:none;">Invoking Demons</a>
				<a href="http://homesweethomedesign.be/" style="display:none;">Home Sweet Home Design</a>
		
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-75921904-1', 'auto');
				  ga('send', 'pageview');
				</script>
		</body>