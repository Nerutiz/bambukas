<?php
session_start();



print '
<form name="login" method="post" action="">

<table width="400px" height="500px" align="center" style="font-family:calibri; background-image: url(  	&#39; fonas_email.jpg  	&#39; );
" >

<tr><td colspan="2"></td></tr>
<tr><td colspan="2" align="center" style="width:200px; height:40px; "></td></tr>

<tr><td style="width:150px; height:40px" align="right">Prisijungimo vardas:</td><td style="  text-align: center"><input type="text" name="user" style="width:210px"></td></tr>

<tr><td style="width:150px; height:40px" align="right">Slapta&#382;odis:</td><td style="  text-align: center"><input type="password" name="pass" style="width:210px"></td></tr>
<tr <td colspan="2" style=" height:60px; text-align: center"><input type="submit" name="submit" value="Prisijungti" style="width:210px; height:40px"></td></tr>
<tr><td colspan="2"></td></tr>
</table>

</form>
';

if (isset($_POST['submit'])){

if ($_POST['user'] == 'pastas' && $_POST['pass'] == 'siusti')
{


$_SESSION['user'] = 'pastas';

print "<script type=\"text/javascript\">window.location = \"siusti.php\";</script>";
}

}

?>
