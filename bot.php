<?php
header('Content-Type: text/html; charset=utf-8');
echo "OK1";
require_once("vendor/autoload.php");
$token = "532351820:AAGl5ALv54LSQaTD-Mh5KB7gzdddTt3vRvM";
$bot = new \TelegramBot\Api\BotApi($token);
$bot->command('start', function ($message) use ($bot) {
    $answer = '����� ����������!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
echo "OK2";
$bot->command('help', function ($message) use ($bot) {
    $answer = '�������:
/help - �����';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->run();

echo "OK3";
?>