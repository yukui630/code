
<?php
if($_GET){
	function _get($str){ 
		$val = !empty($_GET[$str]) ? $_GET[$str] : null; 
		return $val; 
	} 
	echo _get('username');
}
if($_POST){
	function _get($str){ 
		$val = !empty($_POST[$str]) ? $_POST[$str] : null; 
		return $val; 
	} 
	echo _get('username');
}


	
