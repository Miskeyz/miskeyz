<!DOCTYPE html>
<html lang='fr' class="html">
	<head>
		<meta charset="utf-8" />		

		<!-- Polices Google Fonts -->

		<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">


		<link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">


		<!-- Font Awesome -->

		<script async src="https://kit.fontawesome.com/2d084ff9b8.js" crossorigin="anonymous"></script>

		<!-- Google Analytics -->

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180577136-1"></script>
		<script async>
 		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-180577136-1');
		</script>

		<!-- Style CSS -->

		<link rel="stylesheet" href="./css/style_minified.css" />

		<!-- Titre de la page -->

		<title>Miskeyz - Site Officiel</title>

		<!-- Description -->

		<meta name="description" content="Miskeyz est un producteur de musique qualifiée d'éléctro-organique. Membre de la scène actuelle française, il fait parti du label de musique Viagramophone. Venez découvrir son univers!" />

		<!-- Robots -->

		<meta name="Robots" content="index,follow" />

		<!-- Canonique -->

		<link rel="canonical" href="https://miskeyz.com/index" />

		<!-- Favicon -->

		<link rel="shortcut icon" type="./image/png" href="./images/logo_favicon.png"/>

		<!-- RESPONSIVE -->

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	</head>

	<body>

<?php

include('loader.php');

