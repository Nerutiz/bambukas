
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="lt" http-equiv="Content-Language">
</head>

<?php





print '
<form name="login" method="post" action="" enctype="multipart/form-data">

<table width="500px" height="500px" align="center" style="font-family:calibri; 
" >
<tr><td colspan="2" align="center">';





print '
</td></tr>
<tr><td style="width:150px; height:40px" align="right" valign="top">Emailai:</td><td style="  text-align: center">
<textarea name="em" style="width: 300px; height: 284px;" ></textarea>
</td></tr>

<tr><td style="width:150px; height:40px" align="right">Tema:</td><td style="  text-align: center"><input type="text" name="tema" style="width:300px"></td></tr>


<tr><td>Pasirinkite faila prisegimui:</td><td> 
<input type="file" name="uploaded_file"></td></tr>

<tr> <td colspan="2" style=" height:60px; text-align: center"><input type="submit" name="submit" value="Si&#363;sti" style="width:210px; height:40px"></td></tr>
<tr><td colspan="2" style=" height:40px;" align="center"><a href="siusti.php?x=a">Atsijungti</a></td></tr>
<tr><td colspan="2"></td></tr>
</table>

</form>

';


if (isset($_POST['submit'])){

/*

$data = $_POST['em'];

$adresas = explode(" ",$data);

$adresas = preg_split("/[\s,]+/", $data);

$kiek = count($adresas);


for ($i=0; $i< $kiek; $i++){


print $i.'.'.$adresas[$i].'<br/>';

}

$subject = $_POST['tema'];

*/
$z = '<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<body>
Laba diena!

Statote namą?

Bute ar name darote remontą?

Jūsų draugai statosi namą ar daro remontą?

Turite klausimų?

Jei taip, tai šis laiškas kaip tik Jums!

Mes esame profesionali komanda, projektuojame ir montuojame šildymo,
vandentiekio ir nuotekų sistemas. Komfortą kuriame priimdami racionalius
sprendimus, dirbdami kokybiškai ir greitai. Lankstus bendravimas su
Klientais garantuoja gerus rezultatus.


Klientus galime MALONIAI NUSTEBINTI KAINOMIS ir NEPRIEKAIŠTINGU DARBU!

Prisegtuke rasite platesnį aprašymą, ką mes veikiame...

DAR DAUGIAU INFO www.mansanas.lt


Su pagarba,
Arvydas Kazlauskas
Tel.: +370 674 78943
www.mansanas.lt
</body>
</html>
';

$z = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
</head>

<body>

<p>Laba diena!<br />
<br />
Statote namą?<br />
<br />
Bute ar name darote remontą?<br />
<br />
Jūsų draugai statosi namą ar daro remontą?<br />
<br />
Turite klausimų?<br />
<br />
Jei taip, tai šis laiškas kaip tik Jums!<br />
<br />
Mes esame profesionali komanda, projektuojame ir montuojame šildymo,<br />
vandentiekio ir nuotekų sistemas. Komfortą kuriame priimdami racionalius<br />
sprendimus, dirbdami kokybiškai ir greitai. Lankstus bendravimas su<br />
Klientais garantuoja gerus rezultatus.<br />
<br />
<br />
Klientus galime MALONIAI NUSTEBINTI KAINOMIS ir NEPRIEKAIŠTINGU DARBU!<br />
<br />
Prisegtuke rasite platesnį aprašymą, ką mes veikiame...<br />
<br />
DAR DAUGIAU INFO www.mansanas.lt<br />
<br />
<br />
Su pagarba,<br />
Arvydas Kazlauskas<br />
Tel.: +370 674 78943<br />
www.mansanas.lt<br />
</p>

</body>

</html>



';


$message = $z;

/*
$from = "Bambukas <bambukas@it.us.lt>";

$to = "smidras@gmail.com";


$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "addAttachment('http://www.mansanas.lt/1.png')";
$headers1 .= "Content-type: text/html; charset=utf-8\r\n";
$headers1 .= "To: ".$to."\r\n";
$headers1 .= "From: ".$from."\r\n";
$headers1 .= "Reply-To: ".$from."\r\n";


mail($to, $subject, $message, $headers1);
print "<script type=\"text/javascript\">window.location = \"nusiusta.php\";</script>";
*/

$fileatt = "Mansanas_sildymo_sistemos_ir_santechnika.pdf"; // Path to the file 
$fileatt_type = "application/octet-stream"; // File Type 
$fileatt_name = "Mansanas šildymo sistemos ir santechnika.pdf"; // Filename that will be used for the file as the attachment 

$email_from = "Mansanas <info@mansanas.lt>"; // Who the email is from 
$email_subject = "Šildymo sistemos ir santechnika"; // The Subject of the email 
$email_txt = ""; // Message that the email has in it 

$email_to = "smidras@gmail.com"; // Who the email is too 

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
"Content-Type:text/html; charset=\"iso-8859-1\"\n" . 
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

}





?>

