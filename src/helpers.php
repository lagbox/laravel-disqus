<?php

use lagbox\disqus\Interfaces\HasDisqus;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

function disqusScript(HasDisqus $entity)
{
    return View::make('disqus::comments', [
        'disqusData' => $entity->getDisqus(),
        'disqusUrl' => Config::get('services.disqus.domain'),
    ])->render();
}
