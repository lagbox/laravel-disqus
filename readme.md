# Disqus comments for your resources

Simple, probably unneeded, package to add the ability to easily add Disqus comments on your site. You just need to implement the `HasDisqus` interface on your model, add `disqus` to your services config file and add a line to your view.

## Installation

Composer require:

```php
composer require lagbox\disqus
```

Add the service provider to your `config/app.php` `$providers` array:

```php
lagbox\disqus\DisqusServiceProvider::class,
```

If you would like to modify the `comments` view, you can publish it:

```php
php artisan vendor:publish --provider="lagbox\disqus\DisqusServiceProvider"
```

## Configuration

After you have signed up with Disqus you only need the domain that your embed script is located at.

Add to your `config/services.php`:

```php
'disqus' => [
    'domain' => 'yoursite.disqus.com'
]
```

## Implementing the Interface

You can add the `lagbox\disqus\Traits\HasDisqus` trait to implement the first method of the interface `getDisqus`. This method of the trait gathers the data from `disqusUrl` and `disqusIdentifier` into an associative array.

```php
use lagbox\disqus\Interface\HasDisqus;
use lagbox\disqus\Traits\HasDisqus as HasDisqusTrait;

class YourModel extends Model implements HasDisqus
{
    use HasDisqusTrait;

    ...

    public function disqusUrl()
    {
        // full url to your resource
        return route('articles.show', $this);
    }

    public function disqusIdentifier()
    {
        // the unique identifier for this resource for disqus purposes
        return 'blog/'. $this->slug;
    }
}
```

Now your model is ready to return the needed information for the disqus comments script.

## Views

You can use the blade directive that the Service Provider adds:

```php
@disqus($hasDisqusModel)
```

Or call the helper function directly:

```php
{!! disqusScript($hasDisqusModel) !!}

<?php echo disqusScript($hasDisqusModel); ?>
```

>Just make sure to pass a model that implements the `HasDisqus` interface.

## Misc.

Literally you can just do all of this yourself. The Disqus javascript only requires 3 pieces of information.

This is just here as a usable example.