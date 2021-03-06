<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABH Réalisations</title>
	<link rel="stylesheet" type="text/css" href="nos_realisations.css?ts=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>">
</head>
<body>
	<div id="anchor"></div>
	<!-- le navigateur permanent-->
	<?php include("header.html");?>
	
	<!--la page principale-->
	<div id="realisation_page">

		<!--introduction-->
		<article id="realisation_page_intro">
			<h3>Photos de nos services</h3>
			<p>
				Découvrez les services que nous avons réalisés pour différents clients </br>
				Des particuliers aux professionnels, tous sont présentés
			</p>
		</article>

		<!--lister les categories-->
		<div id="realisation_page_array">
			<h2>Nos réalisations :</h2>
			<!--
			<h2>Toutes les catégories :</h2>
			<div id="realisation_page_array_array">
				<ul>
					<li>Professionel / </li>
					<li>Loisir / </li>
					<li>Autres</li>
				</ul>
			</div>
			-->
		</div>

		<!--tous les realisations-->
		<div id="realisation_page_realisations">
			<!--1ère ligne-->
			<figure style="background-image: url(realisation/real_1/arriere.jpg)";>
				<figcaption>Véhicule de loisir</figcaption>
			</figure>
			<figure style="background-image: url(realisation/real_2/arriere.jpg)";>
				<figcaption>Aménagement professionnel</figcaption>
			</figure>
			<figure style="background-image: url(realisation/real_3/arriere.jpg)";>
				<figcaption>Pose vitrage</figcaption>
			</figure>
			<!--2ère ligne-->
			<figure style="background-image: url(realisation/real_4/panneau.jpg)";>
				<figcaption>Gravage sur panneaux</figcaption>
			</figure>
			<figure style="background-image: url(realisation/real_5/arriere.jpg)";>
				<figcaption>504 pick-up</figcaption>
			</figure>
			<figure style="background-image: url(realisation/real_6/interieur.jpg)";>
				<figcaption>Aménagement loisir</figcaption>
			</figure>
			<!--3ère ligne-->
			<figure style="background-image: url(realisation/real_7/arriere.jpg)";>
				<figcaption>Ford Custom</figcaption>
			</figure>
			<figure >
				<figcaption>Prochainement ...</figcaption>
			</figure>
			<figure >
				<figcaption>Prochainement ...</figcaption>
			</figure>
		</div>

		<!--le pied de page-->
		<?php include("footer.html");?>
	</div>
</head>
<body>

</body>
</html>