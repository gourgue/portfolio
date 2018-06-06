<?php 


ini_set('display_errors','on');
error_reporting(E_ALL);

include 'all_functions.php';

if (isset($_POST['envoyer'])) {

		if (not_empty(['name' , 'email' , 'objet' , 'message'])) {

				$errors = [];

				extract($_POST);

				if (mb_strlen($name) < 4 ) {
					$errors[] = "Veuillez entrez votre nom svp";
				}

				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$errors[] = "Veuillez entrez un email valide svp";
				}

				if (mb_strlen($message) < 15 ) {
					$errors[] = "Veuillez entrez un message valide svp";
				}

				if (isset($errors) && count($errors) !=0 ) {
					echo '<div class="alert alert-danger alert-dismissible fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					foreach ($errors as $error) {
						echo $error . "<br/>";
					}
					echo "</div></br>";
				}

				if (count($errors) == 0 ) {
					$Body = "";
					 
					$EmailTo = "mikegourgue@gmail.com";
					$Subject = "Nouveau message recu!";
					 
					// prepare email body text
					$Body .= "Name: ";
					$Body .= $name;
					$Body .= "\n";
					 
					$Body .= "Email: ";
					$Body .= $email;
					$Body .= "\n";
					 
					$Body .= "Objet: ";
					$Body .= $objet;
					$Body .= "\n";

					$Body .= "Message: ";
					$Body .= $message;
					$Body .= "\n";
					 
					// send email
					$success = mail($EmailTo, $Subject, $Body, "From:".$email);
					 
					// redirect to success page
					if ($success){
						echo '<div class="alert alert-success alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						votre mail a été envoyé!
						</div>';   
					}else{
						echo '<div class="alert alert-danger alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						votre message a echoué veuillez réessayer svp!
						</div>';					    
					}
		}
		else{
			 $erros[] = "Veuillez remplir tous les champs svp" ;
		}
	}
}
 ?>

 <?php require("index.php");?>
