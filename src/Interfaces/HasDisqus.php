<?php

namespace lagbox\disqus\Interfaces;

interface HasDisqus
{
    /**
     * Get an associative array with the url and identifier for the resource.
     *
     * @return array
     */
    public function getDisqus();

    /**
     * Get the full URL to this entity on the site.
     *
     * @return string The URL
     */
    public function disqusUrl();

    /**
     * Get the unique identifier for this resource for disqus.
     *
     * @return string The unique identifier
     */
    public function disqusIdentifier();
}
