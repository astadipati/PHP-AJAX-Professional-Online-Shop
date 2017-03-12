<?php

class Product
{
    public function index()
    {
        
    }

    function buy()
    {
    	include 'connection.php';
    	$i = getUriSegment(5);
    	$p = db("SELECT * FROM os_php_ajax_posts WHERE wdyw='1' AND url='$i' LIMIT 1");
    	$p->execute();
    	$data = $p->fetch();
    	include 'views/detail.php';
    }
}