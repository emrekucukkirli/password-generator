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
      <form class="choose" action="" method="POST">
            <label for="length">
                  <div>Enter your password length </div>
                  <input type="number" min="6" id="length" name="length" placeholder="Password Length">
            </label>
            <!-- <label for="lowercase"><input type="checkbox" name="lowercase" id="lowercase">Lowercase ( e.g. abcdefgh )</label> -->
            <label for="uppercase"><input type="checkbox" name="uppercase" id="uppercase">Uppercase ( e.g. ABCDEFGH )</label>
            <!-- <label for="number"><input type="checkbox" name="number" id="number">Number ( e.g. 123456 )</label> -->
            <label for="symbol-easy"><input type="checkbox" name="symbol-easy" id="symbol-easy">Symbols Easy ( e.g. -+.*)</label>
            <label for="symbol-hard"><input type="checkbox" name="symbol-hard" id="symbol-hard">Symbols Hard ( e.g. !@#$%^&,_?( )=:;)</label>
            <input class="generate" type="submit" name="generate" value="Generate">
      </form>

<hr>

      <?php

      // $all_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','!',',','@','#','$','%','^','&','*','(',')','_','+','=','-',':',';','?','.');
      $start_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
      $uppercase_keys = array('A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $symols_easy = array('-','+','.','*');
      $symols_hard = array('!',',','@','#','$','%','^','&','(',')','_','=',':',';','?',);
      $length= (empty($_POST['length'])) ? 8 : $_POST['length'];
      $uppercase = isset($_POST['uppercase']) ? $_POST['uppercase'] : 0;
      $symbol_easy = isset($_POST['symbol-easy']) ? $_POST['symbol-easy'] : 0;
      $symbol_hard = isset($_POST['symbol-hard']) ? $_POST['symbol-hard'] : 0;
?>
      <div class="length"> Password length is <b> <?php echo $length ?></b></div>
<?php
      $str = "";
      $result = $start_keys;
      if ($uppercase && $symbol_easy && $symbol_hard ) {
            $result = array_merge($start_keys, $uppercase_keys, $symols_easy, $symols_hard );
      }
      elseif ($uppercase && $symbol_easy) {
            $result = array_merge($start_keys, $uppercase_keys, $symols_easy);
      }
      elseif ($uppercase && $symbol_hard) {
            $result = array_merge($start_keys, $uppercase_keys, $symols_hard);
      }
      elseif ($symbol_hard && $symbol_easy) {
            $result = array_merge($start_keys, $symols_hard, $symols_easy);
      }
      elseif ($uppercase) {
            $result = array_merge($start_keys, $uppercase_keys);
      }
      elseif ($symbol_easy) {
            $result = array_merge($start_keys, $symols_easy);
      }
      elseif ($symbol_hard) {
            $result = array_merge($start_keys, $symols_hard);
      }
      // if ($_POST['uppercase'] && $_POST['symbol-easy'] && $_POST['symbol-hard'] ) {
      //       $result = array_merge($start_keys, $uppercase_keys, $symols_easy, $symols_hard );
      // }
      // elseif ($_POST['uppercase'] && $_POST['symbol-easy']) {
      //       $result = array_merge($start_keys, $uppercase_keys, $symols_easy);
      // }
      // elseif ($_POST['uppercase'] && $_POST['symbol-hard']) {
      //       $result = array_merge($start_keys, $uppercase_keys, $symols_hard);
      // }
      // elseif ($_POST['symbol-hard'] && $_POST['symbol-easy']) {
      //       $result = array_merge($start_keys, $symols_hard, $symols_easy);
      // }
      // elseif ($_POST['uppercase']) {
      //       $result = array_merge($start_keys, $uppercase_keys);
      // }
      // elseif ($_POST['symbol-easy']) {
      //       $result = array_merge($start_keys, $symols_easy);
      // }
      // elseif ($_POST['symbol-hard']) {
      //       $result = array_merge($start_keys, $symols_hard);
      // }

            for ($i=0;$i< $length; $i++){
            shuffle($result);

            $str .= $result[0];
            
      }
      
?>
      <div class="password">Your random password: <b><?php echo $str ?></b></div>
</body>
</html>