<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\DogService;
use App\Http\Controllers\Controller;

class SubBreedController extends Controller
{
    /**
     * @var DogService
     */
    private $photos;

    /**      * Controller constructor      *       * @return void */
    public function __construct()
    {
        $this->photos = new DogService;
    }

    /**      * Return a random dog image from all breeds.      *      * @return void */
    public function random($bot, $breed, $subBreed)
    {
        \Log::info($breed);
        \Log::info($subBreed);
        $bot->reply($this->photos->bySubBreed($breed, $subBreed));
    }
}


