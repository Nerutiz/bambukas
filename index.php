<?php

@session_start();

class svetaine {
	public $content = 'content.php';
	
	public function setmodule() {
		$this->modulis = (@$_GET['m']) ? $_GET['m'] : 'apie_mus';
		
		if($_GET['m'] == 'apie_mus'){$this->headers = '<span>Apie mus</span>';}
		if($_GET['m'] == 'paslaugos'){$this->headers = '<span>Paslaugos</span>';}
		if($_GET['m'] == 'darbai'){$this->headers = '<span>Atlikti darbai</span>';}
		if($_GET['m'] == 'kontaktai'){$this->headers = '<span>Kontaktai</span>';}
		
		
		
		
	}
			
	public function spauzdinti() {
		$this->setmodule();
		$content  = file_get_contents($this->content);
		$sulauzomm   = explode('{meniu}', $content);
		
	        include_once 'moduliai/susisiekti.php';
			print $sulauzomm[0];
			
			include_once 'moduliai/meniu.php';
			
			
			
			
		
		
	
		
		
		$sulauzomh   = explode('{head}', $sulauzomm[1]);
		
		print $sulauzomh[0];
		
		print $this->headers;
		
		
		
		
		$sulauzom   = explode('{content}', $sulauzomh[1]);
		
		print $sulauzom[0];
		
		if (file_exists('moduliai/'.$this->modulis . '.php')) {
			include_once 'moduliai/'.$this->modulis . '.php';
		}
		print $sulauzom[1];
	
	
	
	

		

	}
}


$pradinis = new svetaine();
$pradinis->setmodule();
$pradinis->spauzdinti();

?>