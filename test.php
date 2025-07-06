<?php
file_get_contents("https://api.telegram.org/bot8072043320:AAFGmu6xSgfwyvvWNWNjguf61mMRaMZrGjw/sendMessage?" . http_build_query([
  "chat_id" => "5818175793",
  "text" => "Test mesej dari PHP logger",
  "parse_mode" => "Markdown"
]));
?>
