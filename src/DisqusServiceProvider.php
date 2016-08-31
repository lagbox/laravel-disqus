<?php

namespace lagbox\Disqus;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DisqusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap anything needed.
     *
     * @return void
     */
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

    /**
     * Register any bindings with the container.
     *
     * @return void
     */
    public function register()
    {

    }
}
