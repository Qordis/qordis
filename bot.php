<?php
header('Content-Type: text/html; charset=utf-8');
echo "OK1";
$token = "532351820:AAGl5ALv54LSQaTD-Mh5KB7gzdddTt3vRvM";
require_once "vendor/autoload.php";

try {
    $bot = new \TelegramBot\Api\Client($token);
    $bot->command('ping', function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), 'pong!');
    });
    
    $bot->run();

} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}

echo "OK2";
?>