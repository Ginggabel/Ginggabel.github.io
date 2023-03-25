<?php
$ip = $_SERVER['REMOTE_ADDR'];
$referrer = $_SERVER['HTTP_REFERER'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');
$log_entry = "$date - $ip - $referrer - $user_agent";
    $log_file = 'log.txt';
$handle = fopen($log_file, 'a') or die('Cannot open file: ' . $log_file);
fwrite($handle, $log_entry . "\n");
fclose($handle);
?>
