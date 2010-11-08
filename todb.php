<?php
include 'connect.php';


print '
<form name="login" method="post" action="">

<table width="500px" height="500px" align="center" style="font-family:calibri; 
" >
<tr><td colspan="2" align="center">';

print '
</td></tr>
<tr><td colspan="2" style=" height:40px; font-size:small" align="center">Emilu ivedimas i db.</td></tr>

<tr><td style="width:150px; height:40px" align="right" valign="top">Emailai:</td><td style="  text-align: center">
<textarea name="em" style="width: 300px; height: 284px;" ></textarea>
</td></tr>
<tr> <td colspan="2" style=" height:60px; text-align: right; padding-right:60px"><input type="submit" name="submit" value="Suvesti" style="width:210px; height:40px"></td></tr>

<tr><td colspan="2"></td></tr>
</table>

</form>

';

if (isset($_POST['submit'])){

$data = $_POST['em'];

$d = explode(',',$data);
$kiek = count($d);


for ($i=0; $i< $kiek; $i++){
	
	
$x = $d[$i];	
$er = 	explode('@',$d[$i]);
$g = count($er);
if ($er[0] != '' and $er[1] != '') { 

$de = explode("www",$er[1]);

$xa = $er[0].'@'.$de[0];



$query = "INSERT INTO email (id,email) VALUES (NULL,'$xa')";

mysql_query($query) or die(mysql_error());

}
	
	
	
	}








print '<div style="position:absolute; margin-left:400px">'. $kiek. '</div>';
}
?>