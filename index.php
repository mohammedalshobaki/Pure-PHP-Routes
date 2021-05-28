<?php
    $request = $_SERVER['REQUEST_URI'];
    $router = str_replace('/router','',$request);
    $arr= explode('/',$router);
    $id = '';
     if(isset($arr[2])) $id=$arr[2];
     echo $id;

     if($router == '/'){
       include 'home.php';
     }elseif ($router == '/a' or preg_match("/a\/[0-9]/i",$router)){
       include 'a.php';
     }
     elseif ($router == '/b' or preg_match("/b\/[0-9]/i",$router)){
      include 'b.php';
     }else{
        include '404.php';
     }

      ?>
