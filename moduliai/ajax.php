<script type="text/javascript">
function apie(id)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   document.getElementById("darbai").style.backgroundImage = "";
   document.getElementById("apie_mus").style.backgroundImage = "url(paslaugos/rodykle.png)";
   document.getElementById("paslaugos").style.backgroundImage = "";
   document.getElementById("kontaktai").style.backgroundImage = "";
   document.getElementById("2").style.marginRight = "40px";
   document.getElementById("3").style.marginRight = "40px";
   document.getElementById("4").style.marginRight = "40px";
   
   
 document.getElementById(id).style.marginRight="20px";
	
    document.getElementById("content").innerHTML=xmlhttp.responseText;
	
	
	
	
    }
  }
xmlhttp.open("GET","moduliai/apie_mus.php",true);
xmlhttp.send();
}
function paslaugos(id)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   document.getElementById("darbai").style.backgroundImage = "";
   document.getElementById("apie_mus").style.backgroundImage = "";
   document.getElementById("paslaugos").style.backgroundImage = "url(paslaugos/rodykle.png)";
   document.getElementById("kontaktai").style.backgroundImage = "";
   document.getElementById("1").style.marginRight = "40px";
   document.getElementById("3").style.marginRight = "40px";
   document.getElementById("4").style.marginRight = "40px";
   
	document.getElementById(id).style.marginRight="20px";
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","moduliai/paslaugos.php",true);
xmlhttp.send();
}


function darbai(id)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   document.getElementById("darbai").style.backgroundImage = "url(paslaugos/rodykle.png)";
   document.getElementById("apie_mus").style.backgroundImage = "";
   document.getElementById("paslaugos").style.backgroundImage = "";
   document.getElementById("kontaktai").style.backgroundImage = "";
   document.getElementById("2").style.marginRight = "40px";
   document.getElementById("1").style.marginRight = "40px";
   document.getElementById("4").style.marginRight = "40px";
	
	document.getElementById(id).style.marginRight="20px";
	
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","moduliai/darbai.php",true);
xmlhttp.send();
}


function kontaktai(id)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   document.getElementById("darbai").style.backgroundImage = "";
   document.getElementById("apie_mus").style.backgroundImage = "";
   document.getElementById("paslaugos").style.backgroundImage = "";
   document.getElementById("kontaktai").style.backgroundImage = "url(paslaugos/rodykle.png)";
   document.getElementById("2").style.marginRight = "40px";
   document.getElementById("3").style.marginRight = "40px";
   document.getElementById("1").style.marginRight = "40px";

	document.getElementById(id).style.marginRight="20px";
	
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","moduliai/kontaktai.php",true);
xmlhttp.send();
}


</script>