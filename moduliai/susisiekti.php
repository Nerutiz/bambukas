<?php



if (isset($_POST['siusti'])){


$from    = $_POST['pastas'];
$message = $_POST['zinute'];
$subject = $_POST['tema'];


$to = 'bambukas@it.us.lt';

$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=utf-8\r\n";
$headers1 .= "To: ".$to."\r\n";
$headers1 .= "From: ".$from."\r\n";
$headers1 .= "Reply-To: ".$from."\r\n";


mail($to, $subject, $message, $headers1);

}
?>