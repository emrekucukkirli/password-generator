<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Password Generator</title>
</head>
<body class="dark">
      <?php
      $start_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
      $uppercase_keys = array('A','B','C','D','E','F','G','H','I','J','K','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $symols_easy = array('-','+','.','*');
      $symols_hard = array('!',',','@','#','$','%','^','&','(',')','_','=',':',';','?',);
      $length= (empty($_POST['length'])) ? 8 : $_POST['length'];
      $uppercase = isset($_POST['uppercase']) ? $_POST['uppercase'] : 0;
      $symbol_easy = isset($_POST['symbol-easy']) ? $_POST['symbol-easy'] : 0;
      $symbol_hard = isset($_POST['symbol-hard']) ? $_POST['symbol-hard'] : 0;
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

            for ($i=0;$i< $length; $i++){
            shuffle($result);

            $str .= $result[0];
            
      }
      
?>
      <div class="container">
            <div class="toggle">
                  <input type="checkbox" class="checkbox" id="checkbox">
                  <label for="checkbox" class="label" checked>
                        <i class="fas fa-moon"></i>
                        <i class='fas fa-sun'></i>
                        <div class='ball'></div>
                  </label>
            </div>
            <h1>Password Generator</h1>
            <form class="choose" action="" method="POST">
                  <label for="length">
                        <div>Enter your password length </div>
                        <input type="number" min="6" id="length" name="length" placeholder="Password Length" value="<?php echo $_POST['length']; ?>">
                  </label>
                  <label for="uppercase">
                        <input type="checkbox" name="uppercase" id="uppercase" <?php if(isset($_POST['uppercase'])) echo "checked" ?>>Uppercase <span>( e.g. ABCDEFGH )</span>
                  </label>
                  <label for="symbol-easy">
                        <input type="checkbox" name="symbol-easy" id="symbol-easy" <?php if(isset($_POST['symbol-easy'])) echo "checked" ?>>Symbols Basic <span>( e.g. -+.*)</span>
                  </label>
                  <label for="symbol-hard">
                        <input type="checkbox" name="symbol-hard" id="symbol-hard" <?php if(isset($_POST['symbol-hard'])) echo "checked" ?>>Symbols Complex <span>( e.g. !@#$%^&,_?( )=:;)</span>
                  </label>
                  <input class="generate" type="submit" name="generate" value="Generate">
            </form>

            <hr>
            <div class="password">
                  Your random password: <br> 
                  <input type="text" name="copy" id="copy_input" value="<?php echo $str ?>">
                  <button onclick="copyFun()" id="copy_btn">Copy Password</button>
            </div>
      </div>
      <script src="js/script.js"></script>
</body>
</html>