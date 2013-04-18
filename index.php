<!DOCTYPE html>
<html>
	<head>
		<title>Est-ce que c'est bientôt la frite du vendredi ?</title>
		<link rel="stylesheet" href="frite.css">
	</head>
	<body>
		<div id="reponse">
			<?php
				switch(date('N'))
				{
					case 1:

							break;

					case 2:

							break;

					case 3:

							break;

					case 4:

							break;

					case 5:
							?>
							<img src="frite.gif" />
							<h1>OUI</h1>
							<?php
							break;

					case 6: 

							break;

					case 7: 
					default:
							
							break;
				}
			?>
		</div>
		<script type="text/javascript">
			/*var _gauges = _gauges || [];
			(function() {
				var t   = document.createElement('script');
				t.type  = 'text/javascript';
				t.async = true;
				t.id    = 'gauges-tracker';
				t.setAttribute('data-site-id', '516fd302108d7b5d5d000044');
				t.src = '//secure.gaug.es/track.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(t, s);
			})();*/
		</script>
	</body>
</html>