<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '152410440:AAGOEVJaI8GF98Zcmln6a310ivnLmxxawLE');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
