<?php

header('Content-type: application/json');

$to = 'aschlegel09@gmail.com, aschlegel09@yahoo.com';

$subject = $_POST['message'];

if($to) {
    $name = $_POST['firstName'] + $_POST['lastName'];
    $email = $_POST['email'];

    $fields = array(
        0 => array(
            'text' => "First Name",
            'val' => $_POST['firstName']
        ),
        1 => array(
            'text' => "Last Name",
            'val' => $_POST['lastName']
        ),
        2 => array(
            'text' => 'Email Address',
            'val' => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ),
        3 => array(
            'text' => 'Message',
            'val' => filter_var($_POST['message'],FILTER_SANITIZE_STRING)
        )
        );

        
$arrayResult = array ('response' => 'success');

echo json_encode($arrayResult);

}

?>