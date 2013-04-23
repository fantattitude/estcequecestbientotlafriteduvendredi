<!DOCTYPE html>
<html>
	<head>
		<title>Est-ce que c'est bientôt la frite du vendredi ?</title>
		<link rel="stylesheet" href="frite.css">
	</head>
	<body>
		<div id="reponse">
			<?php
				$jour = date('N');
				$heure = date('G');
				$minute = date('i');
				if($heure > 0 && $heure < 5)
				{
					?>
					<audio autoplay loop>
						<source src="celebration.ogg">
						<source src="celebration.mp3">
					</audio>
					<img src="frite.gif" />
					<h1>Repas d'après minuit, tout est permis !!</h1>
					<?php
				}
				else
				{
					switch($jour)
					{
						case 1:
						case 2:
						case 3:
								?>
								<h1>NON</h1>
								<h2>Bitch… Please… Sac à couenne va !</h2>
								<?php
								break;
						case 4:
								?>
								<h1>NON, mais bon…</h1>
								<h2>Si t'es en RTT vendredi, t'as le droit va…</h2>
								<?php
								break;
						case 5:
								
								if($heure < 10){
									?>
									<h1>Presque !</h1>
									<h2>Bientôt elle sera tienne… oh oui… bientôt elle sera tienne…</h2>
									<?php
								}
								else if($heure < 11){
									?>
									<audio autoplay loop>
										<source src="celebration.ogg">
										<source src="celebration.mp3">
									</audio>
									<img src="frite.gif" />
									<h1>Prépare ton bide.</h1>
									<h1>Lance l'invitation Gmail, faudrait pas y aller trop tard !</h1>
									<?php
								}
								else if($heure < 12){
									?>
									<audio autoplay loop>
										<source src="celebration.ogg">
										<source src="celebration.mp3">
									</audio>
									<img src="frite.gif" />
									<h1>OUI</h1>
									<h1>On sait très bien que ton client, tu ne l'écoutes plus là…</h1>
									<?php
								}
								else if($heure < 13 && $minute < 30){
									?>
									<audio autoplay loop>
										<source src="celebration.ogg">
										<source src="celebration.mp3">
									</audio>
									<img src="frite.gif" />
									<h1>OUI</h1>
									<h2>T'es encore ici ? Mais déchire le ce Mexicanos !</h2>
									<?php
								}
								else if($heure < 13 && $minute > 29 || $heure < 14 && $minute < 30)
								{
									?>
									<audio autoplay loop>
										<source src="celebration.ogg">
										<source src="celebration.mp3">
									</audio>
									<img src="frite.gif" />
									<h1>OUI</h1>
									<h2>Si tu n'es pas en train de la manger, tu as raté ta vie.</h2>
									<?php
								}
								else if($heure < 14 && $minute > 29 || $heure < 15 && $minute < 30){
									?>
									<h1>BURP.</h1>
									<?php
								}
								else{
									?>
									<h1>A la semaine prochaine chérie !</h1>
									<?php
								}
								break;

						case 6: 
						case 7: 
						default:
						?>
								<h1>NON</h1>
								<h2>Trop tard mais si tu veux, c'est weekend tu fais ce que tu veux de ton ptit corps…</h2>
						<?php
								break;
					}
				}
			?>
		</div>
		<footer>
			Un projet de <a href="http://twitter.com/alex_joub">@alex_joub</a>, <a href="http://twitter.com/Fantattitude">@Fantattitude</a> &amp; <a href="http://twitter.com/WIPEOUT2197">@WIPEOUT2197</a>
		</footer>
		<script type="text/javascript">
			var _gauges = _gauges || [];
			(function() {
				var t   = document.createElement('script');
				t.type  = 'text/javascript';
				t.async = true;
				t.id    = 'gauges-tracker';
				t.setAttribute('data-site-id', '516fd302108d7b5d5d000044');
				t.src = '//secure.gaug.es/track.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(t, s);
			})();
		</script>
	</body>
</html>