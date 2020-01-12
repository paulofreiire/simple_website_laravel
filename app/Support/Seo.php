<?php


namespace App\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    private $optimizer;

    public function __construct()
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(env('APP_NAME'), 'pt_br', 'article')->twitterCard(env());
    }
}
