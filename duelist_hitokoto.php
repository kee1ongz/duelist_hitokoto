<?php
//Demo version.
header('X-Powered-By:Kee1ongz');
header('access-control-allow-origin:*');

  $array=file('duel.txt');
  //var_dump($array);
  $rand=rand(0,12);
  //var_dump($rand);
  $string=$array[$rand];
  //var_dump($string);
  
header('Content-Type: text/html; charset=UTF-8');
    if ($_GET['code']==='js') {
		 header('Content-type: application/x-javascript; charset=UTF-8');
          echo "function duelist(){document.write(\"";
          echo trim($string);
          echo "\");}";
		 }else{
          //var_dump($string);
          echo trim($string);

          }
	
?>

