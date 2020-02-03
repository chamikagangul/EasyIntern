<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__));


//load configuration and helper functions
require_once(ROOT.DS.'Config'.DS.'config.php');
require_once(ROOT.DS.'App'.DS.'lib'.DS.'helpers'.DS.'functions.php');

//Autoload Classess
function autoload($className){
  if(file_exists(ROOT.DS.'Core'.DS.$className.'.php')){
    require_once(ROOT.DS.'Core'.DS.$className.'.php');
  }else if(file_exists(ROOT.DS.'App'.DS.'controllers'.DS.$className.'.php')){
    require_once(ROOT.DS.'App'.DS.'controllers'.DS.$className.'.php');
  }else if(file_exists(ROOT.DS.'App'.DS.'models'.DS.$className.'.php')){
    require_once(ROOT.DS.'App'.DS.'models'.DS.$className.'.php');
  }
}

spl_autoload_register('autoload');
session_start();

$url = isset($_SERVER['PATH_INFO']) ? explode('/',ltrim($_SERVER['PATH_INFO'],'/')): [];
$db = DB::getInstance();
if(!(Session::exists(CURRENT_USER_SESSION_NAME)) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)){
  Users::loginUserFromCookie();
}

//Route the request
Router::route($url);
