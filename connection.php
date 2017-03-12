<?php
// Start Session
session_start();

function db($do)
{
	// DB Info
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rubi_tutorial";

	// DO Connect
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // customizing PDO
	return $conn->prepare($do);
}

// define base url
$my  = "http://".$_SERVER['HTTP_HOST'];
$my .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

// define source file place | $my for define site base
define('img', $my.'assets/img/', true);
define('js', $my.'assets/js/', true);
define('css', $my.'assets/css/', true);

// Public Title
$hometitle = 'RUBI STORE - EST 1998 - kutemukan.com';

// Money Info
$moneyinfo = 'Rp.';

// Content
$new = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' ORDER BY id DESC");
$popular = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' ORDER BY viewer DESC");
$random = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' ORDER BY rand();");

$testimonial  = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='4' ORDER BY rand();");


// Get User Info
function user($u,$w)
{
	// SELECT $w FROM user $u
	$user = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='0' AND username='$u'");
	$user->execute();
	$a = $user->fetch();
	return $a[$w];
}

// Get User Info
function product($u,$w)
{
	// SELECT $w FROM user $u
	$user = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' AND url='$u'");
	$user->execute();
	$a = $user->fetch();
	return $a[$w];
}

// Form Validator & cleaner
function validation($w,$d) {
  	if($w == '0')
  	{
		$data = trim($d);
		$data = stripslashes($d);
		$data = htmlspecialchars($d);
		return $data;
  	}
}

function setUserData($u,$e,$i,$a,$n,$l) // username,email, image, address, name, level
{
    $_SESSION["u"] = $u;
    $_SESSION["e"] = $e;
    $_SESSION["i"] = $i;
    $_SESSION["a"] = $a;
    $_SESSION["n"] = $n;
    $_SESSION["l"] = $l;
    return false;
}