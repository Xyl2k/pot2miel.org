<?php
$exploit_path = htmlentities($_GET['azerty'],ENT_QUOTES);
$ip = htmlentities($_GET['ip'],ENT_QUOTES);
date_default_timezone_set('Europe/Paris');
$cdate = new DateTime();
$cdate = $cdate->getTimestamp();

if(strpos($exploit_path,'?')) {
	$host = gethostbyaddr($ip);
			$file_handle = fopen('honeylogs.html', 'a');
			if($file_handle){
				$output = $cdate. " - " .$ip. " - " .$host. " - " .$exploit_path . "<br>";
				fwrite($file_handle, $output);
				fclose($file_handle);
			}
	}

?>

