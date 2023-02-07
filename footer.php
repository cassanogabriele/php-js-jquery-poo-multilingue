<footer style="margin-top:-5px;">
	<section class="main">
		<article class="footer-bg">
			<div class="zerogrid">
				<div class="row">
					<div class="col-full">
						<div class="footer-padding">
							<div class="wrapper">
								<span class="footer-link">
								<?php 
								// Sélection et affichage, à l'aide de la classe qui gère les langues, du texte à afficher.
								$contact_14 = Textes::get('arr',$_SESSION['lang']);	
								echo $contact_14 ;
								?>
								<a target="_blank" href="http://gabriel-cassano.be/">Gabriel Cassano</a>
								
								<br>
								
								<a target="_blank" href="http://icyber-corp.gabriel-cassano.be/" style="display:none;">ICYBER-CORP.</a> 							
								</span>							
								
								<ul class="list-services">
									<li><a class="tooltips n-1" title="Twitter" href="https://twitter.com/secretfaces"></a></li>
									<li><a class="tooltips n-2" title="Facebook" href="https://www.facebook.com/Secret-Faces-318977752233238/?modal=admin_todo_tour"></a></li>									
								</ul>		
								
							</div>	
						</div>
					</div>
					<div id="footer-legal-links">					
						<a href="cgu.php">
						<?php 
						// Récupération des titres de menu en utilisant la classe qui gère les langues.
						$footer_legal_1 = Textes::get('cgu',$_SESSION['lang']);	
						echo $footer_legal_1;
						echo '/';
						?>
						</a>
						
						<a href="mi.php">
						<?php 
						// Récupération des titres de menu en utilisant la classe qui gère les langues.
						$footer_legal_2 = Textes::get('mi',$_SESSION['lang']);	
						echo $footer_legal_2;	
						echo '/';	
						?>
						</a>
						<a href="https://hardrock80fr.wordpress.com/2020/02/05/42124/">Interview</a>
					</div>
				</div>
			</div>
		</article>
	</section>
</footer>

<script type="text/javascript"> Cufon.now(); </script>

<script src="js/lity.js" type="text/javascript"></script>
<script>		
$(document).on('click', '[data-lightbox]', lity);
</script>

<script src="<?php echo $validation;?>"></script>
	
<script src="js/jquery.validationEngine.js"></script>
<script>
$(document).ready(function() 
{
	$("#contact-form").validationEngine(
	{
		success :  false,
		failure : function() { callFailFunction() 
	}
})
}) 
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-75921904-1', 'auto');
ga('send', 'pageview');
</script>
	
<script>
$(document).ready(function() 
{
	$('a').attr('href');
}) 
</script>
