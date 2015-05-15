<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gràcies pel missatge! Aviat et contestarem! '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $message = @trim(stripslashes($_POST['message']));
    $telefon = @trim(stripslashes($_POST['telefon']));

    $email_from = 'admin@guanyeminca.org';
    $email_to = 'manuel.pol@gmail.com';//replace with your email

    $body = 'Nom: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Telefon: ' . $telefon . "\n\n" . 'Missatge: ' . $message;

    $success = @mail($email_to, 'Email de la web', $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
