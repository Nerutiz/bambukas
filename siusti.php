

<?php








if (isset($_POST['submit'])){













$z = $_POST['zinute'];


$message = $z;


$fileatt = "Mansanas_sildymo_sistemos_ir_santechnika.pdf"; // Path to the file 
$fileatt_type = "application/octet-stream"; // File Type 
$fileatt_name = "Mansanas šildymo sistemos ir santechnika.pdf"; // Filename that will be used for the file as the attachment 

$email_from = "Mansanas <info@mansanas.lt>"; // Who the email is from 
$email_subject = "Šildymo sistemos ir santechnika"; // The Subject of the email 
$email_txt = ""; // Message that the email has in it 

$email_to = $adresas[$i]; // Who the email is too 

$headers = "From: ".$email_from; 

$file = fopen($fileatt,'rb'); 
$data = fread($file,filesize($fileatt)); 
fclose($file); 

$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

$headers .= "\nMIME-Version: 1.0\n" . 
"Content-Type: multipart/mixed;\n" . 
" boundary=\"{$mime_boundary}\""; 

$email_message .= "This is a multi-part message in MIME format.\n\n" . 
"--{$mime_boundary}\n" . 
"Content-Type:text/html; charset=\"utf-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . 
$email_message . "\n\n"; 
$email_message .= $z;
$data = chunk_split(base64_encode($data)); 

$email_message .= "--{$mime_boundary}\n" . 
"Content-Type: {$fileatt_type};\n" . 
" name=\"{$fileatt_name}\"\n" . 
//"Content-Disposition: attachment;\n" . 
//" filename=\"{$fileatt_name}\"\n" . 
"Content-Transfer-Encoding: base64\n\n" . 
$data . "\n\n" . 
"--{$mime_boundary}--\n"; 




mail($email_to, $email_subject, $email_message, $headers); 


$email_to = '';
$email_subject = ''; 
$email_message = ''; 
$headers = '';

}
print "<script type=\"text/javascript\">window.location = \"nusiusta.php\";</script>";
}





?>

