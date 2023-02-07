<?php
class Textes
{
		
	public static function get($id, $lang)
	{
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
				
		$lang = strtoupper($lang);			
			
	    // On regarde si il y a déjà un texte assigné à l'id et à la langue (ex: si déjà affichage en anglais)		
		$assigned  = $bdd->query("SELECT * FROM texts WHERE id_paragraph='".$id."' AND lang='".$lang."'") or die(mysql_error()) ;
		// On compte le nombre de ligne récupéré par la requête dans la table pour voir si il correspond à 0 ou non.
		$count_assigned  = $assigned ->rowCount();
		
		// Si il y a pas déjà un texte assigné à l'id.
		if ($count_assigned  == 0)
		{
			// Récuperation de la langue par default
			$ldef = $bdd->query("SELECT text FROM various WHERE id_description='lang.default'");
			$sql2 = $ldef->rowCount();
			
			if ($sql2 == 0)	{
				$lang='FR'; // On signale que c'est le français		
			}else{
				// Sinon, on met la valeur de options diverses dans la langue, permet de choisir un langue par défaut dans le site si il n'en trouve pas
				$r = $ldef->fetch();					
				$lang = $r['text'];
			}			
					
			// On regarde si il y a un texte qui correspond à l'id et à la langue par défaut
			$s2= $bdd->query("SELECT * FROM texts WHERE id_paragraph='".$id."' AND lang='".$lang."'");
			$sql3 = $s2->rowCount();
			
			var_dump($sql3);
									
			// Si on ne trouve pas la langue, on renvoit une chaîne de caractère par défaut: "Undef!"
			if ($sql3 == 0)
				return '!Undef!';
				else
				{
					// Sinon si on la trouve, on la retourne
					$rr = $s2->fetch();					
					
					if ($rr['visible'])
						return $rr['paragraph'];
					else
						return "";
				}
		}
			else
			{
				$r = $assigned ->fetch();
				return $r['paragraph'];
			}
	}
}
?>
