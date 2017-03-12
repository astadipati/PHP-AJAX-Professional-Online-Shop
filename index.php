<?php
/**
 *
 * @author: Sagar
 * Date: 3/26/14
 * Time: 11:25 AM
 */

define('APP',dirname(__FILE__));

$aURL = explode("/",$_SERVER['REQUEST_URI']);

if( strpos(end($aURL),'.php') == -1 )
{
    /* support for procedural code which don't  use class and method */
    require_once APP.$_SERVER['REQUEST_URI'];
}
else
{
    /* support for oop code which uses class and method structure */
    require_once APP."/core/router.php";

    $dispatcher = new dispatcher();

    /** default script path is controllers so if your controllers scripts are in controllers folder you dont need to change script path
     *  if your controller is not in folder called controller then you need to set the script path as follow it will always end with '/'
     */
    $dispatcher->setScriptPath('terminal/');

    /** default controller is defined as welcome in the router but if you want to change the default controller you can change it as follow
     *  default controller's index method will be called at the root url means "/" when no controller is supplied!
     */
    $dispatcher->setDefaultController('home');
    /* the following dispatch method will call the function of class given in url seperated by '/' and also it will pass arguments given in url */
    $dispatcher->dispatch();
}

// Get avaible url
function getUriSegments()
{
    return explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}

// choose uri segment and get the value
function getUriSegment($n)
{
    $d = getUriSegments();
    return count($d)>0&&count($d)>=($n-1)?$d[$n]:'';
}