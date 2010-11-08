<?php




session_start();
include 'connect.php';
if (isset($_POST['edit'])){header('Location: k.php');}
if ($_SESSION['user'] != 'pastas'){
header('Location: email_log.php');}


$query = mysql_query("SELECT * FROM padeka");
@$rez =	mysql_fetch_assoc($query);
@$kiek = mysql_num_rows($query);
$padeka = $rez['tekstas'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Padėkos siuntimas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<form name="login" method="post" action="">

<table width="500px" height="500px" align="center" style="font-family:calibri; 
" >
<tr><td colspan="2" align="center">






</td></tr>
<tr><td style="width:150px; height:40px" align="right">Gavėjas:</td><td style="  text-align: center"><input type="text" name="gavejas" style="width:300px"></td></tr>
<tr><td style="width:150px; height:40px" align="right">Siuntėjas:</td><td style="  text-align: center"><input type="text" name="siuntejas" style="width:300px"></td></tr>

<tr><td style="width:150px; height:40px" align="right">Tema:</td><td style="  text-align: center"><input type="text" name="tema" style="width:300px"></td></tr>
<tr><td style="width:150px; height:40px" align="right">Laiškas:</td><td style="  text-align: left; padding-left:22px"><input type="submit" name="edit" value="Keisti laiško tekstą" style="width:200px; height:25px; background-repeat:no-repeat; background-color:white; background-image:url(er.jpg); border:0" /></td></tr>
<tr><td style="width:500px; height:708px;" colspan="2">

<table  cellpadding="0px" cellspacing="0px">
	<tr>
	
		<td rowspan="3" style="width:86px; margin-bottom:0px; padding-bottom:0px ">
		<img alt="pl" height="708" src="http://www.mokslofestivalis.eu/padeka/pl.jpg" width="86" style="margin-bottom:0px; padding-bottom:0px" /></td>
		<td style="width:324px; height:137px; margin-bottom:0px; padding-bottom:0px"  >
		<img alt="pv" height="137" src="http://www.mokslofestivalis.eu/padeka/pv.jpg" width="324" /></td>
		<td rowspan="3" style="width:90px; margin-bottom:0px; padding-bottom:0px"  >
		<img alt="pr" height="708" src="http://www.mokslofestivalis.eu/padeka/pd.jpg" width="90" style="margin-bottom:0px; padding-bottom:0px" /></td>
		
	</tr>
	<tr>
		<td style="width:324px; height:358px; margin-bottom:0px; padding-bottom:0px" height="462px">
		
		<div width="320px" style="width:320px"><?php print $padeka; ?></div>
			
		</td>
		
	</tr>
	<tr>
		<td style="width:324px; height:209px">
		<img alt="pa" height="209" src="http://www.mokslofestivalis.eu/padeka/pa.jpg" width="324" /></td>
	</tr>
		
</table>





</td></tr>


<tr> <td colspan="2" style=" height:60px; text-align: center"><input type="submit" name="submit" value="Siųsti" style="width:210px; height:40px"></td></tr>
<tr><td colspan="2" style=" height:40px;" align="center"><a href="siusti.php?x=a">Atsijungti</a></td></tr>
<tr><td colspan="2"></td></tr>
</table>

</form>

<?php

if (@$_GET['x'] == 'a'){session_destroy(); print "<script type=\"text/javascript\">window.location = \"email_log.php\";</script>";}

if (isset($_POST['submit'])){










$subject = $_POST['tema'];
$siuntejas = $_POST['siuntejas'];
$gavejas = $_POST['gavejas'];




$z = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="lt" http-equiv="Content-Language" />
<body>
<table  cellpadding="0px" cellspacing="0px">
	<tr>
	
		<td rowspan="3" style="width:86px; margin-bottom:0px; padding-bottom:0px ">
		<img alt="pl" height="708" src="http://www.mokslofestivalis.eu/padeka/pl.jpg" width="86" style="margin-bottom:0px; padding-bottom:0px" /></td>
		<td style="width:324px; height:137px; margin-bottom:0px; padding-bottom:0px"  >
		<img alt="pv" height="137" src="http://www.mokslofestivalis.eu/padeka/pv.jpg" width="324" /></td>
		<td rowspan="3" style="width:90px; margin-bottom:0px; padding-bottom:0px"  >
		<img alt="pr" height="708" src="http://www.mokslofestivalis.eu/padeka/pd.jpg" width="90" style="margin-bottom:0px; padding-bottom:0px" /></td>
		
	</tr>
	<tr>
		<td style="width:324px; height:358px; margin-bottom:0px; padding-bottom:0px" height="359px">
		
		<div width="320px" style="width:320px">'.$padeka.'</div>
			
		</td>
		
	</tr>
	<tr>
		<td style="width:324px; height:209px">
		<img alt="pa" height="209" src="http://www.mokslofestivalis.eu/padeka/pa.jpg" width="324" /></td>
	</tr>
		
</table>



</body>';


$message = $z;


$from = $siuntejas;
$to = $gavejas;

$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers1 .= "To: ".$to."\r\n";
$headers1 .= "From: ".$from."\r\n";
$headers1 .= "Reply-To: ".$from."\r\n";


mail($to, $subject, $message, $headers1);
print "<script type=\"text/javascript\">window.location = \"nusiusta.php\";</script>";




}
print '</body>';
?>
