<header>
	<section class="main">
		<div class="bg-1">			
			<h1><a href="index.php">secret faces</a></h1>							
		</div>
		
		<!-- Menu du site -->
		<nav>
			<article class="menu-bg-tail">
				<div class="menu-bg" style="margin-top:25px !important;">
					<div class="zerogrid">
						<div class="col-full">							
							<ul class="menu">
								<li class="item">
									<a href="index.php">
									<?php 
									// Récupération des titres de menu en utilisant la classe qui gère les langues.
									$title_menu_1 = Textes::get('title.menu.1',$_SESSION['lang']);	
									echo $title_menu_1;											
									?>
									</a>
									</li>
												
									<li>												
									<a href="hagiographie.php">
									<?php 
									
									$title_menu_2 = Textes::get('title.menu.2',$_SESSION['lang']);	
									echo $title_menu_2;
									?>
									</a>
									</li>										
												
									<li>
									<a href="gallery.php">
									<?php 
									$title_menu_3 = Textes::get('title.menu.3',$_SESSION['lang']);	
									echo $title_menu_3;
									?>
									</a>
									</li>

									<li>
									<a href="albums.php">
									<?php 
									$title_menu_5 = Textes::get('title.menu.5',$_SESSION['lang']);	
									echo $title_menu_5;
									?>
									</a>												
									</li>
												
									<li  class="item-1">
									<a href="contact.php">
									<?php 
									$title_menu_4 = Textes::get('title.menu.4',$_SESSION['lang']);	
									echo $title_menu_4;
									?>
									</a>												
									</li>						
												
									<li class="last" id="flags">
									<a href="?lang=FR">
									<?php 
									$imglang = $bdd->query("SELECT * FROM images WHERE id_img='1' ")or die(mysql_error());
									$img = $imglang->fetch();
									echo '<img alt="FR" src="'.$img["lien_image"].'"/>';
									?>
									</a>
												
									<a href="?lang=EN">
									<?php 
									$imglang2 = $bdd->query("SELECT * FROM images WHERE id_img='2' ")or die(mysql_error());
									$img2 = $imglang2->fetch();
									echo '<img alt="EN" src="'.$img2["lien_image"].'"/>';
									?>
									</a>													
									</li>
							</ul>
																					
							<div class="menu-response">	
								<div id="select_langage">
									<a href="?lang=FR">
									<?php 
									$imglang = $bdd->query("SELECT * FROM images WHERE id_img='1' ")or die(mysql_error());
									$img = $imglang->fetch();
									echo '<img alt="FR" src="'.$img["lien_image"].'"/>';
									?>
									</a>
													
									<a href="?lang=EN">
									<?php 
									$imglang2 = $bdd->query("SELECT * FROM images WHERE id_img='2' ")or die(mysql_error());
									$img2 = $imglang2->fetch();
									echo '<img alt="EN" src="'.$img2["lien_image"].'"/>';
									?>
									</a>	
							</div>
												
							<div id="title-menu" style="">MENU</div>	
								<select onchange="location=this.value">													
									<option value="index.php">														
										<a href="index.php">
										<?php 
										$title_menu_1 = Textes::get('title.menu.1',$_SESSION['lang']);	
										echo $title_menu_1;											
										?>		
										</a>
									</option>												
													
									<option value="biography.php">													
									<?php 
									$title_menu_2 = Textes::get('title.menu.2',$_SESSION['lang']);	
									echo $title_menu_2;
									?>													
									</option>
													
									<option value="gallery.php">
									<?php 
									$title_menu_3 = Textes::get('title.menu.3',$_SESSION['lang']);	
									echo $title_menu_3;
									?>													
									</option>
													
													
									<option value="project.php">
									<?php 
									$title_menu_5 = Textes::get('title.menu.5',$_SESSION['lang']);	
									echo $title_menu_5;
									?>													
									</option>													
													
									<option value="contact.php">
									<?php 
									$title_menu_4 = Textes::get('title.menu.4',$_SESSION['lang']);	
									echo $title_menu_4;
									?>													
									</option>																											
							</select>
						</div>
						
							<div class="clear"></div>
						</div>
							<div class="clear"></div>
					</div>
				</div>
			</article>
		</nav>		
						
		<section class="slider-wrapper">
			<article class="slider slider-top">
				<div class="rslides_container">
					<ul class="rslides" id="slider">
						<li><img src="images/slider-img1.jpg" alt="secret faces 1" /></li>
						<li><img src="images/slider-img2.jpg" alt="secret faces 2" /></li>
						<li><img src="images/slider-img3.jpg" alt="secret faces 3" /></li>										
					</ul>
				</div>
			</article>
		</section>
	</section>
</header>
				
				
