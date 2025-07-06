<?php
$ip = $_SERVER['REMOTE_ADDR'];
$data = json_decode(file_get_contents("php://input"), true);
$userAgent = $data['userAgent'] ?? 'Unknown';

$api = "https://ipapi.co/{$ip}/json/";
$info = json_decode(file_get_contents($api), true);

$msg = "🚨 *NEW VISITOR DETECTED*\n\n"
     . "`🌐 IP:` {$ip}\n"
     . "`📍 Location:` {$info['city']}, {$info['country_name']}\n"
     . "`📡 ISP:` {$info['org']}\n"
     . "`🕓 Timezone:` {$info['timezone']}\n"
     . "`🖥️ Device:` {$userAgent}`";

$token = "8072043320:AAFGmu6xSgfwyvvWNWNjguf61mMRaMZrGjw";
$chatid = "5818175793";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chatid&text=" . urlencode($msg) . "&parse_mode=Markdown");
?>
