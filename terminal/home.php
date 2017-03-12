<?php

class Home
{

    public function index()
    {
    	include 'connection.php';
        include './views/home.php';
    }

    function login()
    {
    	include 'connection.php';
    	if(!empty($_POST['identity']) && !empty($_POST['identity']))
    	{
	    	// define post request
	    	$username = $_POST['identity'];
	    	$password = $_POST['password'];

	    	// little cleaning service
	    	$nu = filter_var($username, FILTER_SANITIZE_STRING);
	    	$np = filter_var($password, FILTER_SANITIZE_STRING);

	    	// validator
	    	$nu = validation('0',$nu);
	    	$np = validation('0',$np);

	    	if($nu && $nu != '' && $np && $np != '')
	    	{
	    		$u = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='0' AND username='$nu'");
				$u->execute(); // execute that query
				$ud = $u->fetch(); // get the data
	    		if(!empty($ud))
	    		{
	    			$upw = $ud['password'];
	    			if(password_verify($np, $upw))
	    			{
	    				setUserData($u,$e,$i,$a,$l);
	    			}
	    		}

	    		$e = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='0' AND email='$nu'");
				$e->execute(); // execute that query
				$ed = $e->fetch(); // get the data
	    		if(!empty($ed))
	    		{

	    		}
	    	}
    	}
    	elseif(empty($_SESSION['l']))
    	{
    		echo password_hash('kucingterbang', PASSWORD_BCRYPT);
        	include './views/admin/login.php';
    	}
    	else
    		header('location:'.$my);
    }

    function cart()
    {
    	include 'connection.php';
    	$wdyw = $_POST['wdyw'];
    	$me = $_SESSION['u'];
        $w  = $_POST['w'];  // public url
    	$i  = $_POST['i']; // public id

    	if($wdyw == 'a')
    	{
    		// do insert
    		$do = db("INSERT INTO os_php_ajax_posts (wdyw,url,username) VALUES (8,'$w','$me');");
    		$do->execute();
    		echo '[{"s":"s"}]';
    	}
    	elseif($wdyw == 'd')
    	{
    		// do delete
    		$do = db("DELETE FROM os_php_ajax_posts WHERE wdyw='8' AND id='$i' AND url='$w' AND username='$me';");
    		$do->execute();
    		echo '[{"s":"s"}]';
    	}
        elseif($wdyw == 'e')
        {
            // do emptying cart
            $do = db("DELETE FROM os_php_ajax_posts WHERE wdyw='8' AND username='$me';");
            $do->execute();
            echo '[{"s":"s"}]';
        }
        elseif($wdyw == 'o')
        {
            
        }
    }

}