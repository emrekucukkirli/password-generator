<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Password Generator</title>
</head>
<body>
      <?php

      $all_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','!',',','@','#','$','%','^','&','*','(',')','_','+','=','-',':',';','?','.',' ');

      $length = 8;


      echo "<br/> Password length is $length <br><br>";

      $str = "";

            for ($i=0;$i< $length; $i++){
            shuffle($all_keys);

            $str .= $all_keys[0];
            
      }
      
?>
      <div class="password">Your random password: <b><?php echo $str ?></b></div>

      <a class="generate" href="<?php $str ?>">Pass Generate</a>

  
</body>
</html>