<?php

$name = $visitor_email = $message = ";"
if (isset($_POST['submit']))
    {
        header('Location: http://aschlegel09.github.io/index.html');
    }

$name = $_POST['firstName'] + $_POST['lastName'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'aschlegel@aschlegel.github.io';
$email_subject = 'New From Submission';
$email_body = "You have receieved a new message from the user $name. \n $message";

$to = "aschlegel09@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers) or die("error!");
echo '<script type="text/javascript">
        alert("'.$error_msg.'");
            window.location= "index.html";'


            // header('Content-type: application/json');
// $arrayResult = array ('response' => 'success');

// echo json_encode($arrayResult);

// if($to) {
//     $name = $_POST['firstName'] + $_POST['lastName'];
//     $email = $_POST['email'];

//     $fields = array(
//         0 => array(
//             'text' => "First Name",
//             'val' => $_POST['firstName']
//         ),
//         1 => array(
//             'text' => "Last Name",
//             'val' => $_POST['lastName']
//         ),
//         2 => array(
//             'text' => 'Email Address',
//             'val' => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
//         ),
//         3 => array(
//             'text' => 'Message',
//             'val' => filter_var($_POST['message'],FILTER_SANITIZE_STRING)
//         )
//         );
// }
?>