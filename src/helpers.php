<?php

use lagbox\Disqus\Interfaces\HasDisqus;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

if (! function_exists('disqusScript')) {
    /**
     * Return the rendered comments html.
     * @param  \lagbox\Disqus\Interfaces\HasDisqus $entity
     * @return string
     */
    function disqusScript(HasDisqus $entity)
    {
        return View::make('disqus::comments', [
            'disqusData' => $entity->getDisqus(),
            'disqusUrl' => Config::get('services.disqus.domain'),
        ])->render();
    }
}
