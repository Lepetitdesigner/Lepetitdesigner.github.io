<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Traitement</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php
			 $erreurs = array();
			 if (empty($_POST['nom'])) {
			 	$erreurs[] = 'Veuillez indiquer votre nom et prénom.';
			 }
			 if (empty($_POST['email'])) {
			 	$erreurs[] = 'Veuillez indiquer votre adresse email.';
			 }
			 if (empty($_POST['telephone'])) {
			 	$erreurs[] = 'Veuillez indiquer votre numéro de téléphone';
			 }
			 if (empty($_POST['message'])) {
			 	$erreurs[] = 'Veuillez indiquer votre message.';
			 }
			 if (count($erreurs)>0 ) {
			 	echo '<div class="alerte alert-danger">';
			 	echo '<p>';
			 	foreach ($erreurs as $key => $erreur) {
			 		echo $erreur;
			 		echo '<br/>';
			 	}
			 	echo '</p><a
			 	href="javascript:parent.history.back();">Revenir</a>';
			 	echo '</div>';
			 } else {
			echo '<p>vous avez saisis les information suivantes :</p>';
			echo '<ul>';
			if (!empty($_POST['nom'])) {
				echo '<li>Nom : '. $_POST['nom'] .'</li>';
			}
			if (!empty($_POST['telephone'])) {
				echo '<li>Téléphone : '. $_POST['telephone'] .'</li>';
			}
			if (!empty($_POST['email'])) {
				echo '<li>E-mail : '. $_POST['email'] .'</li>';
			}
			if (!empty($_POST['message'])) {
				echo '<li>Message : '. $_POST['message'] .'</li>';
			}
			echo '</ul>';
			echo '<div class="espace1"></div>';
			echo '<a
			 	href="javascript:parent.history.back();">Revenir</a>';


			$to  = 'quentin.rulleau@yahoo.com'; // notez la virgule

     		$subject = 'Demande de devis';

     		// message
     		$message = '';
     		$message .= '<p> Monsieur ' . $_POST['nom'] .PHP_EOL;
     		$message .= 'ma envoyé le message suivant : ' . $_POST['message'] . '<br>' .PHP_EOL;
     		$message .= 'pour le contacter voici son email : ' . $_POST['email'] .PHP_EOL;
     		$message .= 'ainsi que son numéro de téléphone : ' . $_POST['telephone'] .PHP_EOL;
     		$message .= '</p>';

			$message = wordwrap($message, 70 , PHP_EOL);
			$headers[] = 'To: quentin.rulleau@yahoo.com';
     		$headers[] = 'From: quentin@lepetitdesigner.fr';

     		$headers[] = 'MIME-Version: 1.0';
     		$headers[] = 'Content-type: text/html; charset=utf-8';

     // En-têtes additionnels
    
     mail($to, $subject, $message, implode("\r\n", $headers));
}

			 ?>
			 </div>
		</div>
	</div>
</body>
</html>