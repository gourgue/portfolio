
<?php 
//session_start();


if (isset($_POST['envoyer'])) {

	//var_dump($_POST);
	// exit();
	
	$error = [];
	if (!array_key_exists('name', $_POST)) {
		$error[] = 'Veuillez entrer votre nom';
	}

	if (empty($_POST['email'])) {
		$error[] = "Veuillez saisir un mail";
	} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error[] = "Adresse email invalide !";
	}

	if (empty($_POST['message'])) {
		$error[] = "Veuillez remplir un message!";
	} elseif (mb_strlen($_POST['message'], 'UTF-8') < 30) {
		$error[] = "Veuillez faire une phrase svp !";
	}

	//var_dump($error);die('okkk');

	if (!empty($error)){
		header('location: ../index.php#contact');
	} else {
		print_r('ttttttt');
		extract($_POST);

		$EmailTo = "mikegourgue@gmail.com";
		$Subject = "New Message Received";
		 
		// prepare email body text
		$Body .= "Name: ";
		$Body .= $name;
		$Body .= "\n";
		 
		$Body .= "Email: ";
		$Body .= $email;
		$Body .= "\n";
		 
		$Body .= "Message: ";
		$Body .= $message;
		$Body .= "\n";
		 
		// redirect to success page
		$success = false;
		if (!mail($EmailTo, $Subject, $Body, "From:".$email)){
			$error[] = 'mail non-envioyé';
			require('../views/index.view.php');
		} else {
		    $_SESSION['success'] = 'Message envoyé';
		    header('Location: ../index.php');
			exit;
		}
	}
}

//require('../views/index.view.php');


// $errorMSG = "";
 
// // NAME
// if (empty($_POST["name"])) {
//     $errorMSG = "Name is required ";
// } else {
//     $name = $_POST["name"];
// }
 
// // EMAIL
// if (empty($_POST["email"])) {
//     $errorMSG .= "Email is required ";
// } else {
//     $email = $_POST["email"];
// }
 
// // MESSAGE
// if (empty($_POST["message"])) {
//     $errorMSG .= "Message is required ";
// } else {
//     $message = $_POST["message"];
// }
  
// 	$EmailTo = "mikegourgue@gmail.com";
// 	$Subject = "New Message Received";
	 
// 	// prepare email body text
// 	$Body .= "Name: ";
// 	$Body .= $name;
// 	$Body .= "\n";
	 
// 	$Body .= "Email: ";
// 	$Body .= $email;
// 	$Body .= "\n";
	 
// 	$Body .= "Message: ";
// 	$Body .= $message;
// 	$Body .= "\n";
	 
// 	// send email
// 	$success = mail($EmailTo, $Subject, $Body, "From:".$email);
	 
// 	// redirect to success page
// 	if ($success){
// 	   echo "success";
// 	}
// 	else{
// 	    echo "invalid";
// 	}
 
