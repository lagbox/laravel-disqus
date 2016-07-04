<?php

namespace lagbox\disqus;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DisqusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('disqus', function ($expression) {
            return "<?php echo disqusScript{$expression}; ?>";
        });

        $this->loadViewsFrom(__DIR__.'/views', 'disqus');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/disqus'),
        ]);
    }

    public function register()
    {

    }
}
