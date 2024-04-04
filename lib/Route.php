<?php 
namespace Lib;

class Route{ 
   private static  $routes = [];

   public static function get($uri, $callaback){
      // Metodo para quitar las diagonales externas de una uri
      $uri = trim($uri,'/');
      self::$routes['GET'][$uri] = $callaback;

   }
   public static function post($uri, $callaback){  
    self::$routes['POST'][$uri] = $callaback;
   }

   public static function dispatch(){
       
      $uri = $_SERVER['REQUEST_URI'];
      $uri = trim($uri,'/');

      //Metodo que sirve para saber porque metodo se esta enviado los datos del formulario
      $method = $_SERVER['REQUEST_METHOD'];
   
      //Iteracion que busca las uris y ejecuta las callaback que son mandadas por parametro
      foreach (self::$routes[$method] as $route => $callback) {
         //Comparando las 2 uris
         // if($route == $uri){
         //    $callback();
         //    return;
         // }
         
         //cahcar todo lo que esta despues de ":" que sea texto
         if(strpos($route,':') !== false){
            $route = preg_replace('#:[a-zA-Z]+#', '([a-zA-Z]+)', $route);
         }
         if(preg_match("#^$route$#",$uri,$matches)){
            $params = array_slice($matches,1);

            $response = $callback(...$params);
            if(is_array($response)|| is_object($response)){
               echo json_encode($response);
            }else{
               echo $response;
            }
            return;
         }

         
        
      }
      echo 404;
   }
}