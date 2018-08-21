<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('@kawabot Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('@kawabot ping', function ($bot) {
    $bot->reply('pong');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
