function change(id){
var id2 = '';	
	

	
if (id == '1'){id2 = 'apie_mus';}	
if (id == '2'){id2 = 'paslaugos';}	
if (id == '3'){id2 = 'darbai';}	
if (id == '4'){id2 = 'kontaktai';}	

if (document.getElementById(id).style.marginRight == "30px")
	{}
	else
{

	
document.getElementById(id2).className = "over";
	}
	
	}
function change2(id){
var id2 = '';	
	

	
if (id == '1'){id2 = 'apie_mus';}	
if (id == '2'){id2 = 'paslaugos';}	
if (id == '3'){id2 = 'darbai';}	
if (id == '4'){id2 = 'kontaktai';}	

if (document.getElementById(id).style.marginRight == "30px")
	{}
	else
{

	
document.getElementById(id2).className = "out";
	}
	
	}