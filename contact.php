<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta charset="utf-8" />		

		<!-- Polices Google Fonts -->

		<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">


		<link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">


		<!-- Font Awesome -->

		<script async src="https://kit.fontawesome.com/2d084ff9b8.js" crossorigin="anonymous"></script>

		<!-- Google Analytics -->

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180577136-1"></script>
		<script>
 		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-180577136-1');
		</script>

		<!-- Style CSS -->

		<link rel="stylesheet" href="./css/style_minified.css" />

		<!-- Titre de la page -->

		<title>Miskeyz - Contact</title>+

		<!-- Robots -->

		<meta name="Robots" content="index,follow" />

		<!-- Favicon -->

		<link rel="shortcut icon" type="./image/png" href="./images/logo_favicon.png"/>

		<!-- RESPONSIVE -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	</head>

		<body>

			<header class="header-pages header-pages--contact">

				<nav class="header__nav">

					<a href="home" class="header__logo-mobile-link"><img src="./images/logo_petit.png" alt="" class="header__logo-mobile-img"></a>

					<input type="checkbox" name="dropdown" class="header__dropdown-btn" id="menu-checkbox" />
					<label for="menu-checkbox" class="header__dropdown-label"><i class="fas fa-bars"></i><span class="active-title">Contact<span/></label>
				
					<ul class="header__list">
						
						<li class="header__puces header__puces--mobile"><a href="home.html" class="header__link">Home</a></li>
						<li class="header__puces"><a href="videos" class="header__link header__link--underlined">Vidéos</a></li>
						<li class="header__puces"><a href="musiques" class="header__link header__link--underlined">Musiques</a></li>
						<li class="header__puces"><a href="home" class="header__link header__link--circled"><img src="./images/logo_petit.png" alt="" class="header__img"></a></li>
						<li class="header__puces"><a href="photos" class="header__link header__link--underlined">Photos</a></li>
						<li class="header__puces"><a href="contact" class="header__link header__link--active">Contact</a></li>

					</ul>

				</nav>

				<h1 class="header-pages__heading">Contact</h1>

			</header>

    			<form method="post" class="formulaire">

    				<?php

    				if (!isset($_POST['name']))
    				{

    				?>
    				<p><label for="name" class="formulaire__label">Votre nom :</label></p>

					<p><input type="text" name="name" id="name" class="formulaire__input formulaire__input--name" required/></p>

					<p><label for="mail" class="formulaire__label">Votre e-mail :</label></p>
					<p><input type="mail" name="mail" id="mail" class="formulaire__input formulaire__input--mail" required/></p>

					<p><label for="subject" class="formulaire__label">Sujet :</label></p>
					<p><input type="text" name="subject" id="subject" class="formulaire__input formulaire__input--subject" required/></p>

	      			<p><label for="message" class="formulaire__label">Tapez votre message ici :</label></p>

	        		<p><textarea rows="10" cols="30" name="message" id="message" class="formulaire__textarea" required></textarea></p>

	        		<p><input type="submit" class="formulaire__input formulaire__input--submit"></p>

<?php

}

if (isset($_POST['name']) AND isset($_POST['mail']) AND isset($_POST['subject']) AND isset($_POST['message']))
{
		    			
if(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['mail']))
{

$retour = mail('miskeyz.contact@gmail.com',
'Envoi depuis la page contact', 'Sujet : 
' . htmlspecialchars($_POST['subject']) . '

From : 
' . htmlspecialchars($_POST['mail']) . ' 

Message : 
' . htmlspecialchars($_POST['message']));
		       								

echo '<p class="form-message">Merci pour votre message !</p>';
}	

else
{

?>

		            	<p class="form-message">Votre email n'est pas au bon format !</p>

		            	<p><label for="name" class="formulaire__label">Votre nom :</label></p>

						<p><input type="text" name="name" id="name" class="formulaire__input formulaire__input--name" required/></p>

						<p><label for="mail" class="formulaire__label">Votre e-mail :</label></p>
						<p><input type="mail" name="mail" id="mail" class="formulaire__input formulaire__input--mail" required/></p>

						<p><label for="subject" class="formulaire__label">Sujet :</label></p>
						<p><input type="text" name="subject" id="subject" class="formulaire__input formulaire__input--subject" required/></p>

	      				<p><label for="message" class="formulaire__label">Tapez votre message ici :</label></p>

	        			<p><textarea rows="10" cols="30" name="message" id="message" class="formulaire__textarea" required></textarea></p>

	        			<p><input type="submit" class="formulaire__input formulaire__input--submit"></p>

	        			<?php

						}
		    		}	
		    		
		    		?>

					

    			</form>

    		<footer class="footer">
				
				<div class="social">

					<a href="https://www.facebook.com/miskeyz/" class="social__link" target="blank" aria-label="Lien vers facebook"><i class="fab fa-facebook-f" aria-hidden="true" title="Lien vers facebook"></i></a>

					<a href="https://www.youtube.com/channel/UCgN7l0aJ_n944408sRfnl7w" class="social__link" target="blank" aria-label="Lien vers youtube"><i class="fab fa-youtube" aria-hidden="true" title="Lien vers youtube"></i></a>

					<a href="https://www.instagram.com/miskeyz/?hl=fr" class="social__link" target="blank" aria-label="Lien vers instagram"><i class="fab fa-instagram" aria-hidden="true" title="Lien vers instagram"></i></a>

					<a href="https://open.spotify.com/artist/1craLZgS5uuShFslnMTzjZ" class="social__link" target="blank" aria-label="Lien vers spotify"><i class="fab fa-spotify" aria-hidden="true" title="Lien vers spotify"></i></a>

					<a href="https://www.deezer.com/fr/artist/7689134" class="social__link" target="blank"><i class="fab fa-deezer" aria-label="Lien vers deezer" aria-hidden="true" title="Lien vers deezer"></i></a>

					<a href="https://music.apple.com/fr/artist/miskeyz/977762700" class="social__link" target="blank" aria-label="Lien vers apple"><i class="fab fa-apple" aria-hidden="true" title="Lien vers apple"></i></a>

					<a href="https://soundcloud.com/miskeyz" class="social__link" target="blank" aria-label="Lien vers soundcloud"><i class="fab fa-soundcloud" aria-hidden="true" title="Lien vers soundcloud"></i></a>
					
					<a href="https://twitter.com/miskeyzofficiel" class="social__link" target="blank" aria-label="Lien vers twitter"><i class="fab fa-twitter" aria-hidden="true" title="Lien vers twitter"></i></a>

				</div>

				<div class="footer__bloc-nav">

					<div class="credits">

						<nav class="footer__nav">

							<ul class="footer__list">

								<li class="footer__puces"><a href="videos" class="credits__link">Vidéos</a></li>
								<li class="footer__puces"><a href="musiques" class="credits__link">Musiques</a></li>
								<li class="footer__puces"><a href="home" class="credits__link">Home</a></li>
								<li class="footer__puces"><a href="photos" class="credits__link">Photos</a></li>
								<li class="footer__puces"><a href="contact" class="credits__link credits__link--active">Contact</a></li>

							</ul>

						</nav>

					</div>


					<div class="credits">

						<nav class="footer__nav">

							<ul class="footer__list">

								<li class="footer__puces"><a href="partenaires" class="credits__link">Partenaires</a></li>

								<li class="footer__puces"><a href="mentions_legales" class="credits__link">Mentions légales</a></li>

								<li class="footer__puces"><a href="music_videos" class="credits__link">Galerie média</a></li>

							</ul>

						</nav>

					</div>

				</div>

			</footer>

		</body>
	</html>




