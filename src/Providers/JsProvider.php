<?php

namespace SnowFlakes\Providers;

use Plenty\Plugin\Templates\Twig;

class JsProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('SnowFlakes::js', []);
    }
}