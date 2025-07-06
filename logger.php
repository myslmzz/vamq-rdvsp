
<?php
$data = json_decode(file_get_contents("php://input"), true);
$log = "[" . date("Y-m-d H:i:s") . "] " . json_encode($data) . PHP_EOL;
file_put_contents("log.txt", $log, FILE_APPEND);
?>
