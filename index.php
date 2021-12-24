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
      <form class="choose" action="">
            <label for="length">
                  <div>Enter your password length </div>
                  <input type="number" id="length" placeholder="Password Length">
            </label>
            <!-- <label for="lowercase"><input type="checkbox" name="lowercase" id="lowercase">Lowercase ( e.g. abcdefgh )</label> -->
            <label for="uppercase"><input type="checkbox" name="uppercase" id="uppercase">Uppercase ( e.g. ABCDEFGH )</label>
            <!-- <label for="number"><input type="checkbox" name="number" id="number">Number ( e.g. 123456 )</label> -->
            <label for="symbol-easy"><input type="checkbox" name="symbol-easy" id="symbol-easy">Symbols Easy ( e.g. -+.*)</label>
            <label for="symbol-hard"><input type="checkbox" name="symbol-hard" id="symbol-hard">Symbols Hard ( e.g. !@#$%^&,_?( )=:;)</label>
            <button>Generate</button>
      </form>

<hr>

      <?php

      $all_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','!',',','@','#','$','%','^','&','*','(',')','_','+','=','-',':',';','?','.');
      $start_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
      $uppercase_keys = array('A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $symols_easy = array('-','+','.','*');
      $symols_hard = array('!',',','@','#','$','%','^','&','(',')','_','=',':',';','?',);
      $length = 8;

?>
      <div class="length"> Password length is <b> <?php echo $length ?></b></div>
<?php
      $str = "";

            for ($i=0;$i< $length; $i++){
            shuffle($all_keys);

            $str .= $all_keys[0];
            
      }
      
?>
      <div class="password">Your random password: <b><?php echo $str ?></b></div>

      <!-- <a class="generate" href="<?php $str ?>">Pass Generate</a> -->

  
</body>
</html>