?>

		<header class="header">

			<nav class="header__nav">

				<a href="home" class="header__logo-mobile-link"><img src="./images/logo_petit.png" alt="" class="header__logo-mobile-img"></a>

				<input type="checkbox" name="dropdown" class="header__dropdown-btn" id="menu-checkbox" />
				<label for="menu-checkbox" class="header__dropdown-label"><i class="fas fa-bars"></i><span class="active-title">Home</span></label>
				
				<ul class="header__list">
					
					<li class="header__puces header__puces--mobile"><a href="home.html" class="header__link header__link--active">Home</a></li>
					<li class="header__puces"><a href="videos" class="header__link header__link--underlined">Vidéos</a></li>
					<li class="header__puces"><a href="musiques" class="header__link header__link--underlined">Musiques</a></li>
					<li class="header__puces"><a href="home" class="header__link header__link--circled"><img src="./images/logo_petit.png" alt="" class="header__img"></a></li>
					<li class="header__puces"><a href="photos" class="header__link header__link--underlined">Photos</a></li>
					<li class="header__puces"><a href="contact" class="header__link header__link--underlined">Contact</a></li>

				</ul>

			</nav>

			<h1 class="header__heading">Miskeyz</h1>

			<div class="header__btn" role="button" aria-label="Entrer">
				
				<a href="#page-size" class="header__link">
				<p class="header__txt">Entrer</p>
				<p class="header__chevrons">
					<i class="fas fa-chevron-down header__icon" aria-hidden="true" title="Clickez pour entrer dans le site"></i>
					<i class="fas fa-chevron-down header__icon" aria-hidden="true" title="Clickez pour entrer dans le site"></i>
					<i class="fas fa-chevron-down header__icon" aria-hidden="true" title="Clickez pour entrer dans le site"></i></p>
				</a>
			</div>

		</header>

		<main id="page-size">

			<section class="last-release">

				<div class="last-release__blocleft">

					<h2 class="last-release__heading">Nouvelle sortie</h2>

				</div>

				<div class="last-release__blocright">

					<iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/944433763&color=%23111b13&auto_play=false&hide_related=false&show_comments=false&show_user=false&show_reposts=false&show_teaser=true" class="last-release__iframe"></iframe>

				</div>

			</section>

			<section class="last-videos">

				<div class="last-videos__rows last-videos__rows--flex-reverse">
					<div class="last-videos__bloclarge">

						<iframe src="" data-src="https://www.youtube.com/embed/hWbDheP77xE" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					</div>

					<div class="last-videos__blocpetit">

						<h2 class="last-videos__heading">Teaser Thathanka</h2>
						<p class="last-videos__txt"><a href="https://assopne.com/" target="blank" class="last-videos__link">Crédit PNE</a></p>

					</div>
				</div>

				<div class="last-videos__rows last-videos__rows--flex-normal">

					<div class="last-videos__blocpetit last-videos__blocpetit--jungle">

						<h2 class="last-videos__heading last-videos__heading--jungle">Jungle Music Vidéo</h2>

					</div>

					<div class="last-videos__bloclarge last-videos__bloclarge--jungle">

						<iframe src="" data-src="https://www.youtube.com/embed/-PYKSyY8eGI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					</div>
				</div>

				<div class="last-videos__rows last-videos__rows--flex-reverse">
					<div class="last-videos__bloclarge last-videos__apropos">

						<div class="last-videos__inset-border">

							<img src="./images/logo_petit_bleu.png" alt="" class="last-videos__img" />

							<p class="last-videos__bio">Avec sa palette d’instruments ethniques, <strong>Miskeyz</strong> peint des paysages sonores envoûtants, chargés d’influences <strong>symphoniques et cinématographiques</strong>.

							Embarquez avec lui pour une évasion musicale bercée de sonorités de <strong>guimbarde</strong>, <strong>d’hang drum</strong> et d’autres instruments atypiques mêlées à de <strong>l’électro-symphonique</strong> : un mélange rythmé aux textures sonores délicates et une <strong>prestation vidéo</strong> sur mesure en concert.

							L’artiste accorde une importance toute particulière à l’harmonie de ses arrangements dans ses <strong>productions musicales</strong>, pour guider les émotions droit au coeur de ses auditeurs et les faire voyager.</p>

						</div>

					</div>

					<div class="last-videos__blocpetit last-videos__blocpetit--apropos">

						<h2 class="last-videos__heading last-videos__heading--apropos">À propos</h2>

					</div>

				</div>

			</section>

			<section class="disco">

				<h2 class="disco__heading">Acheter</h2>

				<div class="disco__row">

					<a href="https://kuronekomedia.lnk.to/AcrossTheValley" class="disco-card" target="blank"><img src="./images/covers/atv.png" alt="" class="disco-card__img"><p class="disco-card__txt disco-card__txt--medpos">Across The Valley (2020)</p></a>

					<a href="http://hyperurl.co/miskeyz-memories" class="disco-card" target="blank"><img src="./images/covers/memories.png" alt="" class="disco-card__img"><p class="disco-card__txt">Memories (2018)</p></a>

					<a href="https://www.beatport.com/release/fireworks/1816472" class="disco-card" target="blank"><img src="./images/covers/fireworks.png" alt="" class="disco-card__img"><p class="disco-card__txt">Fireworks (2016)</p></a>

					<a href="https://www.beatport.com/release/daylight/1495622" class="disco-card" target="blank"><img src="./images/covers/daylight.png" alt="" class="disco-card__img"><p class="disco-card__txt">Daylight (2015)</p></a>

				</div>

				<div class="disco__row">

					<a href="https://kuronekomedia.lnk.to/AcrossTheValley" class="disco-card" target="blank"><img src="./images/covers/stand_it.png" alt="" class="disco-card__img"><p class="disco-card__txt disco-card__txt--across">Stand it (2019)</p></a>

					<a href="http://hyperurl.co/miskeyz-memories" class="disco-card" target="blank"><img src="./images/covers/hanging.jpg" alt="" class="disco-card__img"><p class="disco-card__txt disco-card__txt--medpos">Hanging Tree (2018)</p></a>

					<a href="https://www.beatport.com/release/fireworks/1816472" class="disco-card" target="blank"><img src="./images/covers/fall.jpg" alt="" class="disco-card__img"><p class="disco-card__txt disco-card__txt--medpos">Fall For You (2016)</p></a>

					<a href="https://www.beatport.com/release/daylight/1495622" class="disco-card" target="blank"><img src="./images/covers/paradise.jpg" alt="" class="disco-card__img"><p class="disco-card__txt disco-card__txt--lowpos">Welcome to Paradise (2015)</p></a>

				</div>

			</section>

			<section class="social-medias">

				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0&appId=384892626036063&autoLogAppEvents=1" nonce="jP25ybTa"></script>

				<div class="fb-page" data-href="https://www.facebook.com/miskeyz/" data-tabs="timeline" data-width="450" data-height="800" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/miskeyz/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/miskeyz/">Miskeyz</a></blockquote></div>

				<script src="https://apps.elfsight.com/p/platform.js" defer></script>
				<div class="elfsight-app-ef92a2e8-405b-4273-9262-6a3491075ae2 insta-app"></div>

			</section>

			<div class="videos__link">

					<a href="#top" class="videos__link">Retour en haut</a>

				</div>

		</main>

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
								<li class="footer__puces"><a href="home" class="credits__link credits__link--active">Home</a></li>
								<li class="footer__puces"><a href="photos" class="credits__link">Photos</a></li>
								<li class="footer__puces"><a href="contact" class="credits__link">Contact</a></li>

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

			<script>

				function init() 
				{
					var vidDefer = document.getElementsByTagName('iframe');
					for (var i=0; i<vidDefer.length; i++) 
					{
						if(vidDefer[i].getAttribute('data-src')) 
						{
							vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
						} 
					} 
				}

				window.onload = init;
				
			</script>

	</body>

</html>