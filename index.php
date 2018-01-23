<?php
header('Content-Type: text/html; charset=utf-8');
require_once("vendor/autoload.php");
$token = "532351820:AAGl5ALv54LSQaTD-Mh5KB7gzdddTt3vRvM";
$bot = new \TelegramBot\Api\Client($token);
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
/help - помощ';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->run();
echo "OK"

?>