<?php

namespace lagbox\disqus\Traits;

trait HasDisqus
{
    public function getDisqus()
    {
        return [
            'url' => $this->disqusUrl(),
            'identifier' => $this->disqusIdentifier(),
        ];
    }
}
