<?php
$botToken = "8072043320:AAFGmu6xSgfwyvvWNWNjguf61mMRaMZrGjw";
$chatId = "5818175793";

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query([
  "chat_id" => $chatId,
  "text" => "✅ Test: Bot ni hidup dan boleh hantar mesej!",
  "parse_mode" => "Markdown"
]));
?>
