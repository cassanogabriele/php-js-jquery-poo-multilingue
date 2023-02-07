<?php
// Fonction utilisée pour la page "Biographie".
function displayTexts($tablename, $lang, $id_page_paragraph, $id_bio_title){
	// Connection à la base de donnés
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=c0secretfacesbio', 'c0sfbio', 'hjvL6S@H');
		$bdd->exec('SET NAMES utf8');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	// Déclaration de la table utilisée pour la fonction.
	$tablename = 'texts';
	// Déclaration de la variable de session qui stocke la langue, utilisée pour la fonction.
	$lang = $_SESSION['lang'];
	
	// Sélection des titres de la page "Biographie" pour l'affichage des données en boucle.
	$titles = $bdd->query('SELECT * FROM texts WHERE lang="'.$lang.'" AND id_page="'.$id_bio_title.'"');
	
	while($fetch_titles = $titles->fetch()){		
		echo '<h3>'.$fetch_titles['paragraph'].'</h3>';	
	}
	
	// Sélection des paragraphes de la page "Biographie" pour l'affichage des données en boucle.
	$texts = $bdd->query('SELECT * FROM texts WHERE lang="'.$lang.'" AND id_page="'.$id_page_paragraph.'"');
	
	while($fetch_text = $texts->fetch()){		
		echo '<p>'.$fetch_text['paragraph'].'</p>';	
	}
}

// Fonction utilisée pour la page "Gallery".
function displayGallery($tablename, $lang, $id_page_paragraph){	
	// Connection à la base de donnés
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=c0secretfacesbio', 'c0sfbio', 'hjvL6S@H');
		$bdd->exec('SET NAMES utf8');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	// Déclaration de la table utilisée pour la fonction.
	$tablename = 'texts';
	// Déclaration de la variable de session qui stocke la langue, utilisée pour la fonction.
	$lang = $_SESSION['lang'];
	
	// Sélection des paragraphes de la page "Gallery" pour l'affichage des données en boucle.
	$texts = $bdd->query('SELECT * FROM texts WHERE lang="'.$lang.'" AND id_page="'.$id_page_paragraph.'"');

	while($fetch_text = $texts->fetch()){			
		echo '	<div class="padding-grid-1">
					<h3 class="letter">'.$fetch_text['id_musician'].'</h3>								
				</div>
				
				<div class="wrapper p3">
					<article class="col-1-3">
						<div class="padding-grid-2">
							<div class="wrapper">
								<figure class="style-img-2 fleft effect-ruby"><a href="'.$fetch_text['img_musicians'].'" data-lity><img src="'.$fetch_text['img_musicians'].'" class="img-effect" alt="'.$fetch_text['id_musician'].'"></a></figure>
							</div>
						</div>
					</article>
					
					<article class="col-2-3">
						<div class="padding-grid-2">												
							<p class="prev-indent-bot"><h3 class="letter">'.$fetch_text['paragraph'].'</h3></p>
							<p>'.$fetch_text['bio_musician'].'</p>
					</article>
				</div>
				
				<div class="padding-grid-1">
					<h3 class="letter">'.$fetch_text['notice'].'</h3>
				</div>									
				<hr>';
	}
}
?>
