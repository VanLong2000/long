<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $request = new Client();
        $response = $request->post("https://api.telegram.org/bot1748318800:AAGPyll-731rw1WU5ECUkC1OOOplDBngU1A/setWebhook?url=https://4c3d1a807cd4.ngrok.io/botman");
        dump($response->getBody()->getContents());
        return $response->getStatusCode();
    }
}
