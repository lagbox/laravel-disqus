<?php

namespace lagbox\Disqus\Traits;

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
