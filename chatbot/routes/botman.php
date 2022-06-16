<?php
use App\Http\Controllers\BotManController;
use App\Http\Controllers\AllBreedsController;
use App\Http\Controllers\SubBreedController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\FallbackController;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

$botman = resolve('botman');
//$config = [
//    // Your driver-specific configuration
//     "telegram" => [
//        "token" => "1748318800:AAGPyll-731rw1WU5ECUkC1OOOplDBngU1A"
//     ]
//];
//DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
//
//// Create an instance
//$botman = BotManFactory::create($config);
$botman->hears('Hi', function ($bot) {
    \Log::info("listen");
    $bot->reply('Hello!');
});
$botman->hears('what is your name', function ($bot) {
    $bot->reply('My name is Botman!');
});
$botman->hears('age', function ($bot) {
    $bot->reply('20!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');


//use App\Conversations\StartConversation;

//$botman = resolve('botman');

$botman->hears('/random', 'App\Http\Controllers\AllBreedsController@random');

$botman->hears('/b {breed}', 'App\Http\Controllers\AllBreedsController@byBreed');

$botman->hears('/s {breed}:{subBreed}', 'App\Http\Controllers\SubBreedController@random');

$botman->hears('Start conversation', 'App\Http\Controllers\ConversationController@index');

$botman->fallback('App\Http\Controllers\FallbackController@index');

