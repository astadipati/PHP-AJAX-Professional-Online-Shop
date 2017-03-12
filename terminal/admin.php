<?php

class Admin
{

    public function index()
    {
    	include 'connection.php';

	    if(empty($_SESSION['l']) || $_SESSION['l'] != 13 || $_SESSION['l'] != '13')
    		header('location:'.$my);
    	
        include './views/admin/home.php';
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
	    	$np = $password;

	    	// validator
	    	$nu = validation('0',$nu);

	    	if($nu && $nu != '' && $np && $np != '')
	    	{
	    		$u = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='0' AND username='$nu'");
				$u->execute(); // execute that query
				$ud = $u->fetch(); // get the data
	    		if(!empty($ud))
	    		{
	    			if($ud['level'] != 13 || $ud['level'] != '13')
	    				echo 'window.location.assign("'.$my.'home/login/'.'");';

	    			$upw = $ud['password'];
	    			
	    			if(password_verify($np, $upw))
	    			{
	    				setUserData(
	    					$ud['username'],
	    					$ud['email'],
	    					$ud['image'],
	    					$ud['address'],
	    					$ud['name'],
	    					$ud['level']);
	    					echo 'window.location.assign("'.$my.'admin/'.'");';
	    			}
	    		}

	    		$e = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='0' AND email='$nu'");
				$e->execute(); // execute that query
				$ed = $e->fetch(); // get the data
	    		if(!empty($ed))
	    		{
	    			if($ud != 13 || $ud != '13')
	    				echo 'window.location.assign('.$my.'home/login/'.');';

	    			$upw = $ed['password'];
	    			if(password_verify($np, $upw))
	    			{
	    				setUserData(
	    					$ed['username'],
	    					$ed['email'],
	    					$ed['image'],
	    					$ed['address'],
	    					$ed['name'],
	    					$ed['level']);
	    					echo 'window.location.assign("'.$my.'admin/'.'");';
	    			}
	    			
	    		}
	    		
	    	}
    	}
    	elseif(empty($_SESSION['l']))
    	{
        	include './views/admin/login.php';
    	}
    	else
    		header('location:'.$my);

    }

    function logout()
    {
    	include 'connection.php';
    	session_destroy();
    	header('location:'.$my);
    }

}