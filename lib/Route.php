<?php 
namespace Lib;

class Route{ 
   public static  $routes = [];

   static function get($url, $callaback){
    self::$routes['GET'][$url] = $callaback;

   }
   static function post($url, $callaback){  
    self::$routes['POST'][$url] = $callaback;
   }

   
}