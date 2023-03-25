<?php

$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name']==''){
    $errors['name']= "Veuillez renseigner votre nom";
}

if(!array_key_exists('subject', $_POST) || $_POST['subject']==''){
    $errors['subject']= "Veuillez renseigner un object";
}

if(!array_key_exists('phone', $_POST) || $_POST['phone']==''){
    $errors['phone']= "Veuillez renseigner votre numéro de tééphone";
}

if(!array_key_exists('email', $_POST) || $_POST['email']=='' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email']= "Veuillez renseigner un email valide";
}

if(!array_key_exists('message', $_POST) || $_POST['message']==''){
    $errors['message']= "Veuillez renseigner votre message";
}

session_start();

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: index.php#contact');
}else{
    $_SESSION['success'] = 1;
    $destinataire = 'justin.ferreirasimoes@gmail.com';
    $subject = $_POST['subject'];
    $expediteur = $_POST['email'];
    $headers .= 'From: '.$expediteur; // Expediteur
    $message =  'Nom: '.$_POST['name']."\n".'Mail: '.$expediteur."\n".'Phone: '.$_POST['phone']."\n\n".$_POST['message'];
    mail($destinataire, $subject, $message, $headers);
    header('location: index.php#contact');
}
