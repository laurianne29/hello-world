<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Commentaire en Ajax</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<h1>Commentaire en Ajax</h1>

	<div class="return"></div>

		<form class="formulaire" action="" method="post">
			<label>Nom</label>
			<input class="nom" type="text" name="nom" placeholder="Votre nom">

			<label>Message</label>
			<textarea class="commentaire" name="commentaire" cols="30" rows="10" placeholder="Votre message..."></textarea>

			<input class="submit" type="submit" value="Envoyer...">
		</form>

	<div class="content"></div>
</body>
</html>