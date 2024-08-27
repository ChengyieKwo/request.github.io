<?php
	if(isset($_GET["URL"])){
		$headers = array($_GET["Header"]);
		$context = stream_context_create(array('http' => array('header' => $headers)));
		$url = $_GET["URL"];
		$content = file_get_contents($url, false, $context);
	}else{
		$content = file_get_contents("about.html");
	}
	echo $content;
?>
	
