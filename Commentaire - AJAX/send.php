<?php 

try{
	$bdd = new PDO('mysql:host=localhost;dbname=commentaire','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
}
catch(Exception $e){
	die ("Erreur : " . $e -> getMessage());
}

if(!empty($_POST['nom']) && !empty($_POST['commentaire'])){

	$nom = htmlentities(trim($_POST['nom']));
	$commentaire = htmlentities(trim($_POST['commentaire']));

	$query = $bdd -> prepare("INSERT INTO commentaire(nom, commentaire, date_commentaire) VALUES(:nom,:commentaire, NOW())");
	$query -> bindParam(':nom',$_POST['nom'], PDO::PARAM_STR);
	$query -> bindParam(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
	$query -> execute();

	echo "<div class='success'>Vos données ont été envoyées avec succès !</div>";
}
else{
	echo "<div class='error'>Veuillez remplir tous les champs !</div>";
}

 ?>