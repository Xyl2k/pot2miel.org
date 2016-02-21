<?php
$shell = htmlentities($_GET['fil_config'],ENT_QUOTES);
$exploit_path = $_SERVER['REQUEST_URI'];
if (getenv(HTTP_X_FORWARDED_FOR)){
	$ip=getenv(HTTP_X_FORWARDED_FOR);
	} else {
		$ip=getenv(REMOTE_ADDR);
	}
	if ($ip){
		$payload = file_get_contents("$_SERVER['SERVER_NAME']/azerty.php?azerty=$exploit_path&ip=$ip");
		}
	
$random_number = rand(1,21); 

function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
	}
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?php echo $exploit_path; ?></title>
</head>
<body>
<article> 
<?php echo $exploit_path; ?></article>
<figure><a href="<?php echo $exploit_path; ?>" title="<?php echo $exploit_path; ?>" alt="<?php echo $exploit_path; ?>"><img src="<?php echo $_SERVER["SERVER_NAME"]; ?>/images/<?php echo $random_number; ?>.jpg" /></a></figure>
<footer><a href="<?php echo $exploit_path; ?>" title="<?php echo $exploit_path; ?>"><?php echo $exploit_path; ?></a></footer>
</body>
</html>
