<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABH Contacts</title>
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="contacts.css?ts=<?=time()?>">
	<!--pour le reCAPTCHA-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div id="anchor"></div>
	<!-- le navigateur permanent-->
	<?php include("header.html");?>

	<!--la page principale-->
	<div id="contact_page">
		<section id="contact_section">
			<!--section info + google map-->
			<div id="left_side">
				<!--section pour coordonnées-->
				<form id="coordonnees_article_left">
					<fieldset id="coordonnees_article_left_fieldset_1">
						<legend>COORDONNÉES</legend>
						<article>
							<ul id="coordonnees_article_left_coordonnees_arrays_1">
								<li><strong>adresse :</strong> 26 rue de la Chasse à Eaux 50110 Cherbourg-en-Cotentin / Tourlaville</li>
								<li><strong>numéro :</strong> 07.52.59.14.46</li>
							</ul>
						</article>
					</fieldset>
					<fieldset id="coordonnees_article_left_fieldset_2">
						<legend>HORAIRES D'OUVERTURE</legend>
						<article>
							<ul id="coordonnees_article_left_coordonnees_arrays_2">
								<li><strong>Lundi à Jeudi :</strong> 8H30-18H00<br/></li>
								<li><strong>Vendredi :</strong> 8H30-17H00<br/></li>
								<li><strong>Fermé le week-end</strong></li>
								<li></br><strong>Les horaires fluctuent en fonction des poses et rendez-vous extérieurs</strong></li>
							</ul>
						</article>
					</fieldset>
				</form>
				
				<!--google map-->
				<figure class="google_map_figure">
					<h2>PLAN D'ACCÈS</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1291.950359125432!2d-1.5765263017871163!3d49.63732576666843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480c990207c1ff1b%3A0xbca07401a4af8a94!2sMenuiserie%20ABH!5e0!3m2!1sfr!2sfr!4v1618599545501!5m2!1sfr!2sfr" id="google_map" allowfullscreen="" loading="lazy">
					</iframe>
				</figure>
			</div>

			<!--section pour l'email-->
			<article id="coordonnees_article_right">
				<h2>Contactez-nous</h2>
				<form id="coordonnees_article_formulaire" method="POST">

					<!-- action=mail.php -->
					<!--les coordonnées de la personnes-->
					<fieldset id="coordonnees_article_formulaire_1fieldset">
						<legend>Vos coordonnées</legend>
						<input type="text" name="nom" placeholder="nom *" required></br>

						<input type="text" name="prenom" placeholder="prénom *" required></br>

						<input type="tel" name="telephone" placeholder="téléphone *" required/></br>

						<input type="email" name="email" placeholder="e-mail *" required>

						<!--<input type="text" name="pays" placeholder="pays *" required>-->
						
						<input type="text" name="adresse" placeholder="adresse (facultatif)">

						<input type="text" name="societe" placeholder="société (facultatif)">
					</fieldset>

					<!--information plus poussées-->
					<fieldset>
						<legend>Message</legend>
						<textarea placeholder="votre message *"  name="message" rows="15" required></textarea></br>

					</fieldset>

					<fieldset>
						<legend>Concentement</legend>
						<div id="coordonnees_article_formulaire_concentement_box">
							<p><strong>Vos informations seront supprimées si vous ne complétez pas le reCAPTCHA</strong></p>
							<div class="g-recaptcha" data-sitekey="6Lc5W8QbAAAAAIFkuS9m9uvqwiIicD4Ie6T45n9d"></div>
							<label>En envoyant le formulaire, j'accepte que l'entreprise ABH puisse me recontacter, et que les informations saisies soient exploitées dans le cadre de la relation commerciale qui peut en découler</label>

							<?php
							require('ReCaptcha/autoload.php');
							if(isset($_POST['submitpost'])) {
								if(isset($_POST['g-recaptcha-response'])) {
									$recaptcha = new \ReCaptcha\ReCaptcha('6Lc5W8QbAAAAABZQy-vK97_auqMons-XZ2uTuyxP');
									$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
									if ($resp->isSuccess()) {
										$final_message = 'Message envoye depuis la page Contact :
'
										. 'Nom : ' . $_POST['nom'] .'
'
										. 'Prenom : ' . $_POST['prenom'].'
'
										. 'Email : ' . $_POST['email'].'
'
										. 'Telephone : ' . $_POST['telephone'].'
'
										. 'Adresse : ' . $_POST['adresse'].'
'
										. 'Societe : ' . $_POST['societe'].'

'										. 'Message : ' . $_POST['message'];

										
										if ($retour) {
										$retour = mail('menuiserie.abh@outlook.fr', 'Envoi depuis la page Contact', $final_message, 'From : page contact');
											echo '<p style="color: red;">Votre message a bien été envoyé</p>';
										}
										else{
											echo "<p style='color: red;'>Votre message n'a pas été envoyé</p>";	
										}
									} else {
										echo '<p style="color: red;">Veillez remplir le reCAPTCHA</p>';
									}
								} else {
									echo '<p style="color: red;">NOP</p>';
								}
							}
							?>

							<input id="coordonnees_article_formulaire_concentement_submit" type="submit" value="Envoyer" name="submitpost">

							<p>
								* signifie que le champ est obligatoire pour que le formulaire soit envoyé
							</p>
						</div>
					</fieldset>
				</form>
			</article>
		</section>

		<!--le pied de page-->
		<?php include("footer.html");?>
	</div>
</body>
</html>