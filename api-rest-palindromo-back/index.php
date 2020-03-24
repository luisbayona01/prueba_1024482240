<?php


require 'autoload.php';
//require  dirname("/routes/request/Request.php");
//require';
require dirname(__FILE__)."/routes/request/Request.php";
require dirname(__FILE__)."/routes/route/Router.php";  

  $request=new Request();
  $router= new Router($request);
  
try {
  $router->loadRoutes('routes/routes.php')->match(); 
  $router->dispatch();  
  
  } catch (Exception $e) {
  	echo   $e->getMessage();
  }